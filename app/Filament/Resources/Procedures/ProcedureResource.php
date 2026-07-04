<?php

namespace App\Filament\Resources\Procedures;

use App\Filament\Resources\Procedures\Pages\CreateProcedure;
use App\Filament\Resources\Procedures\Pages\EditProcedure;
use App\Filament\Resources\Procedures\Pages\ListProcedures;
use App\Filament\Resources\Procedures\Schemas\ProcedureForm;
use App\Filament\Resources\Procedures\Tables\ProceduresTable;
use App\Models\Procedure;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ProcedureResource extends Resource
{
    protected static ?string $model = Procedure::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([

            Section::make('Procedure Details')
                ->schema([
                    TextInput::make('title')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn($state, $set) => $set('slug', Str::slug($state))),
                    TextInput::make('h1')
                        ->required(),

                    TextInput::make('slug')
                        ->required()
                        ->unique(ignoreRecord: true),
                ])->columns(2),

            FileUpload::make('banner_image')
                ->image()
                ->disk('public')
                ->directory('procedures/banners')
                ->imageEditor()
                ->preserveFilenames(false)
                ->saveUploadedFileUsing(function ($file) {

                    $manager = new ImageManager(new Driver());

                    $image = $manager->read($file)
                        ->scale(width: 1600)
                        ->toWebp(85);

                    $fileName = Str::uuid() . '.webp';
                    $path = 'procedures/banners/' . $fileName;

                    Storage::disk('public')->put($path, (string) $image);

                    return $path;
                }),

            FileUpload::make('related_image')
                ->image()
                ->disk('public')
                ->directory('procedures/banners/relatedimages')
                ->imageEditor()
                ->preserveFilenames(false)
                ->saveUploadedFileUsing(function ($file) {

                    $manager = new ImageManager(new Driver());

                    $image = $manager->read($file)
                        ->scale(width: 1200)
                        ->toWebp(85);

                    $fileName = Str::uuid() . '.webp';
                    $path = 'procedures/banners/relatedimages/' . $fileName;

                    Storage::disk('public')->put($path, (string) $image);

                    return $path;
                }),


            Section::make('Medical Content')
                ->schema([
                    RichEditor::make('introduction')->columnSpanFull(),
                    RichEditor::make('what_is')->label('What is the Condition?')->columnSpanFull(),

                    Repeater::make('symptoms')
                        ->schema([TextInput::make('value')->required()]),

                    Repeater::make('causes')
                        ->schema([TextInput::make('value')->required()]),

                    Repeater::make('condition_risks')
                        ->schema([TextInput::make('value')->required()]),

                    Repeater::make('preventions')
                        ->schema([TextInput::make('value')->required()]),

                    Repeater::make('diagnosis_tests')
                        ->schema([TextInput::make('value')->required()]),

                    RichEditor::make('treatment_overview')->columnSpanFull(),

                    Repeater::make('surgery_types')
                        ->schema([
                            TextInput::make('name')->required(),
                            Textarea::make('description')->required(),
                        ])->columnSpanFull(),

                    Repeater::make('recovery_timeline')
                        ->schema([
                            TextInput::make('stage')->required(),
                            Textarea::make('details')->required(),
                        ])->columnSpanFull(),

                    Repeater::make('post_op_care')
                        ->schema([
                            TextInput::make('value')->required(),
                        ]),

                    Repeater::make('surgery_risks')
                        ->schema([TextInput::make('value')->required()]),

                    RichEditor::make('long_term_outlook')->columnSpanFull(),
                    RichEditor::make('conclusion')->columnSpanFull(),
                ]),

            Section::make('SEO Settings')
                ->schema([
                    TextInput::make('seo_title')->maxLength(120),
                    Textarea::make('seo_description')->maxLength(300),
                    TextInput::make('seo_keywords'),
                ]),

            Section::make('FAQs')
                ->description('Optional. Add frequently asked questions for this procedure.')
                ->schema([
                    Repeater::make('faqs')
                        ->relationship()
                        ->schema([
                            TextInput::make('question')
                                ->label('Question')
                                ->columnSpanFull(),

                            Textarea::make('answer')
                                ->label('Answer')
                                ->rows(3)
                                ->columnSpanFull(),
                        ])
                        ->addActionLabel('Add FAQ')
                        ->reorderable()
                        ->collapsible()
                        ->cloneable()
                        ->itemLabel(fn (array $state): ?string => $state['question'] ?? null)
                        ->columns(1),
                ]),

            Toggle::make('is_active')->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return ProceduresTable::configure($table);
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
            'index' => ListProcedures::route('/'),
            'create' => CreateProcedure::route('/create'),
            'edit' => EditProcedure::route('/{record}/edit'),
        ];
    }
}
