<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChronicSinusitisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Chronic Sinusitis')],
            [
                'name' => 'Chronic Sinusitis',
                'slug' => Str::slug('Chronic Sinusitis'),
                'h1' => 'Chronic Sinusitis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Chronic sinusitis is long-term inflammation of the sinus cavities lasting more than 12 weeks. It causes persistent nasal blockage, facial discomfort, and recurrent infections affecting daily quality of life.',
                'about_more' => '',
                'overview' => 'Chronic sinusitis is long-term inflammation of the sinus cavities lasting more than 12 weeks. It causes persistent nasal blockage, facial discomfort, and recurrent infections affecting daily quality of life.',
                'symptoms' => [
            ['value' => 'Persistent nasal congestion'],
            ['value' => 'Thick nasal discharge or postnasal drip'],
            ['value' => 'Facial pressure or heaviness'],
            ['value' => 'Chronic cough or throat irritation'],
            ['value' => 'Reduced smell and taste sensation'],
        ],
                'causes' => [
            ['value' => 'Recurrent sinus infections'],
            ['value' => 'Allergic rhinitis'],
            ['value' => 'Nasal polyps or structural abnormalities'],
            ['value' => 'Pollution and smoking exposure'],
            ['value' => 'Weak immune system or chronic inflammation'],
        ],
                'risks' => [
            ['value' => 'Recurrent infections and breathing difficulty'],
            ['value' => 'Sleep disturbances and fatigue'],
            ['value' => 'Chronic headaches and facial pain'],
            ['value' => 'Asthma worsening'],
            ['value' => 'Rare spread of infection to eyes or brain'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Nasal steroid sprays and saline irrigation'],
            ['value' => 'Antibiotics for bacterial infections'],
            ['value' => 'Allergy management and antihistamines'],
            ['value' => 'Functional endoscopic sinus surgery (FESS)'],
            ['value' => 'Long-term ENT follow-up care'],
        ],
                'recovery' => 'Many patients improve with medical treatment and sinus surgery when necessary. Lifestyle changes help reduce recurrence.',
                'sort_order' => 22,
                'is_active' => true,
                'meta_title' => 'Chronic Sinusitis',
                'meta_description' => 'Chronic sinusitis is long-term inflammation of the sinus cavities lasting more than 12 weeks. It causes persistent nasal blockage, facial discomfort, and recurr',
                'meta_keywords' => '',
            ]
        );
    }
}
