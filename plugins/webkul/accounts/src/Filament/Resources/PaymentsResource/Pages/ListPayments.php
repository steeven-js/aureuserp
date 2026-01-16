<?php

namespace Webkul\Account\Filament\Resources\PaymentsResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Webkul\Account\Enums\PaymentStatus;
use Webkul\Account\Filament\Resources\PaymentsResource;
use Webkul\TableViews\Filament\Components\PresetView;
use Webkul\TableViews\Filament\Concerns\HasTableViews;

class ListPayments extends ListRecords
{
    use HasTableViews;

    protected static string $resource = PaymentsResource::class;

    public function getPresetTableViews(): array
    {
        return [
            'customer_payments' => PresetView::make(__('accounts::filament/resources/payment.presets.customer_payments'))
                ->favorite()
                ->icon('heroicon-s-banknotes')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('partner_type', 'customer')),
            'vendor_payments' => PresetView::make(__('accounts::filament/resources/payment.presets.vendor_payments'))
                ->favorite()
                ->icon('heroicon-s-banknotes')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('partner_type', 'supplier')),
            'draft' => PresetView::make(__('accounts::filament/resources/payment.presets.draft'))
                ->favorite()
                ->setAsDefault()
                ->icon('heroicon-s-stop')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('state', PaymentStatus::DRAFT->value)),
            'in_process' => PresetView::make(__('accounts::filament/resources/payment.presets.in_process'))
                ->favorite()
                ->icon('heroicon-s-play')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('state', PaymentStatus::IN_PROCESS->value)),
            'is_sent' => PresetView::make(__('accounts::filament/resources/payment.presets.sent'))
                ->icon('heroicon-s-play')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('is_sent', true)),
            'not_sent' => PresetView::make(__('accounts::filament/resources/payment.presets.not_sent'))
                ->icon('heroicon-s-play')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('is_sent', false)),
            'no_bank_matching' => PresetView::make(__('accounts::filament/resources/payment.presets.no_bank_matching'))
                ->icon('heroicon-s-play')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('is_matched', false)),
            'is_reconciled' => PresetView::make(__('accounts::filament/resources/payment.presets.reconciled'))
                ->icon('heroicon-s-play')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('is_reconciled', true)),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->icon('heroicon-o-plus-circle'),
        ];
    }
}
