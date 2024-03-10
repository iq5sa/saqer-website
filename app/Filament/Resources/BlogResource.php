<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Models\Blog;
use App\Models\Category;
use Closure;
use Filament\Actions\SelectAction;
use Filament\Clusters\Cluster;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    protected static ?string $navigationLabel = "الاخبار والنشاطات";
    protected static ?string $pluralLabel = "الاخبار والنشاطات";
    protected static ?string $label = "خبر";
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->live()
                    ->maxLength(255)
                    ->afterStateUpdated(function (Set $set, $state){
                        $set('slug', Str::slug($state));

                    })
                    ->label('عنوان الخبر')
                    ->required()
                    ->reactive(),

                Select::make('category_id')->options(Category::all()->pluck('title','id'))
                    ->searchable()
                    ->label('التصنيف')
                    ->required(),

                Forms\Components\FileUpload::make('image')
                    ->imageEditor()
                    ->label('الصورة')
                    ->required(),
                Forms\Components\DatePicker::make('created_at')->native(false)->label('تاريخ الخبر')->default(now()),

                TextInput::make('slug')->required()->label('رابط افتراضي'),

                Forms\Components\RichEditor::make('content')->columnSpan(2)
                    ->label('التفاصيل')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //

                Tables\Columns\TextColumn::make('title')->limit(20)->label("عنوان الخبر"),
                Tables\Columns\ImageColumn::make('image')->label("صورة الخبر"),
                Tables\Columns\TextColumn::make('content')->html()->limit(20)->label("التفاصيل"),
                Tables\Columns\TextColumn::make('category.title')->exists("category")->label("التصنيف"),
                Tables\Columns\TextColumn::make('created_at')->label("تاريخ الخبر")->date("Y-m-d")
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }


}
