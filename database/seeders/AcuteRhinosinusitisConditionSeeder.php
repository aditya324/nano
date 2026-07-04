<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AcuteRhinosinusitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Acute Rhinosinusitis')],
            [
                'name' => 'Acute Rhinosinusitis',
                'slug' => Str::slug('Acute Rhinosinusitis'),
                'h1' => 'Acute Rhinosinusitis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Acute rhinosinusitis is a sudden inflammation or infection of the nasal passages and sinus cavities, usually lasting less than four weeks. It commonly develops after viral upper respiratory infections and may cause facial pain, nasal blockage, and thick nasal discharge.',
                'about_more' => '',
                'overview' => 'Acute rhinosinusitis is a sudden inflammation or infection of the nasal passages and sinus cavities, usually lasting less than four weeks. It commonly develops after viral upper respiratory infections and may cause facial pain, nasal blockage, and thick nasal discharge.',
                'symptoms' => [
            ['value' => 'Nasal congestion and blockage'],
            ['value' => 'Thick yellow or green nasal discharge'],
            ['value' => 'Facial pain or pressure'],
            ['value' => 'Headache and fever'],
            ['value' => 'Reduced sense of smell'],
        ],
                'causes' => [
            ['value' => 'Viral upper respiratory infections'],
            ['value' => 'Bacterial sinus infections'],
            ['value' => 'Allergies and nasal inflammation'],
            ['value' => 'Pollution or irritant exposure'],
            ['value' => 'Deviated nasal septum or blockage'],
        ],
                'risks' => [
            ['value' => 'Chronic sinusitis development'],
            ['value' => 'Spread of infection to nearby structures'],
            ['value' => 'Ear infections and throat irritation'],
            ['value' => 'Sleep disturbances and fatigue'],
            ['value' => 'Rare eye or brain complications'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Nasal decongestants and saline washes'],
            ['value' => 'Steam inhalation and hydration'],
            ['value' => 'Antibiotics if bacterial infection is suspected'],
            ['value' => 'Pain and fever management'],
            ['value' => 'ENT evaluation for persistent symptoms'],
        ],
                'recovery' => 'Most patients recover completely within a few weeks. Early treatment helps reduce complications and symptom severity.',
                'sort_order' => 21,
                'is_active' => true,
                'meta_title' => 'Acute Rhinosinusitis',
                'meta_description' => 'Acute rhinosinusitis is a sudden inflammation or infection of the nasal passages and sinus cavities, usually lasting less than four weeks. It commonly develops ',
                'meta_keywords' => '',
            ]
        );
    }
}
