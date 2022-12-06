<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\user_adress;
use Database\Factories\user_adressFactory;
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
        user_adress::factory()->count(10)->create();
    }
}
