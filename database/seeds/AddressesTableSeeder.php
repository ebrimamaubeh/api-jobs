<?php

use Illuminate\Database\Seeder;
use App\Address;
class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $add = new Address();
      $add->name="serrekunda";
      $add->save();
      $add = new Address();
      $add->name="latrikunda sabiji";
      $add->save();
      $add = new Address();
      $add->name="tobokoto";
      $add->save();
      $add = new Address();
      $add->name="banjul";
      $add->save();
      $add = new Address();
      $add->name="bakau";
      $add->save();
      $add = new Address();
      $add->name="gunjur";
      $add->save();
      $add = new Address();
      $add->name="brusubi";
      $add->save();
      $add = new Address();
      $add->name="farato";
      $add->save();
      $add = new Address();
      $add->name="brikama";
      $add->save();
      $add = new Address();
      $add->name="tanji";
      $add->save();
      $add = new Address();
      $add->name="kanifing estate";
      $add->save();
        $add = new Address();
        $add->name="kanifing";
        $add->save();
        $add = new Address();
        $add->name="kaniging south";
        $add->save();
        $add = new Address();
        $add->name="pipeline";
        $add->save();
        $add = new Address();
        $add->name="dippakunda";
        $add->save();
        $add = new Address();
        $add->name="brufut";
        $add->save();
        $add = new Address();
        $add->name="sukuta";
        $add->save();
        $add = new Address();
        $add->name="bijilo";
        $add->save();
        $add = new Address();
        $add->name="busumbala";
        $add->save();
        $add = new Address();
        $add->name="senegambia";
        $add->save();
        $add = new Address();
        $add->name="basse";
        $add->save();
        $add = new Address();
        $add->name="soma";
        $add->save();
    }
}
