<?php

use Illuminate\Database\Seeder;
use App\Type;
class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new Type();
        $type->name ="Hourly";
        $type->save();
        $type = new Type();
        $type->name ="Fixed Price";
        $type->save();
        $type = new Type();
        $type->name ="Contract";
        $type->save();
        $type = new Type();
        $type->name ="FullTime";
        $type->save();
        $type = new Type();
        $type->name ="Internship";
        $type->save();
        $type = new Type();
        $type->name ="Volunteer";
        $type->save();
    }
}
