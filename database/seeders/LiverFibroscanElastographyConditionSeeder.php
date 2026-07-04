<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LiverFibroscanElastographyConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Liver Fibroscan / Elastography')],
            [
                'name' => 'Liver Fibroscan / Elastography',
                'slug' => Str::slug('Liver Fibroscan / Elastography'),
                'h1' => 'Liver Fibroscan / Elastography',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Fibroscan or elastography is a non-invasive test used to measure liver stiffness and assess liver fibrosis or cirrhosis.',
                'about_more' => 'It helps evaluate chronic liver diseases without requiring surgical biopsy in many cases.',
                'overview' => 'Services and capabilities include: Liver fibrosis assessment Fatty liver disease evaluation Cirrhosis monitoring Hepatitis-related liver assessment Non-invasive liver health monitoring The test uses ultrasound-based technology to measure liver elasticity safely and quickly. Symptoms Indicating Evaluation Fatty liver disease Chronic hepatitis B or C Elevated liver enzymes Alcohol-related liver disease Suspected liver fibrosis',
                'symptoms' => [],
                'causes' => [],
                'risks' => [
            ['value' => 'Minimal to no procedural risks'],
            ['value' => 'Rare discomfort during testing'],
            ['value' => 'Limited accuracy in severe obesity or ascites'],
            ['value' => 'Need for additional tests in complex cases'],
            ['value' => 'False readings in active inflammation'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Resume normal activities immediately'],
            ['value' => 'Follow liver disease treatment plans'],
            ['value' => 'Maintain healthy diet and weight control'],
            ['value' => 'Avoid alcohol if advised'],
            ['value' => 'Attend periodic liver monitoring visits'],
        ],
                'recovery' => 'Regular Fibroscan monitoring helps detect liver fibrosis early and supports timely treatment. Lifestyle modification and medical management can slow or prevent progression to cirrhosis.',
                'sort_order' => 35,
                'is_active' => true,
                'meta_title' => 'Liver Fibroscan / Elastography',
                'meta_description' => 'Fibroscan or elastography is a non-invasive test used to measure liver stiffness and assess liver fibrosis or cirrhosis.',
                'meta_keywords' => '',
            ]
        );
    }
}
