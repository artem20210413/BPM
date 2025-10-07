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

//        dd(Unit::find(16)->translate('en')->title);
//        $units = [
//            ['slug' => 'шт.', 'en' => ['title' => 'My first post 8'], 'priority' => 1],
//            ['slug' => 'кг', 'en' => ['title' => 'My first post 7 '], 'priority' => 2],
//            ['slug' => 'п.м.', 'en' => ['title' => 'My first post 6 '], 'priority' => 4],
//            ['slug' => 'упаковка', 'en' => ['title' => 'My first post 5'], 'priority' => 5],
//            ['slug' => 'мешок', 'en' => ['title' => 'My first post 4'], 'priority' => 6],
//            ['slug' => 'тонна', 'en' => ['title' => 'My first post 3'], 'priority' => 7],
//            ['slug' => 'лист', 'en' => ['title' => 'My first post 22'], 'priority' => 8],
//            ['slug' => 'м²', 'en' => ['title' => 'My first post  2'], 'priority' => 9],
//            ['slug' => 'м³', 'en' => ['title' => 'My first post 1'], 'priority' => 10],
//        ];
//
//        foreach ($units as $unit) {
//            Unit::updateOrCreate(
//                ['slug' => $unit['slug']],
//                ['priority' => $unit['priority']]
//            );
//        }

        $data = [
            [
                'slug' => 'шт.', 'priority' => 1,
                'en' => ['title' => 'шт.'],  'ro' => ['title' => 'buc.'],  // либо 'en' => [...]
            ],
            [
                'slug' => 'кг',  'priority' => 2,
                'en' => ['title' => 'кг'],   'ro' => ['title' => 'kg'],
            ],
            // ... добавь остальные
        ];

        foreach ($data as $row) {
            $unit = Unit::firstOrCreate(
                ['slug' => $row['slug']],
                ['priority' => $row['priority']]
            );

            foreach (['ru','ro'] as $locale) { // замени на нужные локали
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
