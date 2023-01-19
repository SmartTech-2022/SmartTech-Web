<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Factories\ContestantFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContestantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Contestant::factory(5)->create();

        // DB::table('contestants')->insert([
        //     'name' => 'chuchu',
        //     'election_id' => 1 ,
        //     'about'=> 'about',
        //     'position'=> 'President',
        //     'image' => 'https://via.placeholder.com/150x150',
        //     'gender'=> 'male',
        //     'party'=> 'SMT',
        //     'party_logo' => 'https://via.placeholder.com/150x150'
        // ]);
        //
    }
}

