<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = "مدراء النظام";
    protected static ?string $label = "مدير";
    protected static ?string $pluralLabel = "مدراء النظام";

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {




        return $form
            ->schema(
                [
                    Forms\Components\Grid::make(3)->schema([
                        TextInput::make('name')->string()->required()->label("الاسم"),
                        TextInput::make('email')->email()->required()->label("البريد الالكتروني"),

                        TextInput::make('password')->password()->autocomplete(false)
                            ->revealable()

                            ->required()->label("كلمة المرور"),
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('id')->label("#"),
                TextColumn::make('name')->label("الاسم"),
                TextColumn::make('email')->label("البريد الالكتروني"),
                TextColumn::make('password')->hidden()->label("كلمة المرور"),
                TextColumn::make('created_at')->label("تاريخ الاضافة")->date("Y-m-d")
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
