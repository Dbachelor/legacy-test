<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $array = array("account_name"=>"Joachim Ojiodu", "bank_name"=>"Bluesea", "account_number"=>"2020808080");
        DB::table('banks')->insert($array);

    }
}
