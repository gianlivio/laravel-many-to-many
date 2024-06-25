<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            'Laravel',
            'Vite',
            'Abbacchiatore',
            'Chitarra',
            'Motozzappadecappottabile'
        ];

        foreach ($technologies as $technology) {
            Technology::create(['name' => $technology]);
        }
    }
}
