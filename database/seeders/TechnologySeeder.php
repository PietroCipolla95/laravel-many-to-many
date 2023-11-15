<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = ['HTML', 'CSS', 'SASS', 'Bootstrap 5', 'JavaScript', 'VueJs 3', 'Laravel 10'];

        foreach ($technologies as $technology) {

            $new_technology = new Technology();

            $new_technology->name = $technology;

            $new_technology->save();
        }
    }
}
