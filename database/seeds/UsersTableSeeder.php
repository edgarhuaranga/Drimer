<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;
use App\Producto;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name'=>'Edgar Huaranga',
          'email'=>'edgar.huaranga@uni.pe',
          'password'=>'huaranga'
        ]);




    }
}
