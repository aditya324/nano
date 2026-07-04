<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HypoglycemiaEndocrineDrugInducedConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Hypoglycemia (Endocrine / Drug-Induced)')],
            [
                'name' => 'Hypoglycemia (Endocrine / Drug-Induced)',
                'slug' => Str::slug('Hypoglycemia (Endocrine / Drug-Induced)'),
                'h1' => 'Hypoglycemia (Endocrine / Drug-Induced)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Hypoglycemia is a medical condition characterized by abnormally low blood sugar (glucose) levels, which can interfere with normal brain and body function. It commonly occurs in individuals with diabetes due to insulin or medication-related causes, but it may also develop from endocrine disorders, prolonged fasting, severe illness, or metabolic abnormalities. Hypoglycemia can range from mild symptoms to severe life-threatening emergencies requiring immediate medical attention and blood sugar correction.',
                'about_more' => '',
                'overview' => 'Hypoglycemia is a medical condition characterized by abnormally low blood sugar (glucose) levels, which can interfere with normal brain and body function. It commonly occurs in individuals with diabetes due to insulin or medication-related causes, but it may also develop from endocrine disorders, prolonged fasting, severe illness, or metabolic abnormalities. Hypoglycemia can range from mild symptoms to severe life-threatening emergencies requiring immediate medical attention and blood sugar correction.',
                'symptoms' => [
            ['value' => 'Sweating, shakiness, or rapid heartbeat'],
            ['value' => 'Hunger, weakness, or dizziness'],
            ['value' => 'Confusion, irritability, or difficulty concentrating'],
            ['value' => 'Blurred vision or headache'],
            ['value' => 'Seizures, unconsciousness, or coma in severe hypoglycemia'],
        ],
                'causes' => [
            ['value' => 'Excess insulin or diabetes medication use'],
            ['value' => 'Skipping meals or prolonged fasting'],
            ['value' => 'Excessive physical activity without adequate nutrition'],
            ['value' => 'Alcohol consumption affecting glucose metabolism'],
            ['value' => 'Endocrine disorders such as adrenal insufficiency or pituitary dysfunction'],
        ],
                'risks' => [
            ['value' => 'Loss of consciousness or diabetic coma'],
            ['value' => 'Seizures or neurological complications'],
            ['value' => 'Cardiac arrhythmias or cardiovascular instability'],
            ['value' => 'Recurrent hypoglycemia affecting brain function and daily activities'],
            ['value' => 'Increased risk of severe injury or accidents due to sudden symptoms'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Treatment for hypoglycemia focuses on rapidly restoring normal blood sugar levels, identifying the underlying cause, and preventing recurrence. Management may include oral glucose intake, intravenous dextrose, glucagon injections, blood sugar monitoring, medication adjustment, nutritional counseling, and treatment of underlying endocrine or metabolic disorders. Patients may also benefit from diabetes education, dietary planning, regular meal scheduling, exercise guidance, continuous glucose monitoring, and endocrinology follow-up to maintain stable blood sugar control and reduce future hypoglycemic episodes.'],
        ],
                'recovery' => 'The long-term outlook for hypoglycemia is generally positive with early recognition, proper treatment, and effective blood sugar management. Regular glucose monitoring, medication adherence, healthy nutrition, lifestyle modification, patient education, and continuous medical follow-up significantly help prevent recurrent hypoglycemia, reduce complications, improve metabolic stability, and enhance overall quality of life. ____________________ 6. Thyroid Disorders (Hypothyroidism, Hyperthyroidism)',
                'sort_order' => 5,
                'is_active' => true,
                'meta_title' => 'Hypoglycemia (Endocrine / Drug-Induced)',
                'meta_description' => 'Hypoglycemia is a medical condition characterized by abnormally low blood sugar (glucose) levels, which can interfere with normal brain and body function. It co',
                'meta_keywords' => '',
            ]
        );
    }
}
