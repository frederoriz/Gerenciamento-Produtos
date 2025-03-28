<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
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

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    /**
     * Método adicionado para evitar query no banco de dados
     *
     * @return Builder
     */
    public static function getEloquentQuery(): Builder
    {
        return static::getModel()::query()->whereNull('id'); // Evita carregar dados do banco
    }

    /**
     * Gerando o formulário de cadastro de produtos
     *
     * @param Form $form
     * @return Form
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Nome')->required(),
                TextInput::make('description')->label('Descrição')->nullable(),
                TextInput::make('price')->label('Preço')->numeric()->required(),
                Select::make('category')
                    ->options([
                        '1' => 'Eletrônicos',
                        '2' => 'Móveis',
                    ])
                    ->label('Categoria'),
            ]);
    }

    /**
     * Gerando a tabela de produtos
     *
     * @param Table $table
     * @return Table
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Nome'),
                TextColumn::make('description')->label('Descrição'),
                TextColumn::make('price')->label('Preço'),
                TextColumn::make('category')->label('Categoria'),
            ])
            ->paginated(false)
            ->defaultSort('name')
            //usando collect para mockar os dados
            ->query(fn() => collect([
                ['name' => 'Produto 1', 'description' => 'Apenas uma descrição1', 'price' => 'R$ 100', 'category' => 'Eletrônicos'],
                ['name' => 'Produto 2', 'description' => 'Apenas uma descrição2', 'price' => 'R$ 200', 'category' => 'Móveis'],
            ]));
    }

    /**
     * Gerando as páginas de produtos
     *
     * @return array
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
