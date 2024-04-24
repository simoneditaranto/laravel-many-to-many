<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// importo Faker
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
        for($i = 0; $i < 5; $i++) {

            $newProject = new Project();

            $newProject->name = $faker->word();
            $newProject->description = $faker->paragraph();
            $newProject->thumb = $faker->imageUrl(400, 200, 'animals', true);
            $newProject->technologies = $faker->words(4, true);
            $newProject->link_repo = $faker->url();

            $newProject->save();

        }

    }
}
