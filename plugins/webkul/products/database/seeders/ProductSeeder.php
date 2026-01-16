<?php

namespace Webkul\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Webkul\Product\Database\Factories\ProductFactory;
use Webkul\Product\Enums\ProductType;
use Webkul\Product\Models\Category;
use Webkul\Product\Models\Product;
use Webkul\Security\Models\User;
use Webkul\Support\Models\Company;
use Webkul\Support\Models\UOM;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        $company = Company::first();
        $category = Category::where('name', 'Saleable')->first() ?? Category::first();
        $uom = UOM::first();

        if (!$user || !$company || !$category || !$uom) {
            $this->command->warn('User, Company, Category or UOM not found. Please run the main seeders first.');
            return;
        }

        // Créer quelques produits de démonstration
        $products = [
            [
                'type'                 => ProductType::GOODS,
                'name'                 => 'Chaise de bureau ergonomique',
                'barcode'              => '1234567890123',
                'price'                => 299.99,
                'cost'                 => 150.00,
                'volume'               => 0.5,
                'weight'               => 12.5,
                'description'          => 'Chaise de bureau ergonomique avec support lombaire ajustable',
                'description_purchase' => 'Chaise de bureau ergonomique',
                'description_sale'     => 'Chaise de bureau ergonomique avec support lombaire',
                'enable_sales'         => true,
                'sort'                 => 1,
                'category_id'          => $category->id,
                'creator_id'           => $user->id,
                'company_id'           => $company->id,
                'uom_id'               => $uom->id,
                'uom_po_id'            => $uom->id,
            ],
            [
                'type'                 => ProductType::GOODS,
                'name'                 => 'Bureau en bois massif',
                'barcode'              => '2345678901234',
                'price'                => 599.99,
                'cost'                 => 300.00,
                'volume'               => 1.2,
                'weight'               => 35.0,
                'description'          => 'Bureau en bois massif avec tiroirs intégrés',
                'description_purchase' => 'Bureau en bois massif',
                'description_sale'     => 'Bureau en bois massif avec tiroirs',
                'enable_sales'         => true,
                'sort'                 => 2,
                'category_id'          => $category->id,
                'creator_id'           => $user->id,
                'company_id'           => $company->id,
                'uom_id'               => $uom->id,
                'uom_po_id'            => $uom->id,
            ],
            [
                'type'                 => ProductType::GOODS,
                'name'                 => 'Écran LED 27 pouces',
                'barcode'              => '3456789012345',
                'price'                => 349.99,
                'cost'                 => 200.00,
                'volume'               => 0.8,
                'weight'               => 5.2,
                'description'          => 'Écran LED 27 pouces Full HD avec port HDMI',
                'description_purchase' => 'Écran LED 27 pouces',
                'description_sale'     => 'Écran LED 27 pouces Full HD',
                'enable_sales'         => true,
                'sort'                 => 3,
                'category_id'          => $category->id,
                'creator_id'           => $user->id,
                'company_id'           => $company->id,
                'uom_id'               => $uom->id,
                'uom_po_id'            => $uom->id,
            ],
            [
                'type'                 => ProductType::SERVICE,
                'name'                 => 'Consultation informatique',
                'barcode'              => null,
                'price'                => 150.00,
                'cost'                 => 75.00,
                'volume'               => 0,
                'weight'               => 0,
                'description'          => 'Service de consultation informatique par heure',
                'description_purchase' => 'Consultation informatique',
                'description_sale'     => 'Service de consultation informatique',
                'enable_sales'         => true,
                'sort'                 => 4,
                'category_id'          => Category::where('name', 'Services')->first()?->id ?? $category->id,
                'creator_id'           => $user->id,
                'company_id'           => $company->id,
                'uom_id'               => $uom->id,
                'uom_po_id'            => $uom->id,
            ],
            [
                'type'                 => ProductType::SERVICE,
                'name'                 => 'Formation logiciel',
                'barcode'              => null,
                'price'                => 500.00,
                'cost'                 => 250.00,
                'volume'               => 0,
                'weight'               => 0,
                'description'          => 'Formation sur l\'utilisation de logiciels professionnels',
                'description_purchase' => 'Formation logiciel',
                'description_sale'     => 'Service de formation logiciel',
                'enable_sales'         => true,
                'sort'                 => 5,
                'category_id'          => Category::where('name', 'Services')->first()?->id ?? $category->id,
                'creator_id'           => $user->id,
                'company_id'           => $company->id,
                'uom_id'               => $uom->id,
                'uom_po_id'            => $uom->id,
            ],
            [
                'type'                 => ProductType::SERVICE,
                'name'                 => 'Maintenance informatique',
                'barcode'              => null,
                'price'                => 120.00,
                'cost'                 => 60.00,
                'volume'               => 0,
                'weight'               => 0,
                'description'          => 'Service de maintenance préventive et corrective des équipements informatiques',
                'description_purchase' => 'Maintenance informatique',
                'description_sale'     => 'Service de maintenance informatique',
                'enable_sales'         => true,
                'sort'                 => 6,
                'category_id'          => Category::where('name', 'Services')->first()?->id ?? $category->id,
                'creator_id'           => $user->id,
                'company_id'           => $company->id,
                'uom_id'               => $uom->id,
                'uom_po_id'            => $uom->id,
            ],
            [
                'type'                 => ProductType::SERVICE,
                'name'                 => 'Développement web',
                'barcode'              => null,
                'price'                => 800.00,
                'cost'                 => 400.00,
                'volume'               => 0,
                'weight'               => 0,
                'description'          => 'Service de développement d\'applications web sur mesure',
                'description_purchase' => 'Développement web',
                'description_sale'     => 'Service de développement web',
                'enable_sales'         => true,
                'sort'                 => 7,
                'category_id'          => Category::where('name', 'Services')->first()?->id ?? $category->id,
                'creator_id'           => $user->id,
                'company_id'           => $company->id,
                'uom_id'               => $uom->id,
                'uom_po_id'            => $uom->id,
            ],
            [
                'type'                 => ProductType::SERVICE,
                'name'                 => 'Conseil en stratégie',
                'barcode'              => null,
                'price'                => 200.00,
                'cost'                 => 100.00,
                'volume'               => 0,
                'weight'               => 0,
                'description'          => 'Service de conseil en stratégie d\'entreprise et optimisation des processus',
                'description_purchase' => 'Conseil en stratégie',
                'description_sale'     => 'Service de conseil en stratégie',
                'enable_sales'         => true,
                'sort'                 => 8,
                'category_id'          => Category::where('name', 'Services')->first()?->id ?? $category->id,
                'creator_id'           => $user->id,
                'company_id'           => $company->id,
                'uom_id'               => $uom->id,
                'uom_po_id'            => $uom->id,
            ],
            [
                'type'                 => ProductType::SERVICE,
                'name'                 => 'Support technique',
                'barcode'              => null,
                'price'                => 80.00,
                'cost'                 => 40.00,
                'volume'               => 0,
                'weight'               => 0,
                'description'          => 'Service de support technique à distance ou sur site',
                'description_purchase' => 'Support technique',
                'description_sale'     => 'Service de support technique',
                'enable_sales'         => true,
                'sort'                 => 9,
                'category_id'          => Category::where('name', 'Services')->first()?->id ?? $category->id,
                'creator_id'           => $user->id,
                'company_id'           => $company->id,
                'uom_id'               => $uom->id,
                'uom_po_id'            => $uom->id,
            ],
            [
                'type'                 => ProductType::SERVICE,
                'name'                 => 'Audit de sécurité',
                'barcode'              => null,
                'price'                => 1500.00,
                'cost'                 => 750.00,
                'volume'               => 0,
                'weight'               => 0,
                'description'          => 'Service d\'audit complet de la sécurité informatique',
                'description_purchase' => 'Audit de sécurité',
                'description_sale'     => 'Service d\'audit de sécurité',
                'enable_sales'         => true,
                'sort'                 => 10,
                'category_id'          => Category::where('name', 'Services')->first()?->id ?? $category->id,
                'creator_id'           => $user->id,
                'company_id'           => $company->id,
                'uom_id'               => $uom->id,
                'uom_po_id'            => $uom->id,
            ],
        ];

        foreach ($products as $productData) {
            // Désactiver le logging d'activité lors de la création via seeder
            Product::withoutEvents(function () use ($productData, $company) {
                Product::updateOrCreate(
                    ['name' => $productData['name'], 'company_id' => $company->id],
                    $productData
                );
            });
        }

        $this->command->info('Created ' . count($products) . ' sample products.');
    }
}
