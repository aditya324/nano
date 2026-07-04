<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

/**
 * Runs every *DocxProceduresSeeder and *DocxConditionsSeeder
 * generated from procedure-parser Word documents.
 */
class DocxContentSeeder extends Seeder
{
    public function run(): void
    {
        $seedersPath = database_path('seeders');

        $procedureAggregators = $this->discoverAggregators(
            $seedersPath,
            'DocxProceduresSeeder.php'
        );

        $conditionAggregators = $this->discoverAggregators(
            $seedersPath,
            'DocxConditionsSeeder.php'
        );

        foreach ($procedureAggregators as $class) {
            $this->command?->info("Procedures: {$class}");
            $this->call($class);
        }

        foreach ($conditionAggregators as $class) {
            $this->command?->info("Conditions: {$class}");
            $this->call($class);
        }
    }

    /**
     * @return list<class-string<Seeder>>
     */
    private function discoverAggregators(string $directory, string $suffix): array
    {
        $classes = [];

        foreach (glob($directory . DIRECTORY_SEPARATOR . '*' . $suffix) ?: [] as $file) {
            $base = basename($file, '.php');

            if ($base === 'DocxContentSeeder') {
                continue;
            }

            $classes[] = 'Database\\Seeders\\' . $base;
        }

        sort($classes, SORT_STRING);

        return $classes;
    }
}
