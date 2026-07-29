<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FillMissingProcedureClinicalTabsSeeder extends Seeder
{
    public function run(): void
    {
        Procedure::withoutSyncingToSearch(function () {
            Procedure::query()->orderBy('id')->chunkById(100, function ($procedures) {
                foreach ($procedures as $procedure) {
                    $title = trim((string) $procedure->title);
                    $context = trim(strip_tags((string) ($procedure->what_is ?: $procedure->introduction)));
                    $changed = false;

                    if ($this->isEmptyList($procedure->symptoms)) {
                        $procedure->symptoms = $this->defaultSymptoms($title, $context);
                        $changed = true;
                    }

                    if ($this->isEmptyList($procedure->causes)) {
                        $procedure->causes = $this->defaultCauses($title, $context);
                        $changed = true;
                    }

                    if ($this->isEmptyText($procedure->treatment_overview) && empty($procedure->surgery_types)) {
                        $procedure->treatment_overview = $this->defaultTreatment($title, $context);
                        $changed = true;
                    }

                    if ($changed) {
                        $procedure->save();
                    }
                }
            });
        });
    }

    private function isEmptyList(mixed $value): bool
    {
        if ($value === null) {
            return true;
        }

        if (is_array($value)) {
            return count($value) === 0;
        }

        $text = trim(strip_tags((string) $value));

        return $text === '' || $text === '[]';
    }

    private function isEmptyText(mixed $value): bool
    {
        return trim(strip_tags((string) $value)) === '';
    }

    private function values(array $items): array
    {
        return array_map(fn (string $item) => ['value' => $item], $items);
    }

    private function shortName(string $title): string
    {
        $title = trim(preg_replace('/\s+/', ' ', $title) ?? $title);

        return $title !== '' ? $title : 'this procedure';
    }

    private function isDiagnostic(string $title): bool
    {
        return (bool) preg_match('/\b(scan|mri|ct|x-?ray|ultrasound|echo|angiography|lab|test|screening|biopsy|endoscopy|colonoscopy|imaging|monitor|assessment|evaluation)\b/i', $title);
    }

    private function isTherapy(string $title): bool
    {
        return (bool) preg_match('/\b(therapy|physiotherapy|rehab|rehabilitation|dialysis|chemotherapy|radiotherapy|counseling|counselling|management|support)\b/i', $title);
    }

    private function defaultSymptoms(string $title, string $context): array
    {
        $name = $this->shortName($title);

        if ($this->isDiagnostic($title)) {
            return $this->values([
                "Symptoms or clinical findings that require {$name} for clearer diagnosis",
                'Unresolved or unexplained complaints after initial clinical evaluation',
                'Need to confirm disease extent, severity, or organ involvement',
                'Monitoring of a known condition where imaging or testing guides next steps',
                'Pre-treatment planning where accurate assessment is required',
            ]);
        }

        if ($this->isTherapy($title)) {
            return $this->values([
                "Symptoms that persist and may benefit from {$name}",
                'Reduced day-to-day function, comfort, or quality of life',
                'Limited response to basic supportive measures alone',
                'Need for structured, specialist-guided care',
                'Follow-up needs after illness, injury, or prior treatment',
            ]);
        }

        return $this->values([
            "Persistent symptoms related to the condition treated by {$name}",
            'Pain, discomfort, or functional limitation affecting daily activities',
            'Symptoms that continue despite medicines or conservative care',
            'Progressive or recurrent complaints needing definitive specialist treatment',
            'Clinical findings on examination or investigations that indicate procedural care',
        ]);
    }

    private function defaultCauses(string $title, string $context): array
    {
        $name = $this->shortName($title);

        if ($this->isDiagnostic($title)) {
            return $this->values([
                'Clinical suspicion of disease based on history and examination',
                'Abnormal blood reports or previous investigation findings',
                'Need to differentiate between similar conditions',
                'Assessment before starting medical or surgical treatment',
                'Follow-up of previously diagnosed disease or treatment response',
            ]);
        }

        if ($this->isTherapy($title)) {
            return $this->values([
                'Underlying illness or injury requiring ongoing supportive care',
                'Incomplete recovery after acute disease or surgery',
                'Chronic symptoms needing structured rehabilitation or therapy',
                'Lifestyle, occupational, or medical factors contributing to persistence',
                "Specialist recommendation for {$name} as part of comprehensive care",
            ]);
        }

        return $this->values([
            "Disease or structural problem for which {$name} is commonly indicated",
            'Progression of a chronic condition that no longer responds adequately to medicines alone',
            'Acute complications such as infection, obstruction, bleeding, or severe inflammation',
            'Congenital issues, trauma, or degenerative changes affecting normal function',
            'Specialist assessment confirming that procedural treatment is the safest next step',
        ]);
    }

    private function defaultTreatment(string $title, string $context): string
    {
        $name = e($this->shortName($title));
        $snippet = Str::limit($context, 220);

        if ($this->isDiagnostic($title)) {
            $body = "<p>{$name} is used to evaluate symptoms, confirm a diagnosis, and guide the next phase of care. At Nano Hospitals, specialists review your history and prior reports before recommending the most appropriate testing pathway.</p>";
        } elseif ($this->isTherapy($title)) {
            $body = "<p>{$name} is planned as a structured care pathway to relieve symptoms, improve function, and support long-term recovery. Treatment is personalised after clinical assessment and may be combined with medicines, lifestyle guidance, and follow-up reviews.</p>";
        } else {
            $body = "<p>{$name} is considered when symptoms, investigation findings, or disease progression indicate that procedural treatment will offer safer or more lasting relief. At Nano Hospitals, specialists tailor the approach to the diagnosis, overall health, and recovery goals.</p>";
        }

        if ($snippet !== '') {
            $body .= '<p>' . e($snippet) . '</p>';
        }

        $body .= '<p>Your care team will explain preparation, expected benefits, possible risks, and recovery guidance before proceeding.</p>';

        return $body;
    }
}
