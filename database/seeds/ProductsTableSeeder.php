<?php

use App\Product;
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
        $faker = Faker\Factory::create();
        $names = ['apparel', 'accessories', 'jewellery', 'timepiece', 'bags', 'shoes', 'tools'];
        foreach (range(1, 20) as $i) {
            $index = rand(0, 6);
            $product = Product::create([
                'title' => $names[$index],
                'price' => rand(1000, 5000),
                'description' => $faker->text(),
                'user_id' => rand(0, 100)
            ]);
            $loop = rand(2, 3);
            for ($j = 1; $j <= $loop; $j++) {
                $product->images()->create([
                    'image' => $faker->imageUrl()
                ]);
            }
        }
    }
}
