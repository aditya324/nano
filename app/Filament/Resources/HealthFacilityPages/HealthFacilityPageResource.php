<?php

namespace App\Filament\Resources\HealthFacilityPages;

use App\Filament\Resources\HealthFacilityPages\Pages\CreateHealthFacilityPage;
use App\Filament\Resources\HealthFacilityPages\Pages\EditHealthFacilityPage;
use App\Filament\Resources\HealthFacilityPages\Pages\ListHealthFacilityPages;
use App\Filament\Resources\HealthFacilityPages\Schemas\HealthFacilityPageForm;
use App\Filament\Resources\HealthFacilityPages\Tables\HealthFacilityPagesTable;
use App\Models\HealthFacilityPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HealthFacilityPageResource extends Resource
{
    protected static ?string $model = HealthFacilityPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'hero_title';

    public static function form(Schema $schema): Schema
    {
        return HealthFacilityPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('hero_background')
                    ->label('Image')
                    ->disk('public')
                    ->square()
                    ->imageSize(50),
                    

                // 📄 Title + Slug
                TextColumn::make('hero_title')
                    ->label('Page')
                    ->searchable()
                    ->sortable()
                    ->description(fn($record) => $record->slug)
                    ->wrap(),

                TextColumn::make('h1')
                    ->label('H1')
                    ->searchable()
                    ->sortable(),

                // 🟢 Active Status
                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),

                // 📅 Created Date
                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d M Y')
                    ->sortable()
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => ListHealthFacilityPages::route('/'),
            'create' => CreateHealthFacilityPage::route('/create'),
            'edit' => EditHealthFacilityPage::route('/{record}/edit'),
        ];
    }
}
