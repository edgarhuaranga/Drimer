<?php


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        #$this->call(UsersTableSeeder::class);
        #$this->call(BusinessesTableSeeder::class);
        #$this->call(POPMaterialsTableSeeder::class);
        #$this->call(ProductsTableSeeder::class);
        #$this->call(WorkersTableSeeder::class);
        #$this->call(MerchMaterialsTableSeeder::class);
        $this->call(CadenasTableSeeder::class);
        #$this->call(DemoDataSeeder::class);
    }
}
