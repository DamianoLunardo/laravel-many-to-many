<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Laravel', 'Vue', 'PHP', 'JavaScript', 'HTML', 'CSS ', 'Vite'];
        //
        foreach ($types as $type_name) {
            $new_type = new Type();
            $new_type->name = $type_name;

            $new_type->save();
        }
    }
}
