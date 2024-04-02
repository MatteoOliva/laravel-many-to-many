<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 150; $i++) {
        $project = new Project;
        $project->title = $faker->catchPhrase();
        $project->slug = Str::slug($project->title);
        $project->content = $faker->paragraph(2, true);
        $project->save();
    }

    }
}
