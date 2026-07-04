<?php

namespace App\Filament\Resources\Conditions;

use App\Filament\Resources\Conditions\Pages\CreateCondition;
use App\Filament\Resources\Conditions\Pages\EditCondition;
use App\Filament\Resources\Conditions\Pages\ListConditions;
use App\Filament\Resources\Conditions\Schemas\ConditionForm;
use App\Filament\Resources\Conditions\Tables\ConditionsTable;
use App\Models\Condition;
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

class ConditionResource extends Resource
{
    protected static ?string $model = Condition::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([

            TextInput::make('name')->required()->live(onBlur: true)
                ->afterStateUpdated(fn($state, $set) => $set('slug', Str::slug($state))),

            TextInput::make('slug')->required(),

            TextInput::make('h1')->required(),

            FileUpload::make('icon')
                ->image()
                ->disk('public')
                ->directory('conditions/icons')
                ->preserveFilenames(false)
                ->saveUploadedFileUsing(function ($file) {

                    $manager = new ImageManager(new Driver());

                    $image = $manager->read($file)
                        ->scale(width: 250) // ideal icon size
                        ->toWebp(85);

                    $fileName = Str::uuid() . '.webp';
                    $path = 'conditions/icons/' . $fileName;

                    Storage::disk('public')->put($path, (string) $image);

                    return $path;
                }),
            Section::make('SEO Settings')
                ->schema([

                    TextInput::make('meta_title')
                        ->label('Meta Title')
                        ->maxLength(120)
                        ->helperText('Recommended: 50–60 characters')
                        ->live(onBlur: true)
                        ->afterStateUpdated(
                            fn($state, $set, $get) =>
                            $get('meta_description') ?: $set(
                                'meta_description',
                                'Learn about ' . $get('name') . ' symptoms, causes, diagnosis and treatment at Nano Hospitals.'
                            )
                        ),

                    Textarea::make('meta_description')
                        ->rows(3)
                        ->maxLength(300)
                        ->helperText('Recommended: 150–160 characters'),

                    TextInput::make('meta_keywords')
                        ->label('Meta Keywords (optional)')
                        ->helperText('Comma separated keywords'),
                ])->columns(1),

            TextInput::make('cta_text')->label('CTA Button Text'),
            TextInput::make('cta_link')->label('CTA Button Link'),

            RichEditor::make('about')->columnSpanFull(),
            RichEditor::make('about_more')->columnSpanFull(),

            RichEditor::make('overview')->columnSpanFull(),

            Repeater::make('symptoms')->schema([TextInput::make('value')])->columnSpanFull(),
            Repeater::make('causes')->schema([TextInput::make('value')])->columnSpanFull(),
            Repeater::make('risks')->schema([TextInput::make('value')])->columnSpanFull(),
            Repeater::make('diagnosis')->schema([TextInput::make('value')])->columnSpanFull(),
            Repeater::make('treatment')->schema([TextInput::make('value')])->columnSpanFull(),

            RichEditor::make('recovery')->columnSpanFull(),

            Section::make('FAQs')
                ->description('Optional. Add frequently asked questions for this condition.')
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

            TextInput::make('sort_order')->numeric()->default(0),
            Toggle::make('is_active')->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return ConditionsTable::configure($table);
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
            'index' => ListConditions::route('/'),
            'create' => CreateCondition::route('/create'),
            'edit' => EditCondition::route('/{record}/edit'),
        ];
    }
}
