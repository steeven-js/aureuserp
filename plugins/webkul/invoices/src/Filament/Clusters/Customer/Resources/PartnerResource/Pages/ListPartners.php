<?php

namespace Webkul\Invoice\Filament\Clusters\Customer\Resources\PartnerResource\Pages;

use Filament\Actions\CreateAction;
use Illuminate\Contracts\Support\Htmlable;
use Webkul\Invoice\Filament\Clusters\Customer\Resources\PartnerResource;
use Webkul\Invoice\Filament\Clusters\Vendors\Resources\VendorResource\Pages\ListVendors as BaseListPartners;

class ListPartners extends BaseListPartners
{
    protected static string $resource = PartnerResource::class;

    public function getTitle(): string|Htmlable
    {
        return __('invoices::filament/clusters/customers/resources/partners.pages.customer');
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label(__('invoices::filament/clusters/customers/resources/partners.pages.new_customer'))
                ->icon('heroicon-o-plus-circle'),
        ];
    }
}
