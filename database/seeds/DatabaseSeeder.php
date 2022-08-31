<?php

use Illuminate\Database\Seeder;
use App\Models\Clothes;
use Illuminate\Database\Eloquent\Factories\Factory;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          factory(App\Models\Clothes::class,10)->create();
        }
}
