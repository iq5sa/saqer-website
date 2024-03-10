<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VideoPromotionResource\Pages;
use App\Models\VideoPromotion;
use Filament\Forms;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Infolists\Components\ImageEntry;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class VideoPromotionResource extends Resource
{
    protected static ?string $model = VideoPromotion::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 10;
    protected static ?string $label = 'الفيديو الدعائي';
    protected static ?string $pluralLabel = 'الفيديوهات الدعائية';


//->afterStateUpdated(fn (Set $set, ?string $state) => $set ('image', 'https://www.youtube.com/watch?v=KEGIwXBxjNE')),
//

    public static function form(Form $form): Form
    {
         return $form->schema([
             Forms\Components\TextInput::make('title')->required()->label('عنوان الفيديو'),
             Forms\Components\TextInput::make('url')->required()->label('رابط الفيديو')
                 ->live(debounce: 100)
         ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('عنوان الفيديو')->limit(20),
                Tables\Columns\TextColumn::make('url')->label('رابط الفيديو')->limit(20),

            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListVideoPromotions::route('/'),
            'create' => Pages\CreateVideoPromotion::route('/create'),
            'edit' => Pages\EditVideoPromotion::route('/{record}/edit'),
        ];
    }
}
