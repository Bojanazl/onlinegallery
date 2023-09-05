<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Category;
use App\Models\Post;
use Closure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Filters\Concerns\HasFormSchema;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use PhpParser\Node\Stmt\Label;
use Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationGroup = 'Content'; //places the page under Content panel
    protected static ?string $navigationIcon = 'heroicon-o-book-open'; //page icon

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Grid::make(2)
                        ->schema([
                            Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(2048)
                            ->reactive()

                            ->afterStateUpdated(function (Closure $set, $state) {
                                $set('slug', Str::slug($state));
                            }),

                            Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(2048),
                            ])->columns(5)
                        ])->columnSpan(12),

                        Forms\Components\Card::make()
                        ->schema([
                            Forms\Components\RichEditor::make('body')
                            ->required(),
                            Forms\Components\Toggle::make('active')
                            ->required(),
                            Forms\Components\DatePicker::make('published_at')
                            ->required()
                        ])->columnSpan(12),

                        Forms\Components\Card::make()
                            ->schema([
                                Forms\Components\FileUpload::make('thumbnail')
                                ->required(),
                                Forms\Components\Select::make('category')
                                ->required()
                                ->relationship('category', 'title')
                                ->label('Category')
                                ->options(Category::all()->pluck('title','id'))
                                //->required(),
                                ])->columnSpan(12)
                                ->columns(5)
                            ]);
    }



    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('published_at')
                    ->sortable()
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }    
}
