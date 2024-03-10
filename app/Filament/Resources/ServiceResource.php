<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = "الخدمات";
    protected static ?string $label = "خدمة";
    protected static ?string $pluralLabel = "خدمات الشركة";
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make("name")->required()->label("الاسم او االعنوان"),
                Forms\Components\TextInput::make("description")->required()->label("الوصف"),
                Forms\Components\FileUpload::make("image")->imageEditor()->required()->label("الصورة"),
                Forms\Components\FileUpload::make("poster_image")->imageEditor()->required()->label("بوستر"),
                Forms\Components\Checkbox::make("is_featured")->default(true)->label("اضف الى الواجهة الرئيسية"),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('الاسم'),
                Tables\Columns\TextColumn::make('description')->label('الوصف'),
                Tables\Columns\ImageColumn::make('image')->label('الصورة'),
                Tables\Columns\ImageColumn::make('poster_image')->label('بوستر'),
                Tables\Columns\TextColumn::make('created_at')->date("Y-m-d")->label('تاريخ الاضافة'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
