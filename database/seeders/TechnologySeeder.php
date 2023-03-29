<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Model
use App\Models\Technology;
//Helpers
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [
            "HTML",
            "CSS",
            "JAVASCRIPT",
            "VUE",
            "PHP",
            "LARAVEL"
        ];
        foreach($technologies as $technology){
            $newTechology = Technology::create([
                "name"=>$technology,
                "slug"=>Str::slug($technology),
            ]);
        }
    }
    
}
