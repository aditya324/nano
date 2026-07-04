<?php

namespace App\Filament\Resources\HealthFacilityPages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class HealthFacilityPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            Section::make('Hero Section')
                ->schema([
                    TextInput::make('hero_title')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(function ($state, callable $set, callable $get) {
                            // Only auto-generate if slug is empty
                            if (blank($get('slug'))) {
                                $set('slug', Str::slug($state));
                            }
                        }),

                    TextInput::make('h1')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(function ($state, callable $set, callable $get) {
                            // Only auto-generate if slug is empty
                            if (blank($get('slug'))) {
                                $set('slug', Str::slug($state));
                            }
                        }),
                    TextInput::make('slug')
                        ->required()
                        ->unique(ignoreRecord: true),
                    TextInput::make('hero_button_text')->default('Explore Jobs'),
                    TextInput::make('hero_button_link'),
                    FileUpload::make('hero_background')
                        ->image()
                        ->disk('public')
                        ->directory('health-facilities')
                        ->imageEditor()
                        ->preserveFilenames(false)
                        ->saveUploadedFileUsing(function ($file) {

                            $manager = new ImageManager(new Driver());

                            // Read uploaded image
                            $image = $manager->read($file->getRealPath());

                            // Prevent upscaling
                            $maxWidth = 1920;

                            if ($image->width() > $maxWidth) {
                                $image = $image->scale(width: $maxWidth);
                            }

                            // Convert to high-quality WebP
                            $encoded = $image->toWebp(95);

                            // Generate unique filename
                            $fileName = Str::uuid() . '.webp';
                            $path = 'health-facilities/' . $fileName;

                            // Store file
                            Storage::disk('public')->put($path, (string) $encoded);

                            return $path;
                        }),
                    Toggle::make('is_active')->default(true),
                ])->columns(2),

            Section::make('About Section')
                ->schema([
                    RichEditor::make('about_intro')->label('Intro Content'),
                    RichEditor::make('about_more')->label('Read More Content'),
                ]),

            Section::make('Page Content')
                ->schema([
                    RichEditor::make('overview_content'),
                    RichEditor::make('workflow_content'),
                    RichEditor::make('delivery_content'),
                    RichEditor::make('benefits_content'),
                    RichEditor::make('risks_content'),
                    RichEditor::make('advantages_content'),
                ]),

            Section::make('FAQs (Dropdown Items)')
                ->description('Add one question and answer per item. These will appear as dropdown FAQs on the Health Facility page.')
                ->schema([
                    Repeater::make('faqs')
                        ->label('FAQs')
                        ->schema([
                            TextInput::make('question')
                                ->label('Question')
                                ->required()
                                ->maxLength(255),
                            RichEditor::make('answer')
                                ->label('Answer')
                                ->required(),
                        ])
                        ->itemLabel(fn (array $state): ?string => $state['question'] ?? null)
                        ->reorderableWithDragAndDrop()
                        ->collapsed()
                        ->defaultItems(1)
                        ->addActionLabel('Add FAQ')
                        ->columnSpanFull(),
                    RichEditor::make('faqs_content')
                        ->label('Legacy FAQs Content')
                        ->helperText('Optional fallback for older pages. Prefer using the FAQs repeater above.')
                        ->columnSpanFull(),
                ]),

            Section::make('SEO')
                ->schema([
                    TextInput::make('meta_title'),
                    Textarea::make('meta_description')->rows(3),
                ]),
        ]);
    }
}
