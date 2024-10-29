<?php

namespace App\Filament\Resources\EmprendedorResource\Pages;

use App\Filament\Resources\EmprendedorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmprendedors extends ListRecords
{
    protected static string $resource = EmprendedorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
