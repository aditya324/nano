<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TMJArthroscopyInstrumentsSeeder extends Seeder
{
    public function run(): void
    {
        $procedure = Procedure::updateOrCreate(
            ['slug' => Str::slug('TMJ Arthroscopy Instruments')],
            [
                'title' => 'TMJ Arthroscopy Instruments',
                'slug' => Str::slug('TMJ Arthroscopy Instruments'),
                'introduction' => 'TMJ arthroscopy instruments are specialized surgical tools and visualization systems used in minimally invasive temporomandibular joint (TMJ) procedures to diagnose and treat joint disorders affecting jaw movement, chewing function, and facial comfort. These instruments allow surgeons to perform precise intra-articular procedures with minimal tissue disruption and faster patient recovery.',
                'what_is' => 'TMJ arthroscopy involves the use of small endoscopic cameras and fine surgical instruments inserted into the temporomandibular joint through tiny incisions. These procedures help evaluate and manage conditions such as internal derangement, joint inflammation, adhesions, arthritis, disc displacement, and restricted jaw movement. Advanced arthroscopic instruments improve visualization, surgical precision, joint lavage, tissue manipulation, and minimally invasive treatment outcomes while reducing postoperative pain and scarring. TMJ arthroscopes with high-definition camera systems Arthroscopic cannulas, trocars, and access ports Joint irrigation and lavage systems Micro forceps, probes, scissors, and tissue manipulation instruments Endoscopic visualization monitors and light source systems',
                'symptoms' => [],
                'causes' => [
            ['value' => 'Diagnosis and treatment of temporomandibular joint disorders'],
            ['value' => 'Management of TMJ inflammation and adhesions'],
            ['value' => 'Arthroscopic joint lavage and irrigation procedures'],
            ['value' => 'Treatment of disc displacement and internal derangement'],
            ['value' => 'Minimally invasive management of jaw pain and restricted movement'],
        ],
                'condition_risks' => [
            ['value' => 'Risk of bleeding, infection, or joint swelling after procedures'],
            ['value' => 'Technical difficulty due to the small size of the TMJ space'],
            ['value' => 'Temporary facial nerve irritation or numbness in rare cases'],
            ['value' => 'Equipment maintenance and calibration requirements'],
            ['value' => 'Need for specialized surgical expertise and training'],
        ],
                'preventions' => [],
                'diagnosis_tests' => [],
                'treatment_overview' => 'TMJ arthroscopy instruments support minimally invasive treatment of TMJ disorders, internal derangement, inflammatory joint conditions, joint adhesions, limited mouth opening, jaw pain, and early degenerative joint disease. These systems improve diagnostic accuracy, surgical precision, patient comfort, and postoperative recovery outcomes.',
                'surgery_types' => [],
                'recovery_timeline' => [],
                'post_op_care' => [
            ['value' => 'Monitoring jaw movement and joint function after surgery'],
            ['value' => 'Pain management and inflammation control measures'],
            ['value' => 'Physiotherapy and jaw rehabilitation exercises'],
            ['value' => 'Sterilization and maintenance of arthroscopic instruments'],
            ['value' => 'Regular follow-up evaluation for long-term joint function assessment'],
        ],
                'surgery_risks' => [
            ['value' => 'Risk of bleeding, infection, or joint swelling after procedures'],
            ['value' => 'Technical difficulty due to the small size of the TMJ space'],
            ['value' => 'Temporary facial nerve irritation or numbness in rare cases'],
            ['value' => 'Equipment maintenance and calibration requirements'],
            ['value' => 'Need for specialized surgical expertise and training'],
        ],
                'long_term_outlook' => 'The long-term outlook with advanced TMJ arthroscopy instruments is highly positive because minimally invasive arthroscopic techniques significantly improve surgical precision, reduce postoperative discomfort, shorten recovery time, and enhance long-term jaw function. Continuous advancements in endoscopic visualization, micro-instrumentation, and minimally invasive technology continue to improve patient outcomes and TMJ surgical care.',
                'conclusion' => '',
                'seo_title' => 'TMJ Arthroscopy Instruments',
                'seo_description' => 'TMJ arthroscopy instruments are specialized surgical tools and visualization systems used in minimally invasive temporomandibular joint (TMJ) procedures to diagnose and treat joint disorders affecting jaw movement, chewing function, and facial comfort. These instruments allow surgeons to perform precise intra-articular procedures with minimal tissue disruption and faster patient recovery.',
                'seo_keywords' => '',
                'is_active' => true,
            ]
        );
    }
}
