<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Just to empty out database to dodge duplicates. Could use insertOrIgnore, but our only unique is ID and we don't specify that in here.
        DB::table('categories')->delete();

        DB::table('categories')->insert([
            ['name' => 'Action'],
            ['name' => 'Puzzle'],
            ['name' => 'Racing'],
            ['name' => 'Shooting'],
            ['name' => 'Strategy'],
        ]);
    }
}
