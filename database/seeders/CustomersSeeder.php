<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i=0; $i<5; $i++)
        {
            DB::table('customers')->insert([
                'SalesRepEmployeeNum'   =>  $i,
                'Name'                  => 'customers'. $i,
                'FirstName' =>   'customers'. $i,
                'LastName'  =>  'customers'. $i,
                'Phone' =>  'customers'. $i,
                'Address1'=>    'Address1'. $i,
                'Address2'=> 'Address2'.$i,
                'City'=>'City'.$i,
                'State'=>'State'.$i,
                'PostalCode'=>$i,
                'Country'=>'Country'.$i,
                'CreditLimit'=> $i,
            ]);
        }


    }
}
