<?php

use Illuminate\Database\Seeder;

class TagsSeed extends Seeder
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
            \Illuminate\Support\Facades\DB::table('tags')->insert([
                'name' => $faker->text(15),
                'description' => $faker->paragraph,
                'active' => true,
            ]);
        }
    }
}
