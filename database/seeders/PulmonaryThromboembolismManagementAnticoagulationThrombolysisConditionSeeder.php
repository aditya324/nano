<?php

namespace Database\Seeders;

use App\Models\Condition;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PulmonaryThromboembolismManagementAnticoagulationThrombolysisConditionSeeder extends Seeder
{
    public function run(): void
    {
        Condition::updateOrCreate(
            ['slug' => Str::slug('Pulmonary Thromboembolism Management (Anticoagulation / Thrombolysis)')],
            [
                'name' => 'Pulmonary Thromboembolism Management (Anticoagulation / Thrombolysis)',
                'slug' => Str::slug('Pulmonary Thromboembolism Management (Anticoagulation / Thrombolysis)'),
                'h1' => 'Pulmonary Thromboembolism Management (Anticoagulation / Thrombolysis)',
                'icon' => null,
                'cta_text' => null,
                'cta_link' => null,
                'about' => 'Pulmonary thromboembolism management involves emergency and specialized treatment procedures used to manage blood clots that block the pulmonary arteries in the lungs. Pulmonary embolism can severely affect blood circulation, oxygen exchange, and heart function, potentially becoming life-threatening if not treated promptly. Anticoagulation and thrombolysis are key treatment approaches used to prevent clot progression, restore blood flow, and reduce complications associated with pulmonary embolism.',
                'about_more' => '',
                'overview' => 'Anticoagulation therapy involves the use of blood-thinning medications to prevent existing clots from enlarging and reduce the risk of new clot formation. Thrombolysis is an advanced emergency treatment that uses clot-dissolving medications to rapidly break down large or life-threatening pulmonary emboli affecting circulation and oxygenation. These procedures are commonly performed in emergency departments, intensive care units, cardiac care units, and critical care settings under continuous cardiovascular and respiratory monitoring. Additional supportive care may be required depending on the severity of the embolism and overall patient condition.',
                'symptoms' => [
            ['value' => 'Sudden shortness of breath or breathing difficulty'],
            ['value' => 'Chest pain, especially during deep breathing'],
            ['value' => 'Rapid heartbeat or palpitations'],
            ['value' => 'Cough, sometimes with blood-stained sputum'],
            ['value' => 'Dizziness, fainting, or signs of circulatory instability in severe cases'],
        ],
                'causes' => [],
                'risks' => [
            ['value' => 'Severe respiratory failure or low oxygen levels'],
            ['value' => 'Circulatory collapse or shock due to blocked pulmonary circulation'],
            ['value' => 'Bleeding complications associated with anticoagulation or thrombolytic therapy'],
            ['value' => 'Recurrent blood clot formation or chronic pulmonary hypertension'],
            ['value' => 'Increased risk of heart strain or right-sided heart failure'],
        ],
                'diagnosis' => [],
                'treatment' => [
            ['value' => 'Pulmonary thromboembolism management focuses on restoring blood flow, stabilizing respiratory and cardiovascular function, preventing recurrent clot formation, and reducing long-term complications. Treatment may include anticoagulant medications, thrombolytic therapy, oxygen support, ventilatory assistance, catheter-based clot removal procedures, inferior vena cava (IVC) filters, fluid management, and intensive monitoring. Patients may also require compression therapy, mobility rehabilitation, lifestyle modification, smoking cessation, and long-term vascular or cardiopulmonary follow-up to improve circulation and reduce future thromboembolic risk.'],
            ['value' => 'Continuous monitoring of oxygen levels, heart function, and circulation'],
            ['value' => 'Regular blood tests to monitor anticoagulation therapy effectiveness'],
            ['value' => 'Observation for bleeding or clot-related complications'],
            ['value' => 'Gradual physical rehabilitation and mobility support'],
            ['value' => 'Long-term follow-up with pulmonology, cardiology, or vascular specialists'],
        ],
                'recovery' => 'The long-term outlook following pulmonary thromboembolism management depends on the size and severity of the clot, speed of treatment, underlying medical conditions, and long-term anticoagulation management. Early diagnosis, medication adherence, rehabilitation, healthy lifestyle habits, regular exercise, smoking cessation, and continuous medical follow-up significantly help improve lung and heart function, reduce recurrence risk, prevent complications, and enhance overall quality of life. ________________ 12. Interventional Pulmonology Procedures (Stent, Balloon Dilatation) Interventional Pulmonology Procedures (Stent, Balloon Dilatation) Procedures',
                'sort_order' => 12,
                'is_active' => true,
                'meta_title' => 'Pulmonary Thromboembolism Management (Anticoagulation / Thrombolysis)',
                'meta_description' => 'Pulmonary thromboembolism management involves emergency and specialized treatment procedures used to manage blood clots that block the pulmonary arteries in the',
                'meta_keywords' => '',
            ]
        );
    }
}
