<?php

namespace App\Filament\Company\Resources\Sales\InvoiceResource\Pages;

use App\Filament\Company\Resources\Sales\InvoiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInvoice extends EditRecord
{
    protected static string $resource = InvoiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
