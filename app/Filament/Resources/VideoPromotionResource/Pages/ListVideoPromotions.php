<?php

namespace App\Filament\Resources\VideoPromotionResource\Pages;

use App\Filament\Resources\VideoPromotionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVideoPromotions extends ListRecords
{
    protected static string $resource = VideoPromotionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
