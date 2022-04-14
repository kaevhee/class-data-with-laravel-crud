<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Data;

class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        data::create(["firstname"=> "kaweng", "lastname"=> "pam"]);
        data::create(["firstname"=> "immaculater" ,"lastname"=> "bayero"]);

        //
    }
}
