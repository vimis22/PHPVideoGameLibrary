<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $this->removeRelation('category_lists');

        DB::table('categories')->truncate();

        Schema::enableForeignKeyConstraints();

        DB::table('categories')->insert([
            ['name' => 'Action'],
            ['name' => 'Puzzle'],
            ['name' => 'Racing'],
            ['name' => 'Shooting'],
            ['name' => 'Strategy'],
        ]);
    }

    public function removeRelation($relationTable){
        DB::table($relationTable)->where('games_id', '!=', null)->delete();
    }
}
