<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            Product::create([
                'name' => 'Dental Service' . $i,
                'slug' => 'service-' . $i,
                'details' => 'Healthy Tooth',
                'price' => rand(100,899),
                'category_id' => 1,
                'image' => 'products/dummy/image0.jpg',
                'images' => '["products/dummy/image0.jpg", "products/dummy/image0.jpg", "products/dummy/image0.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'Full kit' . $i,
                'slug' => 'cleaning kit-' . $i,
                'details' => 'Regular Tooth Cleaning',
                'price' => rand(100,899),
                'category_id' => 2,
                'image' => 'products/dummy/image1.jpg',
                'images' => '["products/dummy/image1.jpg", "products/dummy/image1.jpg", "products/dummy/image1.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'Dental Surgery Kit' . $i,
                'slug' => 'Surgery Kit -' . $i,
                'details' => 'Severe Dental Surgery',
                'price' => rand(100,899),
                'category_id' => 3,
                'image' => 'products/dummy/image2.jpg',
                'images' => '["products/dummy/image2.jpg", "products/dummy/image2.jpg", "products/dummy/image2.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'Tooth Flosing kit' . $i,
                'slug' => 'flosing kit-' . $i,
                'details' => 'Flossing of tooth',
                'price' => rand(100,899),
                'category_id' => 4,
                'image' => 'products/dummy/image3.jpg',
                'images' => '["products/dummy/image3.jpg", "products/dummy/image3.jpg", "products/dummy/image3.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'Organic Cleansing kit' . $i,
                'slug' => 'cleansing -' . $i,
                'details' => 'Organic Cleansing of the tooths',
                'price' => rand(100,899),
                'category_id' => 5,
                'image' => 'products/dummy/image4.jpg',
                'images' => '["products/dummy/image4.jpg", "products/dummy/image4.jpg", "products/dummy/image4.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
        for ($i=0; $i < 20; $i++) {
            Product::create([
                'name' => 'Germ Remover' . $i,
                'slug' => 'germ killer -' . $i,
                'details' => 'Consultancy at affordable rates !',
                'price' => rand(100,899),
                'category_id' => 5,
                'image' => 'products/dummy/image4.jpg',
                'images' => '["products/dummy/image4.jpg", "products/dummy/image4.jpg", "products/dummy/image4.jpg"]',
                'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, nisi. Exercitationem, explicabo obcaecati dicta libero inventore soluta ducimus, necessitatibus quaerat magnam sapiente mollitia eum beatae quidem et perferendis quis similique.',
                'quantity' => 10
            ]);
        }
      
        
        $products = Product::all();
        foreach ($products as $product) {
            if($product->id % 3 == 0) {
                $product->featured = true;
                $product->save();
            }
        }
    }
}
