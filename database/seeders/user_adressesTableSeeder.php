<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\User_adress;
use Database\Factories\User_adressFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class user_adressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User_adress::factory()->count(10)->create();
    }
}
