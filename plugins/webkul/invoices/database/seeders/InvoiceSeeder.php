<?php

namespace Webkul\Invoice\Database\Seeders;

use Illuminate\Database\Seeder;
use Webkul\Account\Enums\MoveState;
use Webkul\Account\Enums\MoveType;
use Webkul\Account\Enums\PaymentState;
use Webkul\Account\Models\Move;
use Webkul\Account\Models\MoveLine;
use Webkul\Invoice\Models\Invoice;
use Webkul\Invoice\Models\Product;
use Webkul\Partner\Models\Partner;
use Webkul\Security\Models\User;
use Webkul\Support\Models\Company;
use Webkul\Support\Models\Currency;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        $company = Company::first();
        $currency = Currency::first();
        $customers = Partner::where('sub_type', 'customer')->get();
        $products = Product::where('enable_sales', true)->get();

        if (!$user || !$company || !$currency || $customers->isEmpty() || $products->isEmpty()) {
            $this->command->warn('Missing required data: User, Company, Currency, Customers or Products. Please run the main seeders first.');
            return;
        }

        // Créer quelques factures de démonstration
        $invoices = [
            [
                'name' => 'INV/2026/0001',
                'invoice_date' => now()->subDays(30),
                'invoice_date_due' => now()->subDays(15),
                'state' => MoveState::POSTED,
                'payment_state' => PaymentState::NOT_PAID,
                'amount_untaxed' => 599.99,
                'amount_tax' => 119.998,
                'amount_total' => 719.988,
                'amount_residual' => 719.988,
                'products' => [
                    ['product' => 'Bureau en bois massif', 'quantity' => 1, 'price' => 599.99],
                ],
            ],
            [
                'name' => 'INV/2026/0002',
                'invoice_date' => now()->subDays(20),
                'invoice_date_due' => now()->subDays(5),
                'state' => MoveState::POSTED,
                'payment_state' => PaymentState::PARTIAL,
                'amount_untaxed' => 649.98,
                'amount_tax' => 129.996,
                'amount_total' => 779.976,
                'amount_residual' => 389.988,
                'products' => [
                    ['product' => 'Chaise de bureau ergonomique', 'quantity' => 1, 'price' => 299.99],
                    ['product' => 'Écran LED 27 pouces', 'quantity' => 1, 'price' => 349.99],
                ],
            ],
            [
                'name' => 'INV/2026/0003',
                'invoice_date' => now()->subDays(10),
                'invoice_date_due' => now()->addDays(5),
                'state' => MoveState::DRAFT,
                'payment_state' => PaymentState::NOT_PAID,
                'amount_untaxed' => 150.00,
                'amount_tax' => 30.00,
                'amount_total' => 180.00,
                'amount_residual' => 180.00,
                'products' => [
                    ['product' => 'Consultation informatique', 'quantity' => 1, 'price' => 150.00],
                ],
            ],
            [
                'name' => 'INV/2026/0004',
                'invoice_date' => now()->subDays(5),
                'invoice_date_due' => now()->addDays(10),
                'state' => MoveState::POSTED,
                'payment_state' => PaymentState::NOT_PAID,
                'amount_untaxed' => 800.00,
                'amount_tax' => 160.00,
                'amount_total' => 960.00,
                'amount_residual' => 960.00,
                'products' => [
                    ['product' => 'Développement web', 'quantity' => 1, 'price' => 800.00],
                ],
            ],
            [
                'name' => 'INV/2026/0005',
                'invoice_date' => now()->subDays(2),
                'invoice_date_due' => now()->addDays(13),
                'state' => MoveState::POSTED,
                'payment_state' => PaymentState::PAID,
                'amount_untaxed' => 500.00,
                'amount_tax' => 100.00,
                'amount_total' => 600.00,
                'amount_residual' => 0.00,
                'products' => [
                    ['product' => 'Formation logiciel', 'quantity' => 1, 'price' => 500.00],
                ],
            ],
        ];

        $invoiceCount = 0;
        $customerIndex = 0;

        foreach ($invoices as $invoiceData) {
            $customer = $customers[$customerIndex % $customers->count()];
            $customerIndex++;

            // Désactiver les événements pour éviter les problèmes de logging
            $invoice = Invoice::withoutEvents(function () use ($invoiceData, $customer, $user, $company, $currency) {
                return Invoice::create([
                    'move_type' => MoveType::OUT_INVOICE,
                    'name' => $invoiceData['name'],
                    'reference' => $invoiceData['name'],
                    'date' => $invoiceData['invoice_date'],
                    'invoice_date' => $invoiceData['invoice_date'],
                    'invoice_date_due' => $invoiceData['invoice_date_due'],
                    'state' => $invoiceData['state'],
                    'payment_state' => $invoiceData['payment_state'],
                    'partner_id' => $customer->id,
                    'invoice_partner_display_name' => $customer->name,
                    'company_id' => $company->id,
                    'currency_id' => $currency->id,
                    'invoice_currency_rate' => 1.0,
                    'amount_untaxed' => $invoiceData['amount_untaxed'],
                    'amount_tax' => $invoiceData['amount_tax'],
                    'amount_total' => $invoiceData['amount_total'],
                    'amount_residual' => $invoiceData['amount_residual'],
                    'amount_untaxed_signed' => $invoiceData['amount_untaxed'],
                    'amount_tax_signed' => $invoiceData['amount_tax'],
                    'amount_total_signed' => $invoiceData['amount_total'],
                    'amount_residual_signed' => $invoiceData['amount_residual'],
                    'creator_id' => $user->id,
                ]);
            });

            // Créer les lignes de facture pour chaque produit
            foreach ($invoiceData['products'] as $productData) {
                $product = $products->firstWhere('name', $productData['product']);
                if (!$product) {
                    continue;
                }

                $quantity = $productData['quantity'];
                $priceUnit = $productData['price'];
                $priceSubtotal = $priceUnit * $quantity;
                $taxAmount = $priceSubtotal * 0.20; // TVA 20%
                $priceTotal = $priceSubtotal + $taxAmount;

                MoveLine::create([
                    'move_id' => $invoice->id,
                    'company_id' => $company->id,
                    'currency_id' => $currency->id,
                    'partner_id' => $customer->id,
                    'product_id' => $product->id,
                    'move_name' => $invoice->name,
                    'parent_state' => $invoice->state,
                    'reference' => $invoice->reference,
                    'name' => $product->name,
                    'date' => $invoice->invoice_date,
                    'date_maturity' => $invoice->invoice_date_due,
                    'quantity' => $quantity,
                    'price_unit' => $priceUnit,
                    'price_subtotal' => $priceSubtotal,
                    'price_total' => $priceTotal,
                    'debit' => $priceTotal,
                    'credit' => 0.00,
                    'balance' => $priceTotal,
                    'amount_currency' => $priceTotal,
                    'amount_residual' => $invoice->payment_state === PaymentState::PAID ? 0.00 : $priceTotal,
                    'amount_residual_currency' => $invoice->payment_state === PaymentState::PAID ? 0.00 : $priceTotal,
                ]);
            }

            $invoiceCount++;
        }

        $this->command->info("Created {$invoiceCount} sample invoices.");
    }
}
