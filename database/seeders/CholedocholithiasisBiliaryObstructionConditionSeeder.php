<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CholedocholithiasisBiliaryObstructionConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Choledocholithiasis / Biliary Obstruction')],
            [
                'name' => 'Choledocholithiasis / Biliary Obstruction',
                'slug' => Str::slug('Choledocholithiasis / Biliary Obstruction'),
                'h1' => 'Choledocholithiasis / Biliary Obstruction',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Choledocholithiasis refers to gallstones blocking the common bile duct, leading to obstruction of bile flow and liver dysfunction.',
                'about_more' => '',
                'overview' => 'Choledocholithiasis refers to gallstones blocking the common bile duct, leading to obstruction of bile flow and liver dysfunction.',
                'symptoms' => [
            ['value' => 'Severe upper abdominal pain'],
            ['value' => 'Jaundice and yellow eyes'],
            ['value' => 'Fever and chills'],
            ['value' => 'Dark urine and pale stools'],
            ['value' => 'Nausea and vomiting'],
        ],
                'causes' => [
            ['value' => 'Migration of gallstones into bile ducts'],
            ['value' => 'Gallbladder disease'],
            ['value' => 'Biliary strictures or tumors'],
            ['value' => 'Inflammation of bile ducts'],
            ['value' => 'Previous gallstone disease history'],
        ],
                'risks' => [
            ['value' => 'Acute cholangitis (bile duct infection)'],
            ['value' => 'Severe pancreatitis'],
            ['value' => 'Liver damage and sepsis'],
            ['value' => 'Recurrent bile duct obstruction'],
            ['value' => 'Life-threatening systemic infection'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Blood tests and imaging studies'],
            ['value' => 'ERCP for stone removal'],
            ['value' => 'Antibiotics for infection control'],
            ['value' => 'Gallbladder surgery after stabilization'],
            ['value' => 'Supportive hospital care and monitoring'],
        ],
                'recovery' => 'Timely treatment usually results in good recovery. Delayed management can lead to serious complications such as sepsis and pancreatitis.',
                'sort_order' => 20,
                'is_active' => true,
                'meta_title' => 'Choledocholithiasis / Biliary Obstruction',
                'meta_description' => 'Choledocholithiasis refers to gallstones blocking the common bile duct, leading to obstruction of bile flow and liver dysfunction.',
                'meta_keywords' => '',
            ]
        );
    }
}
