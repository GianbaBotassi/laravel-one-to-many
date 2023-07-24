<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Esempio di creazione singola
        //     $data = new Project();
        //     $data->name = "ciao";
        //     $data->description = "eccoci";
        //     $data->private = true;
        //     $data->collaborators = 10;

        //     $data->save();

        Project::factory()->count(10)->create();
    }
}
