<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContestantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contestants')->insert([
            'name' => 'chuchu',
            'election_id' => 1 ,
            'about'=> 'about',
            'position'=> 'President',
        ]);
        //
    }
}
