<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
            $types = [
                ['name' => 'Musica', 'description' => 'Progetti relativi alla musica'],
                ['name' => 'Agricoltura', 'description' => 'Progetti relativi all\'agricoltura'],
                ['name' => 'Informatica', 'description' => 'Progetti relativi all\'informatica'],
            ];

            foreach ($types as $type) {
                DB::table('types')->updateOrInsert(
                    ['name' => $type['name']],
                    ['description' => $type['description']]
                );
            }
        
    }
}
