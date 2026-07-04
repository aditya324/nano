<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndocarditisInfectiveConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Endocarditis (Infective)')],
            [
                'name' => 'Endocarditis (Infective)',
                'slug' => Str::slug('Endocarditis (Infective)'),
                'h1' => 'Endocarditis (Infective)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Infective endocarditis is a serious infection involving the inner lining of the heart and heart valves. It usually occurs when bacteria or fungi enter the bloodstream and attach to damaged heart tissue or artificial valves.',
                'about_more' => '',
                'overview' => 'Infective endocarditis is a serious infection involving the inner lining of the heart and heart valves. It usually occurs when bacteria or fungi enter the bloodstream and attach to damaged heart tissue or artificial valves.',
                'symptoms' => [
            ['value' => 'Persistent fever and chills'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'Heart murmur or worsening cardiac symptoms'],
            ['value' => 'Shortness of breath'],
            ['value' => 'Weight loss and body aches'],
        ],
                'causes' => [
            ['value' => 'Bacterial bloodstream infections'],
            ['value' => 'Damaged or artificial heart valves'],
            ['value' => 'Poor dental hygiene or dental procedures'],
            ['value' => 'Intravenous drug use'],
            ['value' => 'Congenital heart disease or previous valve disease'],
        ],
                'risks' => [
            ['value' => 'Heart valve destruction and heart failure'],
            ['value' => 'Stroke due to infected blood clots'],
            ['value' => 'Kidney and systemic organ damage'],
            ['value' => 'Septic shock and severe infection spread'],
            ['value' => 'Life-threatening arrhythmias'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Blood culture and echocardiography evaluation'],
            ['value' => 'Long-term intravenous antibiotics'],
            ['value' => 'Antifungal therapy when indicated'],
            ['value' => 'Valve repair or replacement surgery'],
            ['value' => 'Intensive cardiac monitoring and follow-up'],
        ],
                'recovery' => 'Early diagnosis and aggressive treatment are essential. Delayed treatment may result in severe heart damage and systemic complications.',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Endocarditis (Infective)',
                'meta_description' => 'Infective endocarditis is a serious infection involving the inner lining of the heart and heart valves. It usually occurs when bacteria or fungi enter the blood',
                'meta_keywords' => '',
            ]
        );
    }
}
