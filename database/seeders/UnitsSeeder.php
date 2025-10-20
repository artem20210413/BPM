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
                'ru' => ['title' => 'шт.', 'content' => null],
                'ro' => ['title' => 'buc.', 'content' => null],
                'en' => ['title' => 'pcs', 'content' => null],
            ],
            [
                'slug' => 'п.м.', 'priority' => 2,
                'ru' => ['title' => 'п.м.', 'content' => null],
                'ro' => ['title' => 'm.l.', 'content' => null],
                'en' => ['title' => 'l.m.', 'content' => null],
            ],
            [
                'slug' => 'кг', 'priority' => 3,
                'ru' => ['title' => 'кг', 'content' => null],
                'ro' => ['title' => 'kg', 'content' => null],
                'en' => ['title' => 'kg', 'content' => null],
            ],
            [
                'slug' => 'т', 'priority' => 4,
                'ru' => ['title' => 'тонна', 'content' => null],
                'ro' => ['title' => 'tonă', 'content' => null],
                'en' => ['title' => 'ton', 'content' => null],
            ],
            [
                'slug' => 'уп.', 'priority' => 5,
                'ru' => ['title' => 'упаковка', 'content' => null],
                'ro' => ['title' => 'pachet', 'content' => null],
                'en' => ['title' => 'pack', 'content' => null],
            ],
            [
                'slug' => 'мешок', 'priority' => 6,
                'ru' => ['title' => 'мешок', 'content' => null],
                'ro' => ['title' => 'sac', 'content' => null],
                'en' => ['title' => 'bag', 'content' => null],
            ],
            [
                'slug' => 'компл.', 'priority' => 7,
                'ru' => ['title' => 'комплект', 'content' => null],
                'ro' => ['title' => 'set', 'content' => null],
                'en' => ['title' => 'set', 'content' => null],
            ],
            [
                'slug' => 'лист', 'priority' => 8,
                'ru' => ['title' => 'лист', 'content' => null],
                'ro' => ['title' => 'foaie', 'content' => null],
                'en' => ['title' => 'sheet', 'content' => null],
            ],
            [
                'slug' => 'м²', 'priority' => 9,
                'ru' => ['title' => 'м²', 'content' => null],
                'ro' => ['title' => 'm²', 'content' => null],
                'en' => ['title' => 'm²', 'content' => null],
            ],
            [
                'slug' => 'м³', 'priority' => 10,
                'ru' => ['title' => 'м³', 'content' => null],
                'ro' => ['title' => 'm³', 'content' => null],
                'en' => ['title' => 'm³', 'content' => null],
            ],
            // ... добавь остальные
        ];

        foreach ($data as $row) {
            $unit = Unit::firstOrCreate(
                ['slug' => $row['slug']],
                ['priority' => $row['priority']]
            );

            foreach (['ru', 'ro', 'en'] as $locale) { // замени на нужные локали
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
