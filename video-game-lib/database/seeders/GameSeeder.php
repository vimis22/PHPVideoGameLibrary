<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Just to empty out database to dodge duplicates. Could use insertOrIgnore, but our only unique is ID and we don't specify that in here.
        DB::table('games')->delete();

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
}
