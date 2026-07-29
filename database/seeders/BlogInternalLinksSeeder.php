<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogInternalLinksSeeder extends Seeder
{
    public function run(): void
    {
        $configs = $this->configs();

        foreach ($configs as $slug => $config) {
            $blog = Blog::where('slug', $slug)->first();

            if (! $blog) {
                $this->command?->warn("Blog not found: {$slug}");

                continue;
            }

            $blocks = $blog->content_blocks ?? [];
            $blocks = $this->stripRelatedServicesBlock($blocks);
            $blocks = $this->applyLinkReplacements($blocks, $config['links']);
            $blocks[] = $this->relatedServicesBlock($config['related']);

            $blog->update(['content_blocks' => $blocks]);

            $this->command?->info("Updated internal links: {$slug}");
        }
    }

    /**
     * @return array<string, array{links: array<string, string>, related: array{links: array<int, array{label: string, url: string}>, appointment_url?: string}}>
     */
    private function configs(): array
    {
        return [
            'complete-knee-replacement-in-bangalore-what-to-expect-before-during-and-after-surgery' => [
                'links' => [
                    'total knee replacement surgery' => '/procedures/knee-replacement-surgery',
                    'knee replacement surgery' => '/procedures/knee-replacement-surgery',
                    'osteoarthritis' => '/conditions/osteoarthritis',
                    'Dr. Mohan' => '/doctors/dr-mohan-m-r',
                    'advanced knee care' => '/specialities/bone-joint-care',
                    'orthopaedic specialist' => '/specialities/bone-joint-care',
                ],
                'related' => [
                    'links' => [
                        ['label' => 'Knee Replacement Surgery', 'url' => '/procedures/knee-replacement-surgery'],
                        ['label' => 'Bone & Joint Care', 'url' => '/specialities/bone-joint-care'],
                        ['label' => 'Osteoarthritis Treatment', 'url' => '/conditions/osteoarthritis'],
                        ['label' => 'Dr. Mohan M R — Orthopaedic Surgeon', 'url' => '/doctors/dr-mohan-m-r'],
                    ],
                ],
            ],
            'bph-after-50-early-signs-men-should-never-ignore-how-holep-surgery-helps' => [
                'links' => [
                    'urological care' => '/specialities/urology',
                    'Holmium Laser Enucleation of the Prostate (HOLEP)' => '/procedures/prostate-surgery',
                    'HOLEP surgery' => '/procedures/prostate-surgery',
                    'urologist' => '/specialities/urology',
                    'enlarged prostate' => '/procedures/prostate-surgery',
                ],
                'related' => [
                    'links' => [
                        ['label' => 'Prostate Surgery (HOLEP)', 'url' => '/procedures/prostate-surgery'],
                        ['label' => 'Urology Care', 'url' => '/specialities/urology'],
                    ],
                ],
            ],
            'all-you-need-to-know-about-stages-signs-treatment-for-chronic-kidney-disease-ckd' => [
                'links' => [
                    'Chronic Kidney Disease (CKD)' => '/specialities/nephrology',
                    'Chronic Kidney Disease' => '/specialities/nephrology',
                    'kidney disease' => '/specialities/nephrology',
                    'Dialysis' => '/health-facilities/dialysis',
                    'nephrologist' => '/specialities/nephrology',
                ],
                'related' => [
                    'links' => [
                        ['label' => 'Nephrology & Kidney Care', 'url' => '/specialities/nephrology'],
                        ['label' => 'Dialysis Centre', 'url' => '/health-facilities/dialysis'],
                    ],
                ],
            ],
            'silent-killer-early-urinary-symptoms-you-should-never-ignore' => [
                'links' => [
                    'urinary system' => '/specialities/urology',
                    'urinary tract' => '/specialities/urology',
                    'urologist' => '/specialities/urology',
                    'urological' => '/specialities/urology',
                    'prostate' => '/procedures/prostate-surgery',
                    'uncontrollably' => '/procedures/prostate-surgery',
                ],
                'related' => [
                    'links' => [
                        ['label' => 'Urology Care', 'url' => '/specialities/urology'],
                        ['label' => 'Prostate Surgery', 'url' => '/procedures/prostate-surgery'],
                        ['label' => 'uncontrollably', 'url' => '/procedures/prostate-surgery'],
                    ],
                ],
            ],
            '8-early-diabetes-symptoms-in-young-adults' => [
                'links' => [
                    'Diabetes in young adults' => '/conditions/diabetes',
                    'Diabetes' => '/conditions/diabetes',
                    'diabetes' => '/conditions/diabetes',
                    'blood sugar' => '/specialities/diabetology-endocrinology',
                    'insulin resistance' => '/specialities/diabetology-endocrinology',
                ],
                'related' => [
                    'links' => [
                        ['label' => 'Diabetes Care', 'url' => '/conditions/diabetes'],
                        ['label' => 'Diabetology & Endocrinology', 'url' => '/specialities/diabetology-endocrinology'],
                    ],
                ],
            ],
        ];
    }

    /**
     * @param  array<int, array<string, mixed>>  $blocks
     * @param  array<string, string>  $links
     * @return array<int, array<string, mixed>>
     */
    private function applyLinkReplacements(array $blocks, array $links): array
    {
        uksort($links, fn (string $a, string $b) => strlen($b) <=> strlen($a));

        foreach ($blocks as &$block) {
            if (($block['type'] ?? '') === 'paragraph' && isset($block['data']['text'])) {
                $block['data']['text'] = $this->linkify(
                    $this->stripInternalLinks($block['data']['text']),
                    $links
                );
            }

            if (($block['type'] ?? '') === 'list' && isset($block['data']['items'])) {
                foreach ($block['data']['items'] as &$item) {
                    if (isset($item['text'])) {
                        $item['text'] = $this->linkify(
                            $this->stripInternalLinks($item['text']),
                            $links
                        );
                    }
                }
                unset($item);
            }
        }
        unset($block);

        return $blocks;
    }

    private function stripInternalLinks(string $text): string
    {
        $previous = null;

        while ($previous !== $text) {
            $previous = $text;
            $text = preg_replace(
                '/<a href="\/[^"]*" class="text-red-600 hover:underline font-medium">(.*?)<\/a>/s',
                '$1',
                $text
            ) ?? $text;
        }

        return $text;
    }

    /**
     * @param  array<string, string>  $links
     */
    private function linkify(string $text, array $links): string
    {
        foreach ($links as $phrase => $url) {
            if (! str_contains($text, $phrase) || str_contains($text, '<a ')) {
                continue;
            }

            $anchor = '<a href="' . $url . '" class="text-red-600 hover:underline font-medium">' . $phrase . '</a>';
            $text = Str::replaceFirst($phrase, $anchor, $text);
            break;
        }

        return $text;
    }

    /**
     * @param  array<int, array<string, mixed>>  $blocks
     * @return array<int, array<string, mixed>>
     */
    private function stripRelatedServicesBlock(array $blocks): array
    {
        return array_values(array_filter(
            $blocks,
            fn (array $block) => ($block['type'] ?? '') !== 'related_services'
        ));
    }

    /**
     * @param  array{links: array<int, array{label: string, url: string}>, appointment_url?: string}  $config
     * @return array<string, mixed>
     */
    private function relatedServicesBlock(array $config): array
    {
        return [
            'type' => 'related_services',
            'data' => [
                'title' => 'Related Services',
                'links' => $config['links'],
                'appointment_url' => $config['appointment_url'] ?? '/book-appointment/doctors',
            ],
        ];
    }
}
