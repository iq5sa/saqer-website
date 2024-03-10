<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Filament\Resources\PortfolioResource\RelationManagers;
use App\Models\Category;
use App\Models\Portfolio;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $label = "معرض الاعمال";
    protected static ?string $pluralLabel = "معرض الاعمال";
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make("title")->label("العنوان")->maxLength(255)->required(),
                Forms\Components\TextInput::make("description")->label("التفاصيل")->maxLength(255)->required(),

                Select::make('category_id')->relationship(name: 'category',titleAttribute: 'title')
                    ->label('التصنيف')
                    ->required(),
                Forms\Components\TextInput::make("client")->required()->label("اسم العميل"),
                Forms\Components\TextInput::make("url")->label("رابط الفيديو"),
                Forms\Components\FileUpload::make("image")->imageEditor()->label("الصورة")->required(),


            ]);


    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //

                Tables\Columns\TextColumn::make('title')->limit(20)->label("العنوان"),
                Tables\Columns\ImageColumn::make('image')->label('الصورة'),
                Tables\Columns\TextColumn::make('client')->limit(20)->label('اسم العميل'),
                Tables\Columns\TextColumn::make('category.title')->limit(20)->exists('category')->label('التصنيف'),
                Tables\Columns\TextColumn::make('description')->limit(20)->label("التفاصيل"),
                Tables\Columns\TextColumn::make('url')->limit(20)->label("رابط الفيديو"),

            ])
            ->filters([
                //
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
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
