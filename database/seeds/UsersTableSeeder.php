<?php

use Illuminate\Database\Seeder;
use App\Employer;
use App\JobSeeker;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $em = new Employer();
        $em->name ="Mass Inc";
        $em->save();

        $em->users()->create([
          'email' => "mbah@gmail.com",
          'password' => bcrypt("secret"),
          'name' => "mbah"
        ]);

        $em = new Employer();
        $em->name ="Money Inc";
        $em->save();

        $em->users()->create([
          'email' => "mbah@hotmail.com",
          'password' => bcrypt("secret"),
          'name' => "money"
        ]);


        $js = new JobSeeker();
        $js->username ="jacob";
        $seeker = $js->save();

        $js->users()->create([
          'email' => "jacob@gmail.com",
          'password' => bcrypt("secret"),
          'name' => "jacob",
        ]);



    }
}
