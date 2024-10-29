<?php

namespace App\Filament\Resources\EmprendedorResource\Pages;

use App\Filament\Resources\EmprendedorResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEmprendedor extends CreateRecord
{
    protected static string $resource = EmprendedorResource::class;

    protected function getRedirectUrl(): string
    {
        return $this-> getResource()::getUrl('index');
    }
}
