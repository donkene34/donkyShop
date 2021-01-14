<?php

use App\produit;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Factory::create();

        // for($i=0; $i<30; $i++)
        // {
        // //     produit::create([
        //         'title' => $faker->sentences(15),
        //         'slug' => $faker->slug,
        //         'subtitle' => $faker->sentence(10),
        //         'description' => $faker->text,
        //         'price' =>$faker->numberBetween(50000,200000),
        //         'image' => 'product1.jpg'
        //     ]);
        // }
        produit::create([
            'title' => 'produit1',
            'slug' => 'slug1',
            'subtitle' => '$faker->sentence(10)',
            'description' => '$faker->text',
            'price' =>'10000',
            'image' => 'product1.jpg'
        ]);

        produit::create([
            'title' => 'produit2',
            'slug' => 'slug2',
            'subtitle' => '$2faker->sentence(10)',
            'description' => '2$faker->text',
            'price' =>'100002',
            'image' => 'product2.jpg'
        ]);
        produit::create([
            'title' => 'produit3',
            'slug' => 'slug3',
            'subtitle' => '$faker->sentence(10)3',
            'description' => '$faker->text3',
            'price' =>'100003',
            'image' => 'product3.jpg3'
        ]);
        produit::create([
            'title' => 'produit4',
            'slug' => 'slug4',
            'subtitle' => '$fake4r->sentence(10)',
            'description' => '$fa4ker->text',
            'price' =>'100004',
            'image' => 'produ4ct4.jpg'
        ]);
        produit::create([
            'title' => 'produit5',
            'slug' => 'slug5',
            'subtitle' => '$5faker->sentence(10)',
            'description' => '$5faker->text',
            'price' =>'100005',
            'image' => 'product5.jpg'
        ]);
        produit::create([
            'title' => 'produit6',
            'slug' => 'slug6',
            'subtitle' => '$faker->6entence(10)',
            'description' => '$faker6->text',
            'price' =>'100006',
            'image' => 'product6.jpg'
        ]);
        produit::create([
            'title' => 'produit7',
            'slug' => 'slug7',
            'subtitle' => '$f7aker->sentence(10)',
            'description' => '$7faker->text',
            'price' =>'100007',
            'image' => 'product7.jpg'
        ]);
}
}
