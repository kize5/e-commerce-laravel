<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast\Int_;
use Ramsey\Uuid\Type\Integer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class,
            ProductsTableSeeder::class,
            UsersTableSeeder::class,
            user_adressesTableSeeder::class,
            order_productsTableSeeder::class,
        ]);
    }
}



// \App\Models\UserExlaravel::factory()->create([
//     'name' => 'Test UserExlaravel',
//     'email' => 'test@example.com',
// ]);
