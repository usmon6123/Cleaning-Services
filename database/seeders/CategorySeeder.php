<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(['name' => "Web Design"]);
        DB::table('categories')->insert(['name' => "Web Development"]);
        DB::table('categories')->insert(['name' => "Online Marketing"]);
        DB::table('categories')->insert(['name' => "Keyword Research"]);
        DB::table('categories')->insert(['name' => "Email Marketing"]);
        DB::table('categories')->insert(['name' => "alfad category"]);
    }
}
