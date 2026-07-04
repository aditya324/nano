<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ThrombolysisPCIforSTEMIConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Thrombolysis / PCI for STEMI')],
            [
                'name' => 'Thrombolysis / PCI for STEMI',
                'slug' => Str::slug('Thrombolysis / PCI for STEMI'),
                'h1' => 'Thrombolysis / PCI for STEMI',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Thrombolysis and Percutaneous Coronary Intervention (PCI) are emergency cardiac procedures used to restore blood flow in patients experiencing ST-Elevation Myocardial Infarction (STEMI), a severe type of heart attack caused by complete blockage of a coronary artery. These procedures are critical in reducing heart muscle damage, improving circulation, preserving heart function, and increasing survival during acute cardiac emergencies.',
                'about_more' => '',
                'overview' => 'Thrombolysis involves the administration of clot-dissolving medications to break down blood clots blocking coronary arteries and restore blood flow to the heart. Percutaneous Coronary Intervention (PCI), also known as coronary angioplasty, is a minimally invasive procedure in which a catheter with a balloon and stent is inserted into blocked coronary arteries to reopen them and improve circulation. PCI is commonly performed in cardiac catheterization laboratories and is considered the preferred treatment for STEMI when rapidly available. Both procedures are performed under intensive cardiac monitoring by specialized cardiology and critical care teams.',
                'symptoms' => [
            ['value' => 'Severe chest pain or pressure spreading to the arm, jaw, neck, or back'],
            ['value' => 'Shortness of breath or difficulty breathing'],
            ['value' => 'Sweating, dizziness, or fainting episodes'],
            ['value' => 'Nausea, vomiting, or extreme fatigue'],
            ['value' => 'Rapid heartbeat, weakness, or signs of circulatory instability'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Bleeding complications related to thrombolytic medications or catheter procedures'],
            ['value' => 'Recurrent coronary artery blockage or restenosis'],
            ['value' => 'Cardiac arrhythmias or sudden cardiac instability'],
            ['value' => 'Blood vessel injury, stroke, or allergic reactions to contrast agents'],
            ['value' => 'Heart failure or persistent heart muscle damage in severe cases'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Thrombolysis and PCI procedures focus on rapidly restoring coronary blood flow, stabilizing heart function, and preventing complications associated with STEMI. Management may include clot-dissolving medications, coronary angioplasty with stent placement, anticoagulants, antiplatelet therapy, oxygen support, cardiac monitoring, pain management, and intensive cardiac care. Patients may also require cardiac rehabilitation, cholesterol management, blood pressure control, lifestyle modification, smoking cessation, dietary counseling, exercise programs, and long-term cardiology follow-up to improve heart health and reduce future cardiovascular risk.'],
            ['value' => 'Continuous cardiac monitoring and observation after the procedure'],
            ['value' => 'Monitoring for bleeding, arrhythmias, or recurrent chest pain'],
            ['value' => 'Medication management including antiplatelet and anticoagulant therapy'],
            ['value' => 'Cardiac rehabilitation and gradual return to physical activity'],
            ['value' => 'Long-term cardiology follow-up and cardiovascular risk management'],
        ],
                'recovery' => 'The long-term outlook following thrombolysis or PCI for STEMI depends on the severity of heart damage, speed of treatment, overall cardiovascular health, and adherence to long-term cardiac care. Early intervention, medication adherence, cardiac rehabilitation, healthy lifestyle habits, regular exercise, smoking cessation, and ongoing cardiology follow-up significantly help improve heart function, reduce complications, prevent recurrent heart attacks, and enhance overall quality of life. _____________________ 15. Stroke Management (Thrombolysis, Mechanical Thrombectomy) Stroke Management (Thrombolysis, Mechanical Thrombectomy) Procedures',
                'sort_order' => 16,
                'is_active' => true,
                'meta_title' => 'Thrombolysis / PCI for STEMI',
                'meta_description' => 'Thrombolysis and Percutaneous Coronary Intervention (PCI) are emergency cardiac procedures used to restore blood flow in patients experiencing ST-Elevation Myoc',
                'meta_keywords' => '',
            ]
        );
    }
}
