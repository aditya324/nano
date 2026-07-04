<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NABHCompliantDialysisDocumentationMonitoringConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('NABH-Compliant Dialysis Documentation & Monitoring')],
            [
                'name' => 'NABH-Compliant Dialysis Documentation & Monitoring',
                'slug' => Str::slug('NABH-Compliant Dialysis Documentation & Monitoring'),
                'h1' => 'NABH-Compliant Dialysis Documentation & Monitoring',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'NABH-Compliant Dialysis Documentation and Monitoring is a structured nephrology quality-management system designed to maintain accurate patient records, dialysis safety standards, treatment monitoring, and regulatory compliance.',
                'about_more' => 'This system ensures high-quality dialysis care through standardized protocols, continuous patient monitoring, infection surveillance, and proper medical documentation. NABH compliance improves patient safety, treatment transparency, and healthcare quality assurance.',
                'overview' => 'The documentation and monitoring system includes: Dialysis treatment records Patient vital monitoring Dialysis adequacy tracking Infection surveillance reports Medication records Water quality documentation Equipment maintenance logs Emergency event reporting Healthcare teams maintain detailed records regarding: Blood pressure during dialysis Fluid removal Dialysis duration Vascular access status Laboratory investigations Adverse reactions Infection-control measures The system supports: Quality improvement programs Patient safety audits Regulatory compliance Standardized nephrology care Long-term dialysis monitoring Regular audits and staff training help maintain NABH standards consistently.',
                'symptoms' => [
            ['value' => 'Chronic kidney disease requiring dialysis'],
            ['value' => 'Dialysis dependency'],
            ['value' => 'Frequent dialysis monitoring needs'],
            ['value' => 'High-risk renal conditions'],
            ['value' => 'Long-term nephrology care requirements'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Documentation errors'],
            ['value' => 'Missed treatment complications'],
            ['value' => 'Incomplete monitoring records'],
            ['value' => 'Infection-control lapses'],
            ['value' => 'Reduced treatment quality without proper compliance'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Attend all scheduled dialysis sessions'],
            ['value' => 'Maintain accurate medical records'],
            ['value' => 'Follow dialysis safety instructions carefully'],
            ['value' => 'Inform healthcare providers about symptoms promptly'],
            ['value' => 'Continue regular nephrology follow-up and laboratory testing'],
        ],
                'recovery' => 'NABH-compliant dialysis documentation and monitoring systems improve treatment safety, quality assurance, and long-term renal patient management. Standardized monitoring supports better clinical outcomes, reduced complications, and safer long-term dialysis care.',
                'sort_order' => 45,
                'is_active' => true,
                'meta_title' => 'NABH-Compliant Dialysis Documentation & Monitoring',
                'meta_description' => 'NABH-Compliant Dialysis Documentation and Monitoring is a structured nephrology quality-management system designed to maintain accurate patient records, dialysi',
                'meta_keywords' => '',
            ]
        );
    }
}
