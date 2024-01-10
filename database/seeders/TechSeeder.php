<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tech;

class TechSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tech = ['css', 'scss', 'html', 'vue', 'react', 'laravel', 'php', 'javascript', 'typescript'];

        foreach ($tech as $tech_name) {
            $tech = new Tech();
            $tech->name = $tech_name;
            $tech->save();
        }
    }

    
}
