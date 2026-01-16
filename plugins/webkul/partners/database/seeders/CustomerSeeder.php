<?php

namespace Webkul\Partner\Database\Seeders;

use Illuminate\Database\Seeder;
use Webkul\Partner\Enums\AccountType;
use Webkul\Partner\Models\Industry;
use Webkul\Partner\Models\Partner;
use Webkul\Partner\Models\Title;
use Webkul\Security\Models\User;
use Webkul\Support\Models\Company;
use Webkul\Support\Models\Country;
use Webkul\Support\Models\State;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        $company = Company::first();
        $title = Title::first();
        $industry = Industry::first();
        $country = Country::where('name', 'France')->first() ?? Country::first();
        $state = State::first();

        if (!$user || !$company) {
            $this->command->warn('User or Company not found. Please run the main seeders first.');
            return;
        }

        // Créer quelques clients de démonstration
        $customers = [
            [
                'account_type'     => AccountType::INDIVIDUAL,
                'sub_type'        => 'customer',
                'name'            => 'Jean Dupont',
                'email'           => 'jean.dupont@example.com',
                'job_title'       => 'Directeur Commercial',
                'phone'           => '+33 1 23 45 67 89',
                'mobile'          => '+33 6 12 34 56 78',
                'website'         => 'https://www.example.com',
                'tax_id'          => 'FR12345678901',
                'color'           => '#3B82F6',
                'reference'       => 'CUST001',
                'street1'         => '123 Rue de la République',
                'city'            => 'Paris',
                'zip'             => '75001',
                'creator_id'      => $user->id,
                'company_id'      => $company->id,
                'title_id'        => $title?->id,
                'industry_id'     => $industry?->id,
                'country_id'      => $country?->id,
                'state_id'        => $state?->id,
            ],
            [
                'account_type'     => AccountType::COMPANY,
                'sub_type'        => 'customer',
                'name'            => 'TechSolutions SARL',
                'email'           => 'contact@techsolutions.fr',
                'phone'           => '+33 1 98 76 54 32',
                'mobile'          => '+33 6 98 76 54 32',
                'website'         => 'https://www.techsolutions.fr',
                'tax_id'          => 'FR98765432109',
                'company_registry' => 'RCS Paris 987 654 321',
                'color'           => '#10B981',
                'reference'       => 'CUST002',
                'street1'         => '456 Avenue des Champs-Élysées',
                'city'            => 'Paris',
                'zip'             => '75008',
                'creator_id'      => $user->id,
                'company_id'      => $company->id,
                'title_id'        => $title?->id,
                'industry_id'     => $industry?->id,
                'country_id'      => $country?->id,
                'state_id'        => $state?->id,
            ],
            [
                'account_type'     => AccountType::INDIVIDUAL,
                'sub_type'        => 'customer',
                'name'            => 'Marie Martin',
                'email'           => 'marie.martin@example.com',
                'job_title'       => 'Responsable Marketing',
                'phone'           => '+33 1 55 44 33 22',
                'mobile'          => '+33 6 55 44 33 22',
                'website'         => null,
                'tax_id'          => 'FR11223344556',
                'color'           => '#8B5CF6',
                'reference'       => 'CUST003',
                'street1'         => '789 Boulevard Saint-Germain',
                'city'            => 'Lyon',
                'zip'             => '69001',
                'creator_id'      => $user->id,
                'company_id'      => $company->id,
                'title_id'        => $title?->id,
                'industry_id'     => $industry?->id,
                'country_id'      => $country?->id,
                'state_id'        => $state?->id,
            ],
            [
                'account_type'     => AccountType::COMPANY,
                'sub_type'        => 'customer',
                'name'            => 'Innovation Digital SA',
                'email'           => 'info@innovation-digital.fr',
                'phone'           => '+33 4 11 22 33 44',
                'mobile'          => '+33 6 11 22 33 44',
                'website'         => 'https://www.innovation-digital.fr',
                'tax_id'          => 'FR55667788990',
                'company_registry' => 'RCS Lyon 556 677 889',
                'color'           => '#F59E0B',
                'reference'       => 'CUST004',
                'street1'         => '321 Rue de la Soie',
                'city'            => 'Lyon',
                'zip'             => '69003',
                'creator_id'      => $user->id,
                'company_id'      => $company->id,
                'title_id'        => $title?->id,
                'industry_id'     => $industry?->id,
                'country_id'      => $country?->id,
                'state_id'        => $state?->id,
            ],
            [
                'account_type'     => AccountType::INDIVIDUAL,
                'sub_type'        => 'customer',
                'name'            => 'Pierre Bernard',
                'email'           => 'pierre.bernard@example.com',
                'job_title'       => 'Entrepreneur',
                'phone'           => '+33 2 99 88 77 66',
                'mobile'          => '+33 6 99 88 77 66',
                'website'         => null,
                'tax_id'          => 'FR99887766554',
                'color'           => '#EF4444',
                'reference'       => 'CUST005',
                'street1'         => '654 Rue de Nantes',
                'city'            => 'Nantes',
                'zip'             => '44000',
                'creator_id'      => $user->id,
                'company_id'      => $company->id,
                'title_id'        => $title?->id,
                'industry_id'     => $industry?->id,
                'country_id'      => $country?->id,
                'state_id'        => $state?->id,
            ],
            [
                'account_type'     => AccountType::COMPANY,
                'sub_type'        => 'customer',
                'name'            => 'Global Services SAS',
                'email'           => 'contact@global-services.fr',
                'phone'           => '+33 5 44 33 22 11',
                'mobile'          => '+33 6 44 33 22 11',
                'website'         => 'https://www.global-services.fr',
                'tax_id'          => 'FR33445566778',
                'company_registry' => 'RCS Bordeaux 334 455 667',
                'color'           => '#06B6D4',
                'reference'       => 'CUST006',
                'street1'         => '987 Place de la Victoire',
                'city'            => 'Bordeaux',
                'zip'             => '33000',
                'creator_id'      => $user->id,
                'company_id'      => $company->id,
                'title_id'        => $title?->id,
                'industry_id'     => $industry?->id,
                'country_id'      => $country?->id,
                'state_id'        => $state?->id,
            ],
        ];

        foreach ($customers as $customerData) {
            // Désactiver le logging d'activité lors de la création via seeder
            Partner::withoutEvents(function () use ($customerData) {
                Partner::updateOrCreate(
                    ['email' => $customerData['email'], 'company_id' => $customerData['company_id']],
                    $customerData
                );
            });
        }

        $this->command->info('Created ' . count($customers) . ' sample customers.');
    }
}
