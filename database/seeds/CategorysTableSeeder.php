<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = new Category();
        $cat->name ="Less";
        $cat->save();
        $cat = new Category();
        $cat->name ="Web Forms";
        $cat->save();
        $cat = new Category();
        $cat->name ="Human Resource";
        $cat->save();
        $cat = new Category();
        $cat->name ="Finance";
        $cat->save();
        $cat = new Category();
        $cat->name ="Adminstration";
        $cat->save();
        $cat = new Category();
        $cat->name ="Saas";
        $cat->save();
        $cat = new Category();
        $cat->name ="Html 5";
        $cat->save();
        $cat = new Category();
        $cat->name ="React";
        $cat->save();
        $cat = new Category();
        $cat->name ="Angular";
        $cat->save();
        $cat = new Category();
        $cat->name ="Java";
        $cat->save();
        $cat = new Category();
        $cat->name ="Python";
        $cat->save();
        $cat = new Category();
        $cat->name ="C#";
        $cat->save();
        $cat = new Category();
        $cat->name ="Php";
        $cat->save();
        $cat = new Category();
        $cat->name ="Laravel";
        $cat->save();
    }
}
