<?php

use Illuminate\Database\Seeder;
use App\Level;
class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level = new App\Level();
        $level->name ="Entry Level";
        $level->save();
        $level = new App\Level();
        $level->name ="Intermediate";
        $level->save();
        $level = new App\Level();
        $level->name ="Expert";
        $level->save();
    }
}
