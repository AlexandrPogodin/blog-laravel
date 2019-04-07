<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        //
        // Article::create(
        //     [

        //             'name' => 'Post 1',
        //             'author' => 'Alexandr',
        //             'text' => 'Some text'

        //     ]);

        factory(App\Article::class, 50)->create();
    }
}
