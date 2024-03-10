<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeSliderResource\Pages;
use App\Filament\Resources\HomeSliderResource\RelationManagers;
use App\Models\HomeSlider;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomeSliderResource extends Resource
{
    protected static ?string $model = HomeSlider::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = "الشريط المتحرك";
    protected static ?string $pluralLabel = "الشريط المتحرك";
    protected static ?string $label = "الشريط المتحرك";
    protected static ?int $navigationSort = 1;



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //

                Forms\Components\TextInput::make("title")->required()->maxLength(255)->label("العنوان"),
                Forms\Components\TextInput::make("subtitle")->required()->maxLength(255)->label("العنوان الفرعي"),
                Forms\Components\FileUpload::make("attachment")->imageEditor()
                    ->imageCropAspectRatio("4:5")
                    ->imageEditorAspectRatios([
                        null,
                        "4:5",

                    ])
                    ->multiple()->required()->label("الصور"),
                Forms\Components\TextInput::make("description")->required()->label("التفاصيل"),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make("title")->limit(20)->label("العنوان"),
                Tables\Columns\TextColumn::make("subtitle")->limit(20)->label("العنوان الفرعي"),
                Tables\Columns\ImageColumn::make("attachment")->label("الصور"),
                Tables\Columns\TextColumn::make("description")->limit(20)->label("التفاصيل"),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([

            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomeSliders::route('/'),
            'create' => Pages\CreateHomeSlider::route('/create'),
            'edit' => Pages\EditHomeSlider::route('/{record}/edit'),
        ];
    }
}
