<?php

namespace App\Filament\Resources\Procedures\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProcedureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('introduction')
                    ->columnSpanFull(),
                Textarea::make('what_is')
                    ->columnSpanFull(),
                TextInput::make('symptoms'),
                TextInput::make('causes'),
                TextInput::make('condition_risks'),
                TextInput::make('preventions'),
                TextInput::make('diagnosis_tests'),
                Textarea::make('treatment_overview')
                    ->columnSpanFull(),
                TextInput::make('surgery_types'),
                TextInput::make('recovery_timeline'),
                TextInput::make('post_op_care'),
                TextInput::make('surgery_risks'),
                Textarea::make('long_term_outlook')
                    ->columnSpanFull(),
                Textarea::make('conclusion')
                    ->columnSpanFull(),
                TextInput::make('seo_title'),
                Textarea::make('seo_description')
                    ->columnSpanFull(),
                TextInput::make('seo_keywords'),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
