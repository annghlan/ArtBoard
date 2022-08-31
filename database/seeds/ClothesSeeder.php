<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClothesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('clothes')->insert([

        //     'name' => Str::random(5),
        //     'image' =>image('public/assets/img',640,480, null, false),
        //     'size' => Str::random(5),
        //     'price' => Str::random(5,),
        // ]);

         factory(App\Models\Clothes::class,10)->create();
    }
}
