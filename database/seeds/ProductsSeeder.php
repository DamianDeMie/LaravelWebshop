<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Products([
            'product_name' => 'Epiphone Les Paul Standard',
            'product_price' => 399.99,
            'description' => 'Sinds de introductie in 1952 is de Les Paul niet meer weg te denken uit gitaarland. Jimmy Page, Slash, Joe Perry, Zakk Wylde, Lenny Kravitz en vele anderen spelen al decennia lang op Les Pauls. De klank is dan ook legendarisch. Met de Epiphone Les Paul Standard kan iedereen een echte Les Paul in handen krijgen voor een relatief vriendelijke prijs. Epiphone is het dochtermerk van Gibson, dus echtheid en kwaliteit zijn absoluut gegarandeerd.',
            'image' => 'images/products/epiphone-les-paul-standard-60s-ebony.jpg',
        ]);
        $product->save();
    }
}
