<?php

use Illuminate\Database\Seeder;
use App\Worker;

class WorkersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Worker::create([
        'name'=>'Edgar Huaranga','document_number'=>'70226547','phone_number'=>'993927497','address'=>'Mz Q Lt 6 Urb El Remanso','app_password'=>'huaranga','cargo'=>'Mercaderista','city'=>'Saga'
     ]);




    }
}
