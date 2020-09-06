<?php

use Illuminate\Database\Seeder;

class CategoriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $faker = \Faker\Factory::create();
            \Illuminate\Support\Facades\DB::table('categories')->insert([
                'name' => $faker->text(40),
                'description' => $faker->paragraph,
                'active' => true,
            ]);
        }
    }
}
