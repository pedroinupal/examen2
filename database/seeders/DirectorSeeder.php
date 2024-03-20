<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Director;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $director = new Director;
        $director->director_name = "Mike Flannagan";
        $director->birth_date = '1999-12-25';
        $director->save();

        $director = new Director;
        $director->director_name = "Mike Keen";
        $director->birth_date = '1999-12-04';
        $director->save();

        $director = new Director;
        $director->director_name = "Pedro Inurreta";
        $director->birth_date = '2001-07-16';
        $director->save();

        $director = new Director;
        $director->director_name = "John Morris";
        $director->birth_date = '1997-08-15';
        $director->save();

        $director = new Director;
        $director->director_name = "Javier Reyes";
        $director->birth_date = '1999-12-03';
        $director->save();

        $director = new Director;
        $director->director_name = "Jose Juarez";
        $director->birth_date = '1999-12-15';
        $director->save();

        $director = new Director;
        $director->director_name = "Luis Miguel";
        $director->birth_date = '1999-12-28';
        $director->save();

        $director = new Director;
        $director->director_name = "Elena Jones";
        $director->birth_date = '1999-12-25';
        $director->save();

        $director = new Director;
        $director->director_name = "Mary Jane";
        $director->birth_date = '1996-02-15';
        $director->save();

        $director = new Director;
        $director->director_name = "Luisa Hernández";
        $director->birth_date = '1987-01-25';
        $director->save();
    }
}
