<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = config('array_progetti');
        foreach($array as $project){
            $newProject = new Project;
            $newProject->nome_progetto = $project['nome_progetto'];
            $newProject->descrizione = $project['descrizione'];
            $newProject->collaboratori = $project['collaboratori'];
            $newProject->autore = $project['autore'];
            $newProject->data_inizio_progetto = $project['data_inizio_progetto'];
            $newProject->save();

        }
    }
}
