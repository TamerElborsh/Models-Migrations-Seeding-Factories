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
                'Name'                  =>  $i,
                'FirstName' =>   $i,
                'LastName'  =>  $i,
                'Phone' =>  $i,
                'Address1'=>    $i,
                'Address2'=> $i,
                'City'=>$i,
                'State'=>$i,
                'PostalCode'=>$i,
                'Country'=>$i,
                'CreditLimit'=> $i,
            ]);
        }



        // DB::table('customers')->insert([
        //     // 'SalesRepEmployeeNum' =>66,
        //     'name' => 'USER Tset',
        //     'FirstName' => 'AH',
        //     'LastName' => 'FT',
        //     'Phone' => 1002,
        //     'Address1'=>'dddddd',
        //     'Address2'=>'dddddd',
        //     'City'=>'Gaza',
        //     'State'=>'Gaza',
        //     'PostalCode'=> 10,
        //     'Country'=>'pal',
        //     'CreditLimit'=> 105555555,

        // ]);
    }
}
