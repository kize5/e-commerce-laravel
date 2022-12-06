<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Product::factory()->count(50)->create();
        DB::table('products')->insert([
            'name' => 'Paris',
            'price' => '150',
            'quantity' => '1000',
            'description' => 'Voyage inoubliable en vr à paris, découvrez la tour effeil, les baguettes et les bérets',
            'image' => 'https://www.okvoyage.com/wp-content/uploads/2020/01/paris-2.jpg',
            'id_category' => '1',
        ]);

        DB::table('products')->insert([
            'name' => 'Lune',
            'price' => '250',
            'quantity' => '1000',
            'description' => 'Voyage inoubliable en vr sur la lune ! Découvrez les joies de la 0 gravité depuis votre fauteil',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/e/e1/FullMoon2010.jpg',
            'id_category' => '1',
        ]);

        DB::table('products')->insert([
            'name' => 'Tokyo',
            'price' => '200',
            'quantity' => '1000',
            'description' => 'Voyage inoubliable en vr sur la terre dusoleil levant, à tokyo !',
            'image' => 'https://i.f1g.fr/media/cms/1200x630_crop/2022/09/14/89ad5d0ca36afd42738e3b9ff4c5fad8d9ab592f48ef3074469b6a35ca6e2259.jpg',
            'id_category' => '1',
        ]);

        DB::table('products')->insert([
            'name' => 'Lisbonne',
            'price' => '150',
            'quantity' => '1000',
            'description' => 'Voyage inoubliable en vr dans les rue de la belle Lisbonne !',
            'image' => 'https://lisbonne-idee.com/upload4mail/magnolia-portugal/op_14469_experiencia-em-lisboa-portugal-por-simone-68818959579123ff8acad97d62959a19.jpg',
            'id_category' => '1',
        ]);

        DB::table('products')->insert([
            'name' => 'Meta quest 2',
            'price' => '850',
            'quantity' => '1000',
            'description' => 'Le top du top des casques de réalité virtuelle pour un prix très petit',
            'image' => 'https://www.journaldugeek.com/content/uploads/2022/11/metaquest2.jpg',
            'id_category' => '2',
        ]);

        DB::table('products')->insert([
            'name' => 'Samsung gear vr',
            'price' => '75',
            'quantity' => '1000',
            'description' => "Idéal pour découvrir la VR sans se ruiner dans un casque, il vous suffit d'avoir un téléphone",
            'image' => 'https://www.ccl-live.fr/wp-content/uploads/2017/05/Samsung-New-Gear-VR-1.jpg',
            'id_category' => '2',
        ]);

    }
}
