<?php

namespace App\Filament\Resources\HealthPackages;

use App\Filament\Resources\HealthPackages\Pages\CreateHealthPackage;
use App\Filament\Resources\HealthPackages\Pages\EditHealthPackage;
use App\Filament\Resources\HealthPackages\Pages\ListHealthPackages;
use App\Filament\Resources\HealthPackages\Schemas\HealthPackageForm;
use App\Filament\Resources\HealthPackages\Tables\HealthPackagesTable;
use App\Models\HealthPackage;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class HealthPackageResource extends Resource
{
    protected static ?string $model = HealthPackage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([

                Section::make('Basic Details')
                    ->schema([
                        TextInput::make('name')
                            ->label('Package Title')
                            ->required()
                            ->live() // MUST be live (not just onBlur)
                            ->afterStateUpdated(function ($state, callable $set) {
                                $set('slug', Str::slug($state));
                            }),

                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->readOnly()     // use readOnly instead of disabled
                            ->dehydrated(),
                        Select::make('gender')
                            ->options([
                                'Male' => 'Male',
                                'Female' => 'Female',
                                'Both' => 'Male & Female',
                            ])
                            ->placeholder('Select Gender')
                            ->native(false)   // nice styled dropdown
                            ->searchable(),
                        TextInput::make('original_price')->numeric(),
                        TextInput::make('discount_price')->numeric(),
                        FileUpload::make('image')
                            ->label('Health Package Image')
                            ->image()
                            ->disk('public')
                            ->directory('health-packages')
                            ->imageEditor()
                            ->imagePreviewHeight('200')
                            ->downloadable()
                            ->openable()
                            ->preserveFilenames(false)
                            ->required()
                            ->saveUploadedFileUsing(function ($file) {

                                $manager = new ImageManager(new Driver());

                                $image = $manager->read($file)
                                    ->scale(width: 800) // ideal for cards/listing
                                    ->toWebp(85);

                                $fileName = Str::uuid() . '.webp';
                                $path = 'health-packages/' . $fileName;

                                Storage::disk('public')->put($path, (string) $image);

                                return $path;
                            }),
                    ])
                    ->columns(2),

                Section::make('Descriptions')
                    ->schema([
                        Textarea::make('about_intro')->rows(3),
                        Textarea::make('about_more')->rows(5),
                    ]),

                Section::make('SEO')
                    ->schema([
                        TextInput::make('meta_title'),
                        Textarea::make('meta_description'),
                        TextInput::make('meta_keywords'),
                    ]),

                // 🔥 PACKAGE SECTIONS (TEST GROUPS)
                Section::make('Package Sections (Tests Included)')
                    ->schema([

                        Repeater::make('sections')
                            ->relationship()
                            ->orderColumn('sort_order')
                            ->schema([

                                TextInput::make('title')
                                    ->label('Section Title')
                                    ->required()
                                    ->columnSpanFull(),

                                TextInput::make('subtitle')
                                    ->label('Subtitle')
                                    ->columnSpanFull(),

                                // 🔥 TEST ITEMS INSIDE SECTION
                                Repeater::make('items')
                                    ->relationship()
                                    ->orderColumn('sort_order')
                                    ->schema([
                                        TextInput::make('item')
                                            ->label('Test Item')

                                    ])
                                    ->columns(1)
                                    ->defaultItems(1)
                                    ->collapsible()
                                    ->cloneable(),

                            ])
                            ->defaultItems(1)
                            ->collapsible()
                            ->cloneable()
                            ->columnSpanFull(),

                    ])
                    ->collapsible(),

            ]);
    }


    public static function table(Table $table): Table
    {
        return HealthPackagesTable::configure($table);
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
            'index' => ListHealthPackages::route('/'),
            'create' => CreateHealthPackage::route('/create'),
            'edit' => EditHealthPackage::route('/{record}/edit'),
        ];
    }
}
