<?php

use Illuminate\Database\Seeder;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            'imagePath' => 'src/images/451_fahrenheit.jpg',
            'title' => '451 Fahrenheit',
            'description' => 'Fahrenheit 451 is a 
                     dystopian novel by Ray Bradbury, published 
                     in 1953. It is regarded as one of his best works.
                     The novel presents a future American society where books 
                     are outlawed and "firemen" burn any that are found.',
            'price' => 15
        ]);

        DB::table('products')->insert([
            'imagePath' => 'src/images/foundation.jpg',
            'title' => 'Foundation',
            'description' => 'The Foundation series is a science fiction
                              series of books written by American author Isaac Asimov.
                              For nearly thirty years, the series was a trilogy: Foundation,
                              Foundation and Empire, Second Foundation. It won the one-time
                               Hugo Award for "Best All-Time Series" in 1966',
            'price' => 21
        ]);

        DB::table('products')->insert([
            'imagePath' => 'src/images/lord_of_light.jpg',
            'title' => 'Lord of Light',
            'description' => 'Lord of Light is a science fantasy novel by 
                              American author Roger Zelazny. It was awarded the 
                              1968 Hugo Award for Best Novel, and nominated for a 
                              Nebula Award in the same category.',
            'price' => 18
        ]);

        DB::table('products')->insert([
            'imagePath' => 'src/images/the_dispossessed.jpg',
            'title' => 'The Dispossesed',
            'description' => 'The Dispossessed: An Ambiguous Utopia is a 
                              1974 utopian science fiction novel by 
                              Ursula K. Le Guin, set in the same fictional 
                              universe as that of The Left Hand of Darkness.',
            'price' => 17
        ]);

        DB::table('products')->insert([
            'imagePath' => 'src/images/the_prince.jpg',
            'title' => 'The Prince',
            'description' => 'The Prince is a 16th-century political treatise,
                               by the Italian diplomat and political theorist, 
                               Niccolò Machiavelli. From correspondence a version appears
                               to have been distributed in 1513, using a Latin title, De Principatibus.',
            'price' => 11
        ]);


    }
}
