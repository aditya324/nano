<?php

namespace Database\Seeders;

use App\Models\Speciality;
use Illuminate\Database\Seeder;

class SpecialityInternalLinksSeeder extends Seeder
{
    public function run(): void
    {
        $speciality = Speciality::where('slug', 'bone-joint-care')->first();

        if (! $speciality) {
            $this->command?->warn('Speciality not found: bone-joint-care');

            return;
        }

        $updates = [
            'about_more' => '<p>Bone and joint problems often start with mild symptoms like knee stiffness, back pain, or reduced flexibility. Without timely treatment, these conditions can worsen and affect your ability to walk, work, and carry out everyday activities. At Nano Hospitals Bangalore, our orthopedic specialists are trained to identify the root cause and provide the right treatment at the right time — whether it is non-surgical management, physiotherapy, or advanced <a href="/procedures/knee-replacement-surgery" class="text-red-600 hover:underline font-medium">knee replacement</a> and <a href="/procedures/hip-replacement-surgery" class="text-red-600 hover:underline font-medium">hip replacement</a> surgery.</p><p>Our approach is patient-centred and personalised. Every treatment plan is built around the individual&#039;s age, activity level, severity of the condition, and overall health. From first consultation to post-surgery rehabilitation, our team ensures you receive consistent, compassionate, and clinically sound care.</p>',

            'treatments_content' => '<h3><strong>Non-Surgical Treatments</strong></h3><ul><li><p>Medical management of joint pain and inflammation</p></li><li><p>Pain relief protocols and mobility support</p></li><li><p>Physiotherapy and rehabilitation programs</p></li><li><p>Posture correction and ergonomic guidance</p></li><li><p>Bone health evaluation and <a href="/conditions/osteoporosis" class="text-red-600 hover:underline font-medium">Osteoporosis</a> management</p></li></ul><h3><strong>Minimally Invasive Procedures</strong></h3><ul><li><p>Arthroscopy for knee, shoulder, and other joints</p></li><li><p>Image-guided joint injections</p></li><li><p>Sports injury repair with minimal tissue damage</p></li></ul><h3><strong>Surgical Treatments</strong></h3><ul><li><p>Fracture fixation and trauma surgery</p></li><li><p><a href="/procedures/knee-replacement-surgery" class="text-red-600 hover:underline font-medium">Knee replacement</a>, <a href="/procedures/hip-replacement-surgery" class="text-red-600 hover:underline font-medium">hip replacement</a>, and shoulder joint replacement surgeries</p></li><li><p>Spine surgeries for nerve compression or instability</p></li><li><p>Corrective surgeries for deformities</p></li></ul>',

            'conditions_content' => '<ul><li><p><a href="/conditions/osteoarthritis" class="text-red-600 hover:underline font-medium">Osteoarthritis</a> and degenerative joint disease</p></li><li><p>Degenerative disc disease and spondylosis</p></li><li><p>Fractures, dislocations, and trauma injuries</p></li><li><p>Sports injuries and ligament tears</p></li><li><p>Chronic back pain, <a href="/conditions/back-and-neck-pain" class="text-red-600 hover:underline font-medium">sciatica</a>, and <a href="/conditions/back-and-neck-pain" class="text-red-600 hover:underline font-medium">slipped disc</a></p></li><li><p><a href="/conditions/osteoporosis" class="text-red-600 hover:underline font-medium">Osteoporosis</a> and inflammatory joint conditions</p></li></ul>',

            'risks_content' => '<ul><li><p>Progressive degeneration if untreated</p></li><li><p>Reduced mobility and chronic pain</p></li><li><p>Risk of fractures in <a href="/conditions/osteoporosis" class="text-red-600 hover:underline font-medium">Osteoporosis</a></p></li><li><p>Need for long-term rehabilitation</p></li></ul>',

            'subspecialties_content' => '<ul><li><p><a href="/procedures/knee-replacement-surgery" class="text-red-600 hover:underline font-medium">Knee replacement</a> and <a href="/procedures/hip-replacement-surgery" class="text-red-600 hover:underline font-medium">hip replacement</a> surgery</p></li><li><p>Spine Care and Back Pain Management</p></li><li><p>Sports Medicine and Arthroscopy</p></li><li><p>Orthopaedic Trauma Care</p></li><li><p>Geriatric Orthopaedics</p></li></ul>',
        ];

        Speciality::withoutSyncingToSearch(function () use ($speciality, $updates) {
            $speciality->update($updates);
        });

        $this->command?->info('Updated internal links: bone-joint-care');
    }
}
