<?php

namespace App\Filament\Resources\VideoPromotionResource\Pages;

use App\Filament\Resources\VideoPromotionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVideoPromotion extends EditRecord
{
    protected static string $resource = VideoPromotionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
