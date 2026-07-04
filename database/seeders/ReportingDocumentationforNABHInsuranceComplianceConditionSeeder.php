<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ReportingDocumentationforNABHInsuranceComplianceConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Reporting & Documentation for NABH / Insurance Compliance')],
            [
                'name' => 'Reporting & Documentation for NABH / Insurance Compliance',
                'slug' => Str::slug('Reporting & Documentation for NABH / Insurance Compliance'),
                'h1' => 'Reporting & Documentation for NABH / Insurance Compliance',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Reporting and documentation for NABH and insurance compliance involve the systematic preparation, maintenance, and management of medical records, diagnostic reports, treatment summaries, and healthcare documentation according to regulatory and insurance standards. These processes help ensure quality patient care, legal compliance, transparency, and smooth insurance claim processing.',
                'about_more' => '',
                'overview' => 'Healthcare documentation for NABH (National Accreditation Board for Hospitals & Healthcare Providers) and insurance compliance includes patient records, radiology reports, laboratory findings, consent forms, discharge summaries, procedure notes, billing records, and treatment documentation. Proper reporting supports accreditation standards, improves healthcare quality, facilitates communication among healthcare professionals, and ensures accurate insurance claim submission and reimbursement.',
                'symptoms' => [
            ['value' => 'Need for medical record verification and treatment documentation'],
            ['value' => 'Requirement for insurance claim processing or reimbursement'],
            ['value' => 'Hospital accreditation and quality assurance monitoring'],
            ['value' => 'Need for procedure, imaging, or treatment reporting'],
            ['value' => 'Long-term patient follow-up and legal medical documentation needs'],
        ],
                'causes' => [
            ['value' => 'Preparation of diagnostic and radiology reports'],
            ['value' => 'Insurance claim documentation and verification'],
            ['value' => 'NABH accreditation and healthcare quality compliance'],
            ['value' => 'Maintenance of patient treatment and procedural records'],
            ['value' => 'Legal, administrative, and long-term medical documentation support'],
        ],
                'risks' => [
            ['value' => 'Delayed insurance approval or reimbursement due to incomplete records'],
            ['value' => 'Documentation errors affecting treatment continuity'],
            ['value' => 'Regulatory non-compliance or accreditation issues'],
            ['value' => 'Loss of important patient medical information'],
            ['value' => 'Increased administrative burden and communication delays'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Reporting and documentation systems support healthcare quality management, patient safety, medical auditing, insurance processing, accreditation compliance, and continuity of care. Accurate documentation helps improve communication between healthcare teams, supports legal and administrative requirements, and enhances overall healthcare efficiency.'],
            ['value' => 'Maintaining accurate and updated patient records regularly'],
            ['value' => 'Ensuring timely submission of insurance and compliance documentation'],
            ['value' => 'Reviewing reports and treatment summaries for accuracy'],
            ['value' => 'Following hospital protocols and regulatory guidelines carefully'],
            ['value' => 'Attending periodic audits, reviews, and compliance assessments'],
        ],
                'recovery' => 'The long-term outlook with proper reporting and documentation practices is highly positive because accurate medical records improve patient safety, healthcare quality, insurance processing efficiency, and regulatory compliance. Continuous monitoring, standardized reporting systems, staff training, and adherence to NABH guidelines are important for maintaining effective healthcare documentation and long-term institutional quality standards.',
                'sort_order' => 26,
                'is_active' => true,
                'meta_title' => 'Reporting & Documentation for NABH / Insurance Compliance',
                'meta_description' => 'Reporting and documentation for NABH and insurance compliance involve the systematic preparation, maintenance, and management of medical records, diagnostic rep',
                'meta_keywords' => '',
            ]
        );
    }
}
