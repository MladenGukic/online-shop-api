<?php

use Illuminate\Database\Seeder;
use App\Article;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create(['name' => 'Telephone', 'price' => 100, 'content' => 'Good phone', 'imgUrl' => 'https://picsum.photos/200']);
    }
}
