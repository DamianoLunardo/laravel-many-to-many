<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;
use Illuminate\Support\Str;
use App\Models\Type;

class ProjectSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        $type = Type::all();
        $ids = $type->pluck('id');

        for ($i = 0; $i < 10; $i++) {
            $new_project = new Project();
            $new_project->title = $faker->sentence(3);
            $new_project->content = $faker->paragraphs(3, true);
            $new_project->my_projects = $faker->paragraphs(3, true);
            $new_project->technologies = $faker->sentence(3);
            $new_project->type_id = $faker->optional()->randomElement($ids);

            $new_project->save();
        }
    }
}
