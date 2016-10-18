<?php

use Illuminate\Database\Seeder;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker\Factory::create();

        foreach (range(1,10) as $index) {
            Product::create([
                'title' => $faker->name ,
                'description' => $faker->text ,
                'price' => $faker->numberBetween(10, 100),
            ]);
        }
    }
}
