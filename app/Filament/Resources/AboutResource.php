<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;
    protected static ?string $navigationIcon = 'heroicon-o-pencil';
    protected static ?string $navigationLabel = "عن الشركة";
    protected static ?string $label = "عن الشركة";
    protected static ?string $pluralLabel = "عن الشركة";
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->label("العنوان"),
                Forms\Components\TextInput::make('facebook_url')->url()->label("رابط الفيس بوك"),
                Forms\Components\TextInput::make('instagram_url')->url()->label("رابط الانستغرام بوك"),
                Forms\Components\TextInput::make('twitter_url')->url()->label("رابط رابط تويتر"),
                Forms\Components\TextInput::make('tiktok_url')->url()->label("رابط تيك توك"),
                Forms\Components\TextInput::make('contact_email')->required()->email()->label("البريد الرسمي"),
                Forms\Components\TextInput::make('phone_number')->required()->numeric()->label("رقم الهاتف"),
                Forms\Components\Textarea::make('company_summary')->required()->label("عن الشركة"),
                Forms\Components\RichEditor::make('ceo_summary')->required()->label("كلمة المدير"),
                Forms\Components\RichEditor::make('extra_text')->string()->label("نص اضافي"),
                Forms\Components\FileUpload::make('ceo_picture')->imageEditor()->required()->image()->label("صورة المدير التنفيذي"),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label("العنوان"),
                TextColumn::make('ceo_summary')->limit(20)->label("كلمة المدير"),
                TextColumn::make('company_summary')->limit(20)->label("عن الشركة"),

                Tables\Columns\ImageColumn::make('ceo_picture')->limit(20)->label("صورة المدير التنفيذي")
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
