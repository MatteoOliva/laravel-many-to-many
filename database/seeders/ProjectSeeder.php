<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Type;
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

        $types_id = Type::all()->pluck('id');

        for($i = 0; $i < 150; $i++) {
        $project = new Project;
        $project->type_id = $faker->randomElement($types_id);
        $project->title = $faker->catchPhrase();
        $project->slug = Str::slug($project->title);
        $project->image = '';
        $project->content = $faker->paragraph(2, true);
        $project->save();
    }

    }
}
