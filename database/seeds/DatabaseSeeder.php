<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        App\Bank::insert(['name'=>'CIB']);
        App\Bank::insert(['name'=>'QNB']);
        App\Bank::insert(['name'=>'HSBC']);

        App\type_account::insert(['name'=>'Saving']);
        App\type_account::insert(['name'=>'Credit']);
        App\type_account::insert(['name'=>'Joint']);


        App\currency_account::insert(['name'=>'USD']);
        App\currency_account::insert(['name'=>'EURO']);
        App\currency_account::insert(['name'=>'EGP']);
        App\currency_account::insert(['name'=>'SAR']);

        App\User::insert(['name' => 'ahmed','password' => bcrypt('123456'),'email' => 'ahmed@ahmed.com']);


    }
}
