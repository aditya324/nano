<?php

namespace App\Filament\Resources\Conditions\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\TextInput;

class ConditionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('icon')
                    ->label('Icon')
                    ->disk('public')
                    ->circular(),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->limit(30),

                TextColumn::make('slug')
                    ->searchable()
                    ->sortable(),

              

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),

                TextColumn::make('updated_at')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->label('Last Updated'),
            ])
            ->filters([

                TernaryFilter::make('is_active')
                    ->label('Status')
                    ->trueLabel('Active')
                    ->falseLabel('Inactive')
                    ->native(false),

                // Has Icon
                Filter::make('has_icon')
                    ->label('Has Icon')
                    ->query(fn($query) => $query->whereNotNull('icon')),

                // Sort Order Range
                Filter::make('sort_range')
                    ->schema([
                        TextInput::make('min')->numeric()->label('Min Order'),
                        TextInput::make('max')->numeric()->label('Max Order'),
                    ])
                    ->query(function ($query, array $data) {
                        return $query
                            ->when($data['min'], fn($q) => $q->where('sort_order', '>=', $data['min']))
                            ->when($data['max'], fn($q) => $q->where('sort_order', '<=', $data['max']));
                    }),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
