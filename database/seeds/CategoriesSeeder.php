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
        $category = new \App\Categories([
            'name' => 'Gitaren',
            'image' => 'images/categories/guitar.png'
        ]);
        $category->save();

        $category = new \App\Categories([
            'name' => 'Basgitaren',
            'image' => 'images/categories/bass.png'
        ]);
        $category->save();

        $category = new \App\Categories([
            'name' => 'Microfoons',
            'image' => 'images/categories/mic.jpg'
        ]);
        $category->save();

        $category = new \App\Categories([
            'name' => 'Drums',
            'image' => 'images/categories/drumkit.jpg'
        ]);
        $category->save();

        $category = new \App\Categories([
            'name' => 'Toetsinstrumenten',
            'image' => 'images/categories/ta.jpg'
        ]);
        $category->save();

        $category = new \App\Categories([
            'name' => 'Software',
            'image' => 'images/categories/sw.jpg'
        ]);
        $category->save();

        $category = new \App\Categories([
            'name' => 'Studio-toebehoren',
            'image' => 'images/categories/st.jpg'
        ]);
        $category->save();

        $category = new \App\Categories([
            'name' => 'Geluid',
            'image' => 'images/categories/zu.jpg'
        ]);
        $category->save();

        $category = new \App\Categories([
            'name' => 'Accessories',
            'image' => 'images/categories/ca.jpg'
        ]);
        $category->save();
    }
}
