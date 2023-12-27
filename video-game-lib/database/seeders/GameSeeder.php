<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $this->removeRelation('ratings');
        $this->removeRelation('favorite_lists');
        $this->removeRelation('games_lists');
        $this->removeRelation('category_lists');

        DB::table('games')->truncate();

        Schema::enableForeignKeyConstraints();

        DB::table('games')->insert([
            [
                    'name' => 'Age of War',
                    'description' => 'A classic with a certified banger theme',
                    'publishing_date' => '2007-10-31',
                    'category' => 'Strategy'
                ],
                [
                    'name' => 'Chaos Faction',
                    'description' => 'The OG free version of Smash Brothers',
                    'publishing_date' => '2007-11-27',
                    'category' => 'Puzzle'
            ],
        ]);
    }

    public function removeRelation($relationTable){
        DB::table($relationTable)->where('game_id', '!=', null)->delete();
    }
}
