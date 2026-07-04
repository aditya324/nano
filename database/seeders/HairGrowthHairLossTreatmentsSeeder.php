<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HairGrowthHairLossTreatmentsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Hair Growth & Hair Loss Treatments')],
            [
                'title' => 'Hair Growth & Hair Loss Treatments',
                'slug' => Str::slug('Hair Growth & Hair Loss Treatments'),
                'introduction' => 'Hair growth and hair loss treatments are medical therapies used to slow hair thinning, stimulate hair regrowth, and improve scalp health in individuals experiencing hair loss conditions such as androgenetic alopecia, alopecia areata, or diffuse hair shedding. Minoxidil and finasteride are among the most commonly prescribed treatments for managing hair loss.',
                'what_is' => 'Minoxidil is a topical medication that helps stimulate hair follicles and improve hair growth in both men and women. Finasteride is an oral medication primarily used in men to reduce hormone-related hair loss by lowering dihydrotestosterone (DHT) levels. These treatments are commonly recommended for pattern hair loss and may be combined with other therapies such as PRP therapy, nutritional support, or hair restoration procedures for improved outcomes.',
                'symptoms' => [
            ['value' => 'Gradual thinning of scalp hair'],
            ['value' => 'Receding hairline or widening hair part'],
            ['value' => 'Excessive hair shedding'],
            ['value' => 'Reduced hair density or volume'],
            ['value' => 'Slow or weakened hair regrowth'],
        ],
                'causes' => [
            ['value' => 'Hair loss can occur due to a variety of factors including genetic predisposition, hormonal imbalances, stress, nutritional deficiencies, autoimmune conditions, scalp infections, aging, and certain medical illnesses. Androgenetic alopecia, also known as male or female pattern hair loss, is one of the most common causes and is linked to hormonal and hereditary factors. Other contributing causes may include thyroid disorders, anemia, sudden weight loss, medications, excessive hairstyling, and environmental damage to the scalp and hair follicles.'],
        ],
                'condition_risks' => [
            ['value' => 'Scalp irritation, dryness, or itching with topical treatments'],
            ['value' => 'Temporary hair shedding during initial treatment phases'],
            ['value' => 'Hormonal side effects associated with finasteride in some individuals'],
            ['value' => 'Allergic reactions or skin sensitivity'],
            ['value' => 'Need for long-term treatment to maintain results'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options for hair loss depend on the underlying cause, severity, and pattern of hair thinning. Minoxidil is commonly prescribed as a topical solution or foam to stimulate hair follicles, improve blood flow to the scalp, and encourage hair regrowth. Finasteride is an oral medication primarily used in men to reduce DHT levels, helping slow hair loss progression and support hair retention. In addition to these medications, dermatologists may recommend platelet-rich plasma (PRP) therapy, nutritional supplementation, low-level laser therapy, medicated shampoos, or hair transplantation procedures in selected cases. Lifestyle modifications, stress management, and proper scalp care also play an important role in maintaining healthy hair growth and improving long-term treatment outcomes.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Regular and consistent use of prescribed medications'],
            ['value' => 'Gentle hair and scalp care practices'],
            ['value' => 'Nutritional support and healthy lifestyle habits'],
            ['value' => 'Monitoring for side effects or scalp irritation'],
            ['value' => 'Regular dermatologic follow-up and treatment adjustments'],
        ],
                'surgery_risks' => [
            ['value' => 'Scalp irritation, dryness, or itching with topical treatments'],
            ['value' => 'Temporary hair shedding during initial treatment phases'],
            ['value' => 'Hormonal side effects associated with finasteride in some individuals'],
            ['value' => 'Allergic reactions or skin sensitivity'],
            ['value' => 'Need for long-term treatment to maintain results'],
            ['value' => 'Treatment Options'],
            ['value' => 'Treatment options for hair loss depend on the underlying cause, severity, and pattern of hair thinning. Minoxidil is commonly prescribed as a topical solution or foam to stimulate hair follicles, improve blood flow to the scalp, and encourage hair regrowth. Finasteride is an oral medication primarily used in men to reduce DHT levels, helping slow hair loss progression and support hair retention. In addition to these medications, dermatologists may recommend platelet-rich plasma (PRP) therapy, nutritional supplementation, low-level laser therapy, medicated shampoos, or hair transplantation procedures in selected cases. Lifestyle modifications, stress management, and proper scalp care also play an important role in maintaining healthy hair growth and improving long-term treatment outcomes.'],
        ],
                'long_term_outlook' => 'The long-term outlook for hair growth and hair loss treatments is generally positive when therapy is started early and continued consistently. Many individuals experience slowing of hair loss, improved hair density, and healthier scalp conditions. Continuous treatment, proper scalp care, and regular dermatologic supervision are important for maintaining long-term results and preventing progression of hair loss.',
                'conclusion' => '',
                'seo_title' => 'Hair Growth & Hair Loss Treatments',
                'seo_description' => 'Hair growth and hair loss treatments are medical therapies used to slow hair thinning, stimulate hair regrowth, and improve scalp health in individuals experiencing hair loss conditions such as androgenetic alopecia, alopecia areata, or diffuse hair shedding. Minoxidil and finasteride are among the most commonly prescribed treatments for managing hair loss.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
