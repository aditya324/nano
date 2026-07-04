<?php

namespace App\Filament\Resources\Specialities\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Str;
use Filament\Forms\Components\Repeater;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class SpecialityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            Section::make('Basic Information')
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(
                            fn($state, callable $set) =>
                            $set('slug', Str::slug($state))
                        ),

                    TextInput::make('slug')
                        ->required()
                        ->unique(ignoreRecord: true),

                    FileUpload::make('icon')
                        ->image()
                        ->disk('public')
                        ->directory('specialities/icons')
                        ->imageEditor()
                        ->preserveFilenames(false)
                        ->saveUploadedFileUsing(function ($file) {

                            $manager = new ImageManager(new Driver());

                            $image = $manager->read($file)
                                ->scale(width: 300) // small icon
                                ->toWebp(85);

                            $fileName = Str::uuid() . '.webp';
                            $path = 'specialities/icons/' . $fileName;

                            Storage::disk('public')->put($path, (string) $image);

                            return $path;
                        }),


                    FileUpload::make('banner_image')
                        ->image()
                        ->disk('public')
                        ->directory('specialities/banners')
                        ->imageEditor()
                        ->preserveFilenames(false)
                        ->saveUploadedFileUsing(function ($file) {

                            $manager = new ImageManager(new Driver());

                            $image = $manager->read($file)
                                ->scale(width: 1600) // banner size
                                ->toWebp(85);

                            $fileName = Str::uuid() . '.webp';
                            $path = 'specialities/banners/' . $fileName;

                            Storage::disk('public')->put($path, (string) $image);

                            return $path;
                        }),

                    FileUpload::make('related_image')
                        ->image()
                        ->disk('public')
                        ->directory('specialities/banners/relatedimages')
                        ->imageEditor()
                        ->preserveFilenames(false)
                        ->saveUploadedFileUsing(function ($file) {

                            $manager = new ImageManager(new Driver());

                            $image = $manager->read($file)
                                ->scale(width: 1200) // adjust as needed
                                ->toWebp(85);

                            $fileName = Str::uuid() . '.webp';
                            $path = 'specialities/banners/relatedimages/' . $fileName;

                            Storage::disk('public')->put($path, (string) $image);

                            return $path;
                        }),

                    Toggle::make('is_active')->default(true),
                ])
                ->columns(2),

            Section::make('About Section')
                ->schema([
                    RichEditor::make('about_intro')->label('Intro Paragraph'),
                    RichEditor::make('about_more')->label('Read More Content'),
                ]),

            Section::make('Page Content')
                ->schema([
                    RichEditor::make('overview_content'),
                    RichEditor::make('treatments_content'),
                    RichEditor::make('facilities_content'),
                    RichEditor::make('conditions_content'),
                    RichEditor::make('risks_content'),
                    RichEditor::make('subspecialties_content'),
                ]),

            Section::make('SEO')
                ->schema([
                    TextInput::make('meta_title'),
                    Textarea::make('meta_description')->rows(3),
                ]),
            Section::make('FAQs')
                ->schema([
                    Repeater::make('faqs')
                        ->relationship() // only if you have a separate FAQs table (see Option B below)
                        ->schema([
                            TextInput::make('question')
                                ->required()
                                ->label('Question')
                                ->columnSpanFull(),

                            TextInput::make('answer')
                                ->required()
                                ->label('Answer')
                                ->columnSpanFull(),
                        ])
                        ->addActionLabel('Add FAQ')
                        ->reorderable()
                        ->collapsible()
                        ->cloneable()
                        ->itemLabel(fn(array $state): ?string => $state['question'] ?? null)
                        ->columns(1),
                ]),

        ]);
    }
}
