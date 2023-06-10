<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            ['author_id' => '1',
            'title' => 'Atlas一郎が書いた本',
            'price' => 1000],
            ['author_id' => '2',
            'title' => 'Atlas二郎が書いた本',
            'price' => 2000],
            ['author_id' => '3',
            'title' => 'Atlas三郎が書いた本',
            'price' => 3000],
            ['author_id' => '4',
            'title' => 'Atlas四郎が書いた本',
            'price' => 4000],
            ['author_id' => '5',
            'title' => 'Atlas五郎が書いた本',
            'price' => 5000]
        ]);
    }
}
