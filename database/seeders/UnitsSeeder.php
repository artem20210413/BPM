<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UnitsSeeder extends Seeder
{
    public function run(): void
    {

//        dd(Unit::find(22)->translate('ro')->title);

        $data = [
            [
                'slug' => 'шт.', 'priority' => 1,
                'en' => ['title' => 'шт.'], 'ro' => ['title' => 'buc.'],  // либо 'en' => [...]
            ],
            [
                'slug' => 'кг', 'priority' => 2,
                'en' => ['title' => 'кг'], 'ro' => ['title' => 'kg'],
            ],
            // ... добавь остальные
        ];

        foreach ($data as $row) {
            $unit = Unit::firstOrCreate(
                ['slug' => $row['slug']],
                ['priority' => $row['priority']]
            );

            foreach (['ru', 'ro'] as $locale) { // замени на нужные локали
                if (isset($row[$locale])) {
                    $unit->translateOrNew($locale)->title = $row[$locale]['title'] ?? null;
                    $unit->translateOrNew($locale)->content = $row[$locale]['content'] ?? null;
                }
            }
            $unit->priority = $row['priority'];
            $unit->save();
        }
    }
}
