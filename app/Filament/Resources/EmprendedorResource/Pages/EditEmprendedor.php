<?php

namespace App\Filament\Resources\EmprendedorResource\Pages;

use App\Filament\Resources\EmprendedorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmprendedor extends EditRecord
{
    protected static string $resource = EmprendedorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this-> getResource()::getUrl('index');
    }
}
