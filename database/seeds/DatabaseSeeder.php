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


       App\deposit_bank::insert(['user_id'=>'1','id_user_bank_account'=>'1','amount'=>'200','date'=>'10-10-2010']);
       App\deposit_bank::insert(['user_id'=>'1','id_user_bank_account'=>'1','amount'=>'200','date'=>'10-10-2010']);

       App\deposit_bank::insert(['user_id'=>'1','id_user_bank_account'=>'2','amount'=>'200','date'=>'10-10-2010']);

       App\transactions_request::insert(['user_id'=>'1','from_user_bank_account_id'=>'1','to_user_bank_account_id'=>'2','amount'=>'20','date'=>'10-10-2010']);
       App\transactions_request::insert(['user_id'=>'1','from_user_bank_account_id'=>'1','to_user_bank_account_id'=>'2','amount'=>'20','date'=>'10-10-2010']);


       App\withdrow_bank::insert(['user_id'=>'1','id_user_bank_account'=>'1','amount'=>'20','date'=>'10-10-2010']);
       App\withdrow_bank::insert(['user_id'=>'1','id_user_bank_account'=>'1','amount'=>'10','date'=>'10-10-2010']);


        App\User::insert(['name' => 'ahmed','password' => bcrypt('123456'),'email' => 'ahmed@ahmed.com']);


    }
}
