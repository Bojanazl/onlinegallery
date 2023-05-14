<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Category;
use App\Models\Post;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Closure;
use Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    Grid::make(2)
                    ->schema([
                        Forms\Components\TextInput::make('title')
                        ->autofocus()
                    ->required()
                    ->maxLength(2048)
                    ->reactive()
                    ->afterStateUpdated(function(Closure $set, $state) {
                        $set('slug', Str::slug($state));
                    }),
                
                    Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(2048),
                ]),

               

                
                Forms\Components\FileUpload::make('thumbnail'),
                Forms\Components\RichEditor::make('body')
                    ->required(),
                Forms\Components\Toggle::make('active')
                    ->required(),
                Forms\Components\DateTimePicker::make('Published_at'),
                Forms\Components\Select::make('category')
                    ->required()
                    ->label('Category')
                    ->relationship('category', 'title')
                    ->options(Category::all()->pluck('title','id'))
                    ->preload()
                ])   
            ]);

            
    }

   

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('thumbnail'),
                Tables\Columns\TextColumn::make('body'),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('created_at')
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
