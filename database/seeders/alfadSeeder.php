<?php

namespace Database\Seeders;

use App\Models\alfad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class alfadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $test = alfad::class;
        $test::factory()->count(10)->create();
    }
}
