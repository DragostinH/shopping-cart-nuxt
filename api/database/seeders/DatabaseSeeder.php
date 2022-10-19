<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('categories')->insert([
            'name' => 'Entrees',
        ]);

        DB::table('categories')->insert([
            'name' => 'Sushi',
        ]);

        DB::table('categories')->insert([
            'name' => 'Drinks',
        ]);

        DB::table('categories')->insert([
            'name' => 'Desserts',
        ]);

        DB::table('products')->insert([
            'name' => 'Chicken Teriyaki',
            'price' => 12.99,
            'description' => 'Grilled chicken breast with teriyaki sauce',
            'image' => 'https://www.seriouseats.com/recipes/images/2017/04/20170404-chicken-teriyaki-recipe-1-1500x1125.jpg',
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Chicken Katsu',
            'price' => 12.99,
            'description' => 'Breaded chicken breast with teriyaki sauce',
            'image' => 'https://www.seriouseats.com/recipes/images/2017/04/20170404-chicken-teriyaki-recipe-1-1500x1125.jpg',
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Chicken Katsu Curry',
            'price' => 12.99,
            'description' => 'Breaded chicken breast with curry sauce',
            'image' => 'https://www.seriouseats.com/recipes/images/2017/04/20170404-chicken-teriyaki-recipe-1-1500x1125.jpg',
            'category_id' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Chicken Teriyaki Curry',
            'price' => 12.99,
            'description' => 'Grilled chicken breast with curry sauce',
            'image' => 'https://www.seriouseats.com/recipes/images/2017/04/20170404-chicken-teriyaki-recipe-1-1500x1125.jpg',
            'category_id' => 1,
        ]);
        
        DB::table('products') ->insert([
            'name' => 'California Roll',
            'price' => 5.99,
            'description' => 'Crab, avocado, cucumber, and masago',
            'image' => 'https://www.seriouseats.com/recipes/images/2017/04/20170404-chicken-teriyaki-recipe-1-1500x1125.jpg',
            'category_id' => 2,
        ]);
        
        DB::table('products') ->insert([
            'name' => 'Spicy Tuna Roll',
            'price' => 5.99,
            'description' => 'Spicy tuna, avocado, cucumber, and masago',
            'image' => 'https://www.seriouseats.com/recipes/images/2017/04/20170404-chicken-teriyaki-recipe-1-1500x1125.jpg',
            'category_id' => 2,
        ]);

        DB::table('products') ->insert([
            'name' => 'Spicy Salmon Roll',
            'price' => 5.99,
            'description' => 'Spicy salmon, avocado, cucumber, and masago',
            'image' => 'https://www.seriouseats.com/recipes/images/2017/04/20170404-chicken-teriyaki-recipe-1-1500x1125.jpg',
            'category_id' => 2,
        ]);
        
        DB::table('products')->insert([
            'name' => 'Coke',
            'price' => 2.99,
            'description' => 'Coke',
            'image' => 'https://www.seriouseats.com/recipes/images/2017/04/20170404-chicken-teriyaki-recipe-1-1500x1125.jpg',
            'category_id' => 3,
        ]);

        DB::table('products')->insert([
            'name' => 'Sprite',
            'price' => 2.99,
            'description' => 'Sprite',
            'image' => 'https://www.seriouseats.com/recipes/images/2017/04/20170404-chicken-teriyaki-recipe-1-1500x1125.jpg',
            'category_id' => 3,
        ]);

        DB::table('products')->insert([
            'name' => 'Fanta',
            'price' => 2.99,
            'description' => 'Fanta',
            'image' => 'https://www.seriouseats.com/recipes/images/2017/04/20170404-chicken-teriyaki-recipe-1-1500x1125.jpg',
            'category_id' => 3,
        ]);

        DB::table('products')->insert([
            'name' => 'Ice Cream',
            'price' => 2.99,
            'description' => 'Ice Cream',
            'image' => 'https://www.seriouseats.com/recipes/images/2017/04/20170404-chicken-teriyaki-recipe-1-1500x1125.jpg',
            'category_id' => 4,
        ]);

        DB::table('products')->insert([
            'name' => 'Mochi',
            'price' => 2.99,
            'description' => 'Mochi',
            'image' => 'https://www.seriouseats.com/recipes/images/2017/04/20170404-chicken-teriyaki-recipe-1-1500x1125.jpg',
            'category_id' => 4,
        ]);

        DB::table('products')->insert([
            'name' => 'Cheesecake',
            'price' => 2.99,
            'description' => 'Cheesecake',
            'image' => 'https://www.seriouseats.com/recipes/images/2017/04/20170404-chicken-teriyaki-recipe-1-1500x1125.jpg',
            'category_id' => 4,
        ]);

        DB::table('products')->insert([
            'name'=>'Black pepper beef',
            'price'=> 12.99,
            'description'=>'Black pepper beef',
            'image'=>'https://www.seriouseats.com/recipes/images/2017/04/20170404-chicken-teriyaki-recipe-1-1500x1125.jpg',
            'category_id'=>1,
        ]);
        
        DB::table('products')->insert([
            'name'=>'Gui Ytakiniku',
            'price'=> 16.99,
            'description'=>'Beef with japanese barbeque sauce,sesame seeds and potato puree with truffle oil',
            'image'=>'https://www.seriouseats.com/recipes/images/2017/04/20170404-chicken-teriyaki-recipe-1-1500x1125.jpg',
            'category_id'=>1,
        ]);

        DB::table('products')->insert([
            'name'=>'Tandoori Steak',
            'price'=>15.99,
            'description'=>'Marinated turkey breast, edamame, avocado mousse, sweet potato mousse',
            'image'=>'https://www.seriouseats.com/recipes/images/2017/04/20170404-chicken-teriyaki-recipe-1-1500x1125.jpg',
            'category_id'=>1,
        ]);
    }
}
