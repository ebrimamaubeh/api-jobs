<?php

use Illuminate\Database\Seeder;
use App\Status;
class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sta = new Status();
        $sta->name = "urgent";
        $sta->save();

        $sta = new Status();
        $sta->name = "featured";
        $sta->save();

    }
}
