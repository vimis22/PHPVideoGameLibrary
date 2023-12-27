<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_lists')->truncate();

        DB::table('category_lists')->insert([
            /**
             * 1: Action
             * 2: Puzzle
             * 3: Racing
             * 4: Shooting
             * 5: Strategy
             */

             //Age of War
            [
                'game_id' => 1,
                'category_id' => 5,
            ],

            //Chaos Faction
            [
                'game_id' => 2,
                'category_id' => 1,
            ],
        ]);
    }
}
