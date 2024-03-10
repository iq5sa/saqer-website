<?php

namespace App\Filament\Resources\AboutResource\Pages;

use App\Filament\Resources\About2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAbouts2 extends ManageRecords
{
    protected static string $resource = About2Resource::class;


    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),

        ];


    }


}
