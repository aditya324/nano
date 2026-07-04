<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EndocrineDisordersThyroidAdrenalPituitaryPCOSEndocrineDisordersThyroidAdrenalPituitaryPCOSConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Endocrine Disorders (Thyroid, Adrenal, Pituitary, PCOS)  Endocrine Disorders (Thyroid, Adrenal, Pituitary, PCOS)')],
            [
                'name' => 'Endocrine Disorders (Thyroid, Adrenal, Pituitary, PCOS)  Endocrine Disorders (Thyroid, Adrenal, Pituitary, PCOS)',
                'slug' => Str::slug('Endocrine Disorders (Thyroid, Adrenal, Pituitary, PCOS)  Endocrine Disorders (Thyroid, Adrenal, Pituitary, PCOS)'),
                'h1' => 'Endocrine Disorders (Thyroid, Adrenal, Pituitary, PCOS)  Endocrine Disorders (Thyroid, Adrenal, Pituitary, PCOS)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => '',
                'about_more' => '',
                'overview' => '',
                'symptoms' => [],
                'causes' => [],
                'risks' => [],
                'diagnosis' => [],
                'treatment' => [],
                'recovery' => '',
                'sort_order' => 13,
                'is_active' => true,
                'meta_title' => 'Endocrine Disorders (Thyroid, Adrenal, Pituitary, PCOS)  Endocrine Disorders (Thyroid, Adrenal, Pituitary, PCOS)',
                'meta_description' => '',
                'meta_keywords' => '',
            ]
        );
    }
}
