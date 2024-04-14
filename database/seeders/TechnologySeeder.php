<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;


class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technology_data = ['HTML5','CSS3','JavaScript'];
        foreach($technology_data as $_technology) {
        $technology = new Technology;
        $technology->label = $_technology;
        $technology->save();
        
        
    }
}
}
