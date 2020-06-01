<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Gitaren',
            'image' => 'images/categories/guitar.png'
        ]);
        DB::table('categories')->insert([
            'name' => 'Basgitaren',
            'image' => 'images/categories/bass.png'
        ]);
        DB::table('categories')->insert([
            'name' => 'Microfoons',
            'image' => 'images/categories/mic.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Drums',
            'image' => 'images/categories/drumkit.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Toetsinstrumenten',
            'image' => 'images/categories/ta.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Software',
            'image' => 'images/categories/sw.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Studio-toebehoren',
            'image' => 'images/categories/st.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Geluid',
            'image' => 'images/categories/zu.jpg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Accessories',
            'image' => 'images/categories/ca.jpg'
        ]);
    }
}
