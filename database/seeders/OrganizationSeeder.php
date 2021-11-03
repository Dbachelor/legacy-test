<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $array = [["name"=>"MTN Nigeria", "address"=>"22 No Way"],["name"=>"Airtel Africa", "address"=>"25 No Way"]];
        DB::table('organizations')->insert($array);
    }
}
