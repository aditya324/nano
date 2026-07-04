<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PulmonaryThromboembolismManagementAnticoagulationThrombolysisSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('Pulmonary Thromboembolism Management (Anticoagulation / Thrombolysis)')],
            [
                'title' => 'Pulmonary Thromboembolism Management (Anticoagulation / Thrombolysis)',
                'slug' => Str::slug('Pulmonary Thromboembolism Management (Anticoagulation / Thrombolysis)'),
                'introduction' => 'Pulmonary thromboembolism management involves emergency and specialized treatment procedures used to manage blood clots that block the pulmonary arteries in the lungs. Pulmonary embolism can severely affect blood circulation, oxygen exchange, and heart function, potentially becoming life-threatening if not treated promptly. Anticoagulation and thrombolysis are key treatment approaches used to prevent clot progression, restore blood flow, and reduce complications associated with pulmonary embolism.',
                'what_is' => 'Anticoagulation therapy involves the use of blood-thinning medications to prevent existing clots from enlarging and reduce the risk of new clot formation. Thrombolysis is an advanced emergency treatment that uses clot-dissolving medications to rapidly break down large or life-threatening pulmonary emboli affecting circulation and oxygenation. These procedures are commonly performed in emergency departments, intensive care units, cardiac care units, and critical care settings under continuous cardiovascular and respiratory monitoring. Additional supportive care may be required depending on the severity of the embolism and overall patient condition.',
                'symptoms' => [
            ['value' => 'Sudden shortness of breath or breathing difficulty'],
            ['value' => 'Chest pain, especially during deep breathing'],
            ['value' => 'Rapid heartbeat or palpitations'],
            ['value' => 'Cough, sometimes with blood-stained sputum'],
            ['value' => 'Dizziness, fainting, or signs of circulatory instability in severe cases'],
        ],
                'causes' => [],
                'condition_risks' => [
            ['value' => 'Severe respiratory failure or low oxygen levels'],
            ['value' => 'Circulatory collapse or shock due to blocked pulmonary circulation'],
            ['value' => 'Bleeding complications associated with anticoagulation or thrombolytic therapy'],
            ['value' => 'Recurrent blood clot formation or chronic pulmonary hypertension'],
            ['value' => 'Increased risk of heart strain or right-sided heart failure'],
            ['value' => 'Treatment Options'],
            ['value' => 'Pulmonary thromboembolism management focuses on restoring blood flow, stabilizing respiratory and cardiovascular function, preventing recurrent clot formation, and reducing long-term complications. Treatment may include anticoagulant medications, thrombolytic therapy, oxygen support, ventilatory assistance, catheter-based clot removal procedures, inferior vena cava (IVC) filters, fluid management, and intensive monitoring. Patients may also require compression therapy, mobility rehabilitation, lifestyle modification, smoking cessation, and long-term vascular or cardiopulmonary follow-up to improve circulation and reduce future thromboembolic risk.'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => '',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Continuous monitoring of oxygen levels, heart function, and circulation'],
            ['value' => 'Regular blood tests to monitor anticoagulation therapy effectiveness'],
            ['value' => 'Observation for bleeding or clot-related complications'],
            ['value' => 'Gradual physical rehabilitation and mobility support'],
            ['value' => 'Long-term follow-up with pulmonology, cardiology, or vascular specialists'],
        ],
                'surgery_risks' => [
            ['value' => 'Severe respiratory failure or low oxygen levels'],
            ['value' => 'Circulatory collapse or shock due to blocked pulmonary circulation'],
            ['value' => 'Bleeding complications associated with anticoagulation or thrombolytic therapy'],
            ['value' => 'Recurrent blood clot formation or chronic pulmonary hypertension'],
            ['value' => 'Increased risk of heart strain or right-sided heart failure'],
            ['value' => 'Treatment Options'],
            ['value' => 'Pulmonary thromboembolism management focuses on restoring blood flow, stabilizing respiratory and cardiovascular function, preventing recurrent clot formation, and reducing long-term complications. Treatment may include anticoagulant medications, thrombolytic therapy, oxygen support, ventilatory assistance, catheter-based clot removal procedures, inferior vena cava (IVC) filters, fluid management, and intensive monitoring. Patients may also require compression therapy, mobility rehabilitation, lifestyle modification, smoking cessation, and long-term vascular or cardiopulmonary follow-up to improve circulation and reduce future thromboembolic risk.'],
        ],
                'long_term_outlook' => 'The long-term outlook following pulmonary thromboembolism management depends on the size and severity of the clot, speed of treatment, underlying medical conditions, and long-term anticoagulation management. Early diagnosis, medication adherence, rehabilitation, healthy lifestyle habits, regular exercise, smoking cessation, and continuous medical follow-up significantly help improve lung and heart function, reduce recurrence risk, prevent complications, and enhance overall quality of life.',
                'conclusion' => '',
                'seo_title' => 'Pulmonary Thromboembolism Management (Anticoagulation / Thrombolysis)',
                'seo_description' => 'Pulmonary thromboembolism management involves emergency and specialized treatment procedures used to manage blood clots that block the pulmonary arteries in the lungs. Pulmonary embolism can severely affect blood circulation, oxygen exchange, and heart function, potentially becoming life-threatening if not treated promptly. Anticoagulation and thrombolysis are key treatment approaches used to prevent clot progression, restore blood flow, and reduce complications associated with pulmonary embolism.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
