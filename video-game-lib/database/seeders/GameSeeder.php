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
                    'link_path' => 'age-of-war',
                    'image_path' => 'gamepics/AgeofWar.jpg',
                    'name' => 'Age of War',
                    'description' => 'A classic with a certified banger theme',
                    'publishment' => '2007-10-31'
                ],
                [
                    'link_path' => 'chaos-faction',
                    'image_path' => 'gamepics/ChaosFaction.webp',
                    'name' => 'Chaos Faction',
                    'description' => 'The OG free version of Smash Brothers',
                    'publisment' => '2007-11-27',
            ],
        ]);
    }

    public function removeRelation($relationTable){
        DB::table($relationTable)->where('game_id', '!=', null)->delete();
    }
}
