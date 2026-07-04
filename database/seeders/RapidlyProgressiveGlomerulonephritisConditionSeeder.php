<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RapidlyProgressiveGlomerulonephritisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Rapidly Progressive Glomerulonephritis')],
            [
                'name' => 'Rapidly Progressive Glomerulonephritis',
                'slug' => Str::slug('Rapidly Progressive Glomerulonephritis'),
                'h1' => 'Rapidly Progressive Glomerulonephritis',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Rapidly progressive glomerulonephritis (RPGN) is a severe and rapidly worsening form of kidney inflammation that causes rapid loss of kidney function over days to weeks. It is considered a medical emergency because untreated disease may quickly lead to kidney failure.',
                'about_more' => '',
                'overview' => 'Rapidly progressive glomerulonephritis (RPGN) is a severe and rapidly worsening form of kidney inflammation that causes rapid loss of kidney function over days to weeks. It is considered a medical emergency because untreated disease may quickly lead to kidney failure.',
                'symptoms' => [
            ['value' => 'Blood in urine and reduced urine output'],
            ['value' => 'Swelling of face, legs, or body'],
            ['value' => 'Fatigue and weakness'],
            ['value' => 'High blood pressure'],
            ['value' => 'Shortness of breath and fluid overload'],
        ],
                'causes' => [
            ['value' => 'Autoimmune diseases such as lupus or vasculitis'],
            ['value' => 'Severe glomerular inflammation'],
            ['value' => 'Immune-mediated kidney injury'],
            ['value' => 'Anti-GBM disease or systemic disorders'],
            ['value' => 'Certain infections triggering immune reactions'],
        ],
                'risks' => [
            ['value' => 'Rapid progression to kidney failure'],
            ['value' => 'Severe electrolyte and fluid imbalance'],
            ['value' => 'Lung involvement and respiratory complications'],
            ['value' => 'Permanent irreversible kidney damage'],
            ['value' => 'Need for urgent dialysis or transplant'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'High-dose corticosteroids and immunosuppressive therapy'],
            ['value' => 'Plasma exchange therapy in selected cases'],
            ['value' => 'Blood pressure and fluid control'],
            ['value' => 'Dialysis support for kidney failure'],
            ['value' => 'Intensive nephrology monitoring and follow-up'],
        ],
                'recovery' => 'Early aggressive treatment is critical to preserve kidney function. Some patients recover partially or completely, while delayed treatment may result in permanent kidney failure requiring long-term dialysis or transplantation.',
                'sort_order' => 30,
                'is_active' => true,
                'meta_title' => 'Rapidly Progressive Glomerulonephritis',
                'meta_description' => 'Rapidly progressive glomerulonephritis (RPGN) is a severe and rapidly worsening form of kidney inflammation that causes rapid loss of kidney function over days ',
                'meta_keywords' => '',
            ]
        );
    }
}
