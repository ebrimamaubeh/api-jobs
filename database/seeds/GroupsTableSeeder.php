<?php

use Illuminate\Database\Seeder;
use App\Group;
class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $g = new Group();
        $g->name ="Accounting";
        $g->save();
        $g = new Group();
        $g->name ="Finance";
        $g->save();
        $g = new Group();
        $g->name ="Technology";
        $g->save();
        $g = new Group();
        $g->name ="Programming";
        $g->save();
        $g = new Group();
        $g->name ="Mobile Development";
        $g->save();
        $g = new Group();
        $g->name ="Human Resource (HR)";
        $g->save();
        $g = new Group();
        $g->name ="Frontend Developer";
        $g->save();
        $g = new Group();
        $g->name ="Software Engineer";
        $g->save();
    }
}
