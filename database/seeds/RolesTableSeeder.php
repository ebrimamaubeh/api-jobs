<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new Role();
        $rol->name ="normal";
        $rol->save();

        $rol = new Role();
        $rol->name ="employer";
        $rol->save();

        $rol = new Role();
        $rol->name ="seeker";
        $rol->save();

        $rol = new Role();
        $rol->name ="admin";
        $rol->save();

        $rol = new Role();
        $rol->name ="super";
        $rol->save();
    }
}
