<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();
            $newProject->name = $faker->unique()->sentence(2);
            $newProject->description = $faker->text(500);
            $newProject->slug = Str::slug($newProject->name, '_');
           
            $newProject->type_id = $faker->numberBetween(1, 3);
            $newProject->save();
        }
    }
}
