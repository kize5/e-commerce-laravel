<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        cart::factory()->count(5)->create();
        for ($i = 1; $i < 8; $i++) {
            DB::table('carts')->insert([
                'id_users' => $i,
            ]);
        }
    }
}
