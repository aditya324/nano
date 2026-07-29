<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;

class CuratedProcedureTabsSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            'hip-replacement-surgery' => [
                'symptoms' => [
                    ['value' => 'Persistent hip pain that limits walking, climbing stairs, or daily activities'],
                    ['value' => 'Stiffness in the hip joint, especially after sitting or resting'],
                    ['value' => 'Pain that continues even while resting or at night'],
                    ['value' => 'Reduced range of motion and difficulty bending to put on shoes or socks'],
                    ['value' => 'Limping or an uneven walking pattern due to joint discomfort'],
                ],
                'causes' => [
                    ['value' => 'Osteoarthritis causing cartilage wear in the hip joint'],
                    ['value' => 'Rheumatoid arthritis or other inflammatory joint disease'],
                    ['value' => 'Avascular necrosis (loss of blood supply to the femoral head)'],
                    ['value' => 'Hip fracture or previous traumatic injury'],
                    ['value' => 'Congenital hip dysplasia or long-standing joint deformity'],
                ],
                'treatment_overview' => '<p>Hip replacement surgery is considered when pain, stiffness, and reduced mobility no longer improve with medicines, physiotherapy, activity modification, or walking aids. The damaged ball-and-socket surfaces of the hip are replaced with artificial components to restore smoother movement and reduce pain.</p><p>At Nano Hospitals, orthopedic specialists evaluate joint damage with clinical examination and imaging, then recommend total or partial hip replacement based on the severity of arthritis, fracture pattern, age, and overall health.</p>',
                'surgery_risks' => [
                    ['value' => 'Infection around the surgical site or prosthesis'],
                    ['value' => 'Blood clots in the legs or lungs'],
                    ['value' => 'Hip dislocation or implant loosening over time'],
                    ['value' => 'Leg length difference or temporary nerve irritation'],
                    ['value' => 'Bleeding, swelling, or delayed wound healing'],
                ],
                'post_op_care' => [
                    ['value' => 'Early walking with support under physiotherapy guidance'],
                    ['value' => 'Pain control and swelling management as advised by the care team'],
                    ['value' => 'Wound care and follow-up visits to monitor healing'],
                    ['value' => 'Hip precautions and safe movement techniques during early recovery'],
                    ['value' => 'Gradual return to daily activities with strengthening exercises'],
                ],
                'recovery_timeline' => [
                    ['stage' => 'Hospital stay (usually 2–4 days)', 'details' => 'Pain control, wound care, and first steps with a walker or support under physiotherapy supervision.'],
                    ['stage' => 'First 2–6 weeks', 'details' => 'Home recovery with walking aids, hip precautions, and progressive physiotherapy to rebuild strength and confidence.'],
                    ['stage' => '6–12 weeks', 'details' => 'Most patients regain greater independence for daily activities; driving and light work may resume based on surgeon advice.'],
                    ['stage' => '3–6 months', 'details' => 'Continued improvement in mobility and endurance, with many patients returning to an active lifestyle.'],
                ],
                'long_term_outlook' => 'Most patients experience lasting pain relief and improved mobility after hip replacement. With appropriate rehabilitation and routine follow-up, modern implants can support long-term function and quality of life.',
            ],
            'knee-replacement-surgery' => [
                'symptoms' => [
                    ['value' => 'Chronic knee pain that interferes with walking or climbing stairs'],
                    ['value' => 'Knee stiffness and swelling that does not settle with rest'],
                    ['value' => 'Difficulty straightening or bending the knee fully'],
                    ['value' => 'Pain at night or while resting'],
                    ['value' => 'Feeling that the knee may give way or lock'],
                ],
                'causes' => [
                    ['value' => 'Advanced osteoarthritis of the knee'],
                    ['value' => 'Rheumatoid arthritis or inflammatory arthritis'],
                    ['value' => 'Post-traumatic arthritis after injury or fracture'],
                    ['value' => 'Severe cartilage loss and joint deformity'],
                    ['value' => 'Long-standing wear-and-tear changes in the knee joint'],
                ],
                'treatment_overview' => '<p>Knee replacement is advised when severe arthritis or joint damage causes persistent pain and disability despite medicines, injections, physiotherapy, and lifestyle changes. Damaged joint surfaces are replaced with prosthetic components to restore alignment, reduce pain, and improve walking ability.</p>',
                'surgery_risks' => [
                    ['value' => 'Infection or delayed wound healing'],
                    ['value' => 'Blood clots'],
                    ['value' => 'Stiffness or limited knee bending'],
                    ['value' => 'Implant wear or loosening over time'],
                    ['value' => 'Nerve irritation or ongoing discomfort in some cases'],
                ],
                'post_op_care' => [
                    ['value' => 'Early mobilisation and supervised physiotherapy'],
                    ['value' => 'Pain and swelling control'],
                    ['value' => 'Wound care and scheduled follow-up reviews'],
                    ['value' => 'Gradual strengthening and gait training'],
                    ['value' => 'Return to routine activities as advised by the surgical team'],
                ],
                'recovery_timeline' => [
                    ['stage' => 'First few days', 'details' => 'Hospital recovery with pain management and assisted walking.'],
                    ['stage' => '2–6 weeks', 'details' => 'Home physiotherapy, reduced swelling, and improving knee bend.'],
                    ['stage' => '6–12 weeks', 'details' => 'Greater independence for daily walking and light activities.'],
                    ['stage' => '3–6 months', 'details' => 'Continued strength gains and return to most routine activities.'],
                ],
                'long_term_outlook' => 'Knee replacement commonly provides durable pain relief and better mobility. Outcomes are best with consistent physiotherapy and long-term joint care.',
            ],
            'cesarean-section' => [
                'symptoms' => [
                    ['value' => 'Labour that is not progressing safely'],
                    ['value' => 'Fetal distress or abnormal heart-rate patterns'],
                    ['value' => 'Heavy bleeding or placental complications'],
                    ['value' => 'Breech or other non-head-first baby position'],
                    ['value' => 'Prior C-section or uterine surgery requiring planned delivery'],
                ],
                'causes' => [
                    ['value' => 'Emergency concerns for mother or baby during labour'],
                    ['value' => 'Placenta previa or other placental problems'],
                    ['value' => 'Multiple pregnancy or large baby'],
                    ['value' => 'Obstructed labour or cephalopelvic disproportion'],
                    ['value' => 'Medical conditions where vaginal delivery is higher risk'],
                ],
                'treatment_overview' => '<p>A cesarean section is a surgical delivery performed when vaginal birth is unsafe or not possible. An incision is made in the abdomen and uterus so the baby can be delivered safely, followed by careful closure and postnatal monitoring for mother and newborn.</p>',
                'surgery_risks' => [
                    ['value' => 'Bleeding or infection'],
                    ['value' => 'Blood clots'],
                    ['value' => 'Injury to nearby organs in rare cases'],
                    ['value' => 'Delayed recovery compared with uncomplicated vaginal birth'],
                    ['value' => 'Possible implications for future pregnancies'],
                ],
                'post_op_care' => [
                    ['value' => 'Pain relief and wound care'],
                    ['value' => 'Early gentle mobilisation'],
                    ['value' => 'Breastfeeding and newborn support'],
                    ['value' => 'Monitoring for fever, bleeding, or wound issues'],
                    ['value' => 'Activity guidance during the healing period'],
                ],
                'long_term_outlook' => 'With specialist maternity care and follow-up, most mothers recover well after C-section and continue healthy postnatal progress with their baby.',
            ],
            'appendectomy' => [
                'symptoms' => [
                    ['value' => 'Pain that starts near the navel and shifts to the lower right abdomen'],
                    ['value' => 'Loss of appetite, nausea, or vomiting'],
                    ['value' => 'Low-grade fever'],
                    ['value' => 'Abdominal tenderness that worsens with movement'],
                    ['value' => 'Bloating or difficulty passing gas'],
                ],
                'causes' => [
                    ['value' => 'Blockage of the appendix opening'],
                    ['value' => 'Infection leading to inflammation of the appendix'],
                    ['value' => 'Hardened stool (fecalith) obstructing the appendix'],
                    ['value' => 'Swollen lymphoid tissue'],
                    ['value' => 'Rarely, tumors or other local pathology'],
                ],
                'treatment_overview' => '<p>Appendectomy is the standard treatment for appendicitis. The inflamed appendix is removed, usually by laparoscopic surgery when suitable, to prevent rupture and spread of infection. Prompt evaluation is important if classic symptoms appear.</p>',
                'surgery_risks' => [
                    ['value' => 'Infection or abscess'],
                    ['value' => 'Bleeding'],
                    ['value' => 'Injury to nearby bowel in rare cases'],
                    ['value' => 'Delayed return of bowel function'],
                    ['value' => 'Wound-related complications'],
                ],
                'post_op_care' => [
                    ['value' => 'Pain control and early walking'],
                    ['value' => 'Gradual restart of oral intake'],
                    ['value' => 'Wound care and hygiene'],
                    ['value' => 'Watch for fever or increasing abdominal pain'],
                    ['value' => 'Follow-up review before returning to strenuous activity'],
                ],
                'long_term_outlook' => 'Most patients recover fully after appendectomy and return to normal routines within a few weeks, especially after uncomplicated laparoscopic surgery.',
            ],
            'cholecystectomy' => [
                'symptoms' => [
                    ['value' => 'Severe pain in the upper right abdomen or under the ribs'],
                    ['value' => 'Pain after fatty meals'],
                    ['value' => 'Nausea or vomiting'],
                    ['value' => 'Bloating and indigestion'],
                    ['value' => 'Fever or jaundice if infection or bile-duct blockage occurs'],
                ],
                'causes' => [
                    ['value' => 'Gallstones blocking bile flow'],
                    ['value' => 'Inflammation of the gallbladder (cholecystitis)'],
                    ['value' => 'Biliary colic from intermittent stone obstruction'],
                    ['value' => 'Gallbladder polyps or dysfunction in selected cases'],
                    ['value' => 'Complications such as pancreatitis related to gallstones'],
                ],
                'treatment_overview' => '<p>Cholecystectomy removes the gallbladder, most often laparoscopically, to treat symptomatic gallstones and related inflammation. Removing the gallbladder prevents recurrent biliary pain and reduces the risk of serious stone-related complications.</p>',
                'surgery_risks' => [
                    ['value' => 'Bleeding or infection'],
                    ['value' => 'Bile leak'],
                    ['value' => 'Injury to the bile duct in rare cases'],
                    ['value' => 'Retained stones in the bile duct'],
                    ['value' => 'Temporary digestive changes after surgery'],
                ],
                'post_op_care' => [
                    ['value' => 'Early mobilisation and pain control'],
                    ['value' => 'Light diet progressing as tolerated'],
                    ['value' => 'Wound care for port sites'],
                    ['value' => 'Monitoring for fever, jaundice, or severe pain'],
                    ['value' => 'Gradual return to normal activity'],
                ],
                'long_term_outlook' => 'Most people live normally without a gallbladder. Digestion usually adapts well, and recurrent biliary colic from gallbladder stones is eliminated.',
            ],
            'hernia-repair-surgery' => [
                'symptoms' => [
                    ['value' => 'A bulge in the groin, abdomen, or prior surgical scar'],
                    ['value' => 'Discomfort or pain that worsens with coughing or lifting'],
                    ['value' => 'Heaviness or pressure at the hernia site'],
                    ['value' => 'Bulge that reduces when lying down in some cases'],
                    ['value' => 'Severe pain, redness, or vomiting if the hernia becomes trapped'],
                ],
                'causes' => [
                    ['value' => 'Weakness in the abdominal wall or groin muscles'],
                    ['value' => 'Increased abdominal pressure from heavy lifting or chronic cough'],
                    ['value' => 'Previous abdominal surgery (incisional hernia)'],
                    ['value' => 'Pregnancy-related abdominal wall strain'],
                    ['value' => 'Age-related tissue weakening'],
                ],
                'treatment_overview' => '<p>Hernia repair returns displaced tissue to its proper place and strengthens the weakened area, often with mesh reinforcement. Surgery may be open or laparoscopic depending on hernia type, size, and patient factors.</p>',
                'surgery_risks' => [
                    ['value' => 'Recurrence of the hernia'],
                    ['value' => 'Infection or seroma'],
                    ['value' => 'Chronic discomfort at the repair site'],
                    ['value' => 'Injury to nearby nerves or vessels in rare cases'],
                    ['value' => 'Mesh-related issues in a small number of patients'],
                ],
                'post_op_care' => [
                    ['value' => 'Activity restriction and avoid heavy lifting initially'],
                    ['value' => 'Pain control and wound care'],
                    ['value' => 'Gradual return to walking and daily routines'],
                    ['value' => 'Watch for increasing swelling, redness, or fever'],
                    ['value' => 'Follow-up to confirm sound healing of the repair'],
                ],
                'long_term_outlook' => 'Successful hernia repair usually relieves discomfort and reduces the risk of emergency complications such as incarceration or strangulation.',
            ],
            'breast-surgery' => [
                'symptoms' => [
                    ['value' => 'A breast lump or thickening'],
                    ['value' => 'Nipple discharge, inversion, or skin dimpling'],
                    ['value' => 'Persistent breast pain or swelling'],
                    ['value' => 'Changes in breast shape or skin texture'],
                    ['value' => 'Enlarged lymph nodes under the arm in some cases'],
                ],
                'causes' => [
                    ['value' => 'Breast cancer requiring surgical removal of disease'],
                    ['value' => 'Benign breast lumps that need excision'],
                    ['value' => 'High-risk lesions found on biopsy'],
                    ['value' => 'Infection or abscess needing drainage in selected cases'],
                    ['value' => 'Reconstructive needs after cancer surgery'],
                ],
                'treatment_overview' => '<p>Breast surgery ranges from lumpectomy to mastectomy and may include lymph-node evaluation. The plan depends on diagnosis, tumor size, and patient goals, and is often coordinated with oncology, radiology, and reconstructive care.</p>',
                'surgery_risks' => [
                    ['value' => 'Bleeding, infection, or seroma'],
                    ['value' => 'Changes in breast shape or sensation'],
                    ['value' => 'Lymphedema after lymph-node surgery'],
                    ['value' => 'Scarring or delayed wound healing'],
                    ['value' => 'Need for further treatment based on pathology'],
                ],
                'post_op_care' => [
                    ['value' => 'Wound and drain care as advised'],
                    ['value' => 'Arm mobility exercises when recommended'],
                    ['value' => 'Pain control and swelling support'],
                    ['value' => 'Pathology review and next-step oncology planning'],
                    ['value' => 'Follow-up for healing and rehabilitation'],
                ],
                'long_term_outlook' => 'Outcomes depend on the underlying diagnosis. Early detection and coordinated multidisciplinary care improve treatment success and quality of life.',
            ],
            'hysterectomy' => [
                'symptoms' => [
                    ['value' => 'Heavy or prolonged menstrual bleeding'],
                    ['value' => 'Severe pelvic pain or pressure'],
                    ['value' => 'Symptoms from fibroids, endometriosis, or adenomyosis'],
                    ['value' => 'Pelvic organ prolapse symptoms'],
                    ['value' => 'Cancer-related bleeding or abnormal findings'],
                ],
                'causes' => [
                    ['value' => 'Symptomatic uterine fibroids'],
                    ['value' => 'Endometriosis or adenomyosis not controlled medically'],
                    ['value' => 'Abnormal uterine bleeding unresponsive to other treatment'],
                    ['value' => 'Uterine, cervical, or ovarian cancer in selected cases'],
                    ['value' => 'Severe pelvic organ prolapse'],
                ],
                'treatment_overview' => '<p>Hysterectomy removes the uterus and, when required, related structures. Approach may be vaginal, laparoscopic, or open depending on the condition. It is considered when symptoms or disease are significant and other treatments are unsuitable or unsuccessful.</p>',
                'surgery_risks' => [
                    ['value' => 'Bleeding or infection'],
                    ['value' => 'Injury to bladder, bowel, or ureters in rare cases'],
                    ['value' => 'Blood clots'],
                    ['value' => 'Early menopause if ovaries are removed'],
                    ['value' => 'Changes in pelvic support or sexual comfort for some patients'],
                ],
                'post_op_care' => [
                    ['value' => 'Pain control and gradual mobilisation'],
                    ['value' => 'Pelvic rest as advised by the surgeon'],
                    ['value' => 'Wound care and monitoring for fever or heavy bleeding'],
                    ['value' => 'Hormone counselling if ovaries are removed'],
                    ['value' => 'Follow-up before returning to exercise or intercourse'],
                ],
                'long_term_outlook' => 'Most patients experience relief from the symptoms that led to surgery. Recovery time varies by surgical approach and overall health.',
            ],
            'prostate-surgery' => [
                'symptoms' => [
                    ['value' => 'Weak urine stream or difficulty starting urination'],
                    ['value' => 'Frequent urination, especially at night'],
                    ['value' => 'Incomplete bladder emptying'],
                    ['value' => 'Urinary urgency or intermittent stopping of flow'],
                    ['value' => 'Blood in urine or suspected prostate cancer findings'],
                ],
                'causes' => [
                    ['value' => 'Benign prostatic hyperplasia (BPH)'],
                    ['value' => 'Prostate cancer requiring surgical treatment'],
                    ['value' => 'Urinary obstruction from prostate enlargement'],
                    ['value' => 'Recurrent urinary retention or infections related to obstruction'],
                    ['value' => 'Failure of medicines to control prostate-related symptoms'],
                ],
                'treatment_overview' => '<p>Prostate surgery may relieve obstruction from BPH or treat prostate cancer. Options range from endoscopic procedures that open the urinary channel to radical prostatectomy when cancer surgery is indicated. Choice depends on diagnosis, prostate size, and patient priorities.</p>',
                'surgery_risks' => [
                    ['value' => 'Bleeding or infection'],
                    ['value' => 'Temporary or longer-term urinary incontinence'],
                    ['value' => 'Erectile dysfunction after some cancer surgeries'],
                    ['value' => 'Urinary stricture or need for catheter support'],
                    ['value' => 'Retrograde ejaculation after certain BPH procedures'],
                ],
                'post_op_care' => [
                    ['value' => 'Catheter care for the prescribed duration'],
                    ['value' => 'Hydration and monitoring of urine output'],
                    ['value' => 'Pelvic floor exercises when advised'],
                    ['value' => 'Activity restrictions during early healing'],
                    ['value' => 'Follow-up PSA or symptom review based on diagnosis'],
                ],
                'long_term_outlook' => 'Many men gain substantial urinary symptom relief after BPH surgery. Cancer surgery outcomes depend on stage and combined treatment planning.',
            ],
            'spinal-surgery' => [
                'treatment_overview' => '<p>Spinal surgery is considered for selected disc, stenosis, deformity, fracture, or nerve-compression problems when pain, weakness, or neurological symptoms persist despite conservative care. The goal is to relieve nerve pressure, stabilize the spine when needed, and restore safer mobility.</p>',
                'recovery_timeline' => [
                    ['stage' => 'Hospital phase', 'details' => 'Pain control, wound care, and early assisted mobilisation.'],
                    ['stage' => 'First 4–6 weeks', 'details' => 'Activity modification, physiotherapy, and gradual increase in walking.'],
                    ['stage' => '6–12 weeks', 'details' => 'Progressive strengthening and return to light routines as cleared by the surgeon.'],
                    ['stage' => '3+ months', 'details' => 'Continued rehabilitation toward durable pain relief and function.'],
                ],
            ],
            'kidney-surgery' => [
                'treatment_overview' => '<p>Kidney surgery treats stones, cysts, tumors, obstruction, trauma, or advanced disease requiring removal or reconstruction. Approaches may be endoscopic, laparoscopic, or open depending on the condition, with the aim of preserving kidney function whenever safely possible.</p>',
            ],
            'skin-surgery' => [
                'symptoms' => [
                    ['value' => 'A changing mole, growth, or non-healing skin lesion'],
                    ['value' => 'Bleeding, crusting, or ulceration of a skin spot'],
                    ['value' => 'Persistent cysts, lipomas, or painful skin lumps'],
                    ['value' => 'Suspected skin cancer on clinical examination'],
                    ['value' => 'Scarring or lesions needing excision for diagnosis or comfort'],
                ],
                'causes' => [
                    ['value' => 'Benign skin tumors or cysts'],
                    ['value' => 'Suspected or confirmed skin cancer'],
                    ['value' => 'Chronic non-healing lesions'],
                    ['value' => 'Infected or repeatedly inflamed skin swellings'],
                    ['value' => 'Diagnostic biopsy needs'],
                ],
                'treatment_overview' => '<p>Skin surgery removes or samples abnormal skin lesions for diagnosis and treatment. Procedures may include excision, biopsy, or reconstructive closure depending on lesion type, size, and location.</p>',
                'surgery_risks' => [
                    ['value' => 'Bleeding, infection, or delayed healing'],
                    ['value' => 'Scarring or pigment change'],
                    ['value' => 'Nerve irritation in sensitive areas'],
                    ['value' => 'Incomplete margins requiring further treatment'],
                    ['value' => 'Recurrence of some lesions'],
                ],
                'post_op_care' => [
                    ['value' => 'Wound dressing and hygiene guidance'],
                    ['value' => 'Suture care or removal as scheduled'],
                    ['value' => 'Sun protection of the healing area'],
                    ['value' => 'Monitoring for redness, discharge, or fever'],
                    ['value' => 'Pathology follow-up when tissue is sent for testing'],
                ],
                'long_term_outlook' => 'Most minor skin procedures heal well. Cancer-related surgeries are followed with pathology-guided care and surveillance as needed.',
            ],
            'colorectal-surgery' => [
                'symptoms' => [
                    ['value' => 'Rectal bleeding or black stools'],
                    ['value' => 'Persistent change in bowel habits'],
                    ['value' => 'Abdominal pain or bloating'],
                    ['value' => 'Unexplained weight loss or anemia'],
                    ['value' => 'Anal pain, swelling, or discharge in local anorectal disease'],
                ],
                'causes' => [
                    ['value' => 'Colorectal cancer or polyps'],
                    ['value' => 'Diverticular disease complications'],
                    ['value' => 'Inflammatory bowel disease complications'],
                    ['value' => 'Bowel obstruction or perforation'],
                    ['value' => 'Hemorrhoids, fistula, or other anorectal conditions'],
                ],
                'treatment_overview' => '<p>Colorectal surgery treats diseases of the colon, rectum, and anus. Depending on the diagnosis, surgery may remove diseased bowel, relieve obstruction, or correct anorectal problems, often as part of a wider gastroenterology and oncology plan.</p>',
                'surgery_risks' => [
                    ['value' => 'Bleeding or infection'],
                    ['value' => 'Anastomotic leak after bowel joining'],
                    ['value' => 'Temporary or permanent stoma in selected cases'],
                    ['value' => 'Ileus or delayed bowel recovery'],
                    ['value' => 'Blood clots or cardiorespiratory complications'],
                ],
                'post_op_care' => [
                    ['value' => 'Gradual diet advancement'],
                    ['value' => 'Pain control and early walking'],
                    ['value' => 'Wound and drain care'],
                    ['value' => 'Stoma education when applicable'],
                    ['value' => 'Follow-up for pathology and further treatment planning'],
                ],
                'long_term_outlook' => 'Recovery and long-term outlook depend on the underlying disease. Early diagnosis and coordinated specialty care improve functional and oncologic results.',
            ],
            'liver-surgery' => [
                'symptoms' => [
                    ['value' => 'Pain or discomfort in the right upper abdomen'],
                    ['value' => 'Jaundice or unexplained itching'],
                    ['value' => 'Abdominal fullness from a liver mass'],
                    ['value' => 'Loss of appetite or weight loss'],
                    ['value' => 'Abnormal imaging or blood tests suggesting a liver lesion'],
                ],
                'causes' => [
                    ['value' => 'Liver tumors, benign or malignant'],
                    ['value' => 'Metastatic disease involving the liver'],
                    ['value' => 'Selected cystic or parasitic liver lesions'],
                    ['value' => 'Trauma requiring operative control'],
                    ['value' => 'Biliary obstruction related to liver pathology'],
                ],
                'treatment_overview' => '<p>Liver surgery removes diseased portions of the liver or treats complex lesions while preserving as much healthy liver tissue as possible. Careful imaging, liver-function assessment, and specialist planning guide whether resection or another approach is safest.</p>',
                'surgery_risks' => [
                    ['value' => 'Bleeding'],
                    ['value' => 'Bile leak'],
                    ['value' => 'Infection or abscess'],
                    ['value' => 'Temporary liver dysfunction'],
                    ['value' => 'Blood clots or prolonged recovery in major resections'],
                ],
                'post_op_care' => [
                    ['value' => 'Close monitoring of liver function and drains'],
                    ['value' => 'Pain control and breathing exercises'],
                    ['value' => 'Gradual nutrition support'],
                    ['value' => 'Wound care and infection surveillance'],
                    ['value' => 'Scheduled imaging and specialist follow-up'],
                ],
                'long_term_outlook' => 'Outcomes vary with diagnosis and residual liver health. Many patients recover well after carefully selected liver resections with specialist follow-up.',
            ],
        ];

        foreach ($pages as $slug => $fields) {
            $procedure = Procedure::query()->where('slug', $slug)->first();
            if (!$procedure) {
                continue;
            }

            foreach ($fields as $column => $value) {
                $current = $procedure->{$column};
                $empty = blank($current)
                    || $current === []
                    || (is_string($current) && trim(strip_tags($current)) === '');

                if ($empty) {
                    $procedure->{$column} = $value;
                }
            }

            $procedure->save();
        }
    }
}
