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
        //Gitaren
        $product = new \App\Products([
            'product_name' => 'Epiphone Les Paul Standard',
            'product_price' => 399.99,
            'description' => 'Sinds de introductie in 1952 is de Les Paul niet meer weg te denken uit gitaarland. Jimmy Page, Slash, Joe Perry, Zakk Wylde, Lenny Kravitz en vele anderen spelen al decennia lang op Les Pauls. De klank is dan ook legendarisch. Met de Epiphone Les Paul Standard kan iedereen een echte Les Paul in handen krijgen voor een relatief vriendelijke prijs. Epiphone is het dochtermerk van Gibson, dus echtheid en kwaliteit zijn absoluut gegarandeerd.',
            'image' => '../images/products/epiphone-les-paul-standard-60s-ebony.jpg',
            'category_id' => 1,
        ]);
        $product->save();

        $product = new \App\Products([
            'product_name' => 'Squier Classic Vibe 60’s Stratocaster',
            'product_price' => 409.99,
            'description' => 'De Classic Vibe serie bestaat uit betaalbare varianten van vintage Stratocaster en Telecaster modellen, gemaakt door Fender-dochter Squier. Deze elektrische gitaren worden gekenmerkt door een klassieke sound en afwerking en zijn heel geschikt voor de wat meer veeleisende beginner en de gevorderde. Zo heeft deze Squier Classic Vibe 60s Stratocaster een typische jaren zestig look (met zijn authentiek ogende afwerking en tortoise slagplaat) en een ronde, krachtige toon.',
            'image' => '../images/products/squierclassic.jpg',
            'category_id' => 1,
        ]);
        $product->save();

        $product = new \App\Products([
            'product_name' => 'ESP LTD Snakebyte Black Satin James Hetfield Signature met koffer',
            'product_price' => 1521.99,
            'description' => 'James Hetfield en ESP LTD presenteren de Snakebyte. Deze forse EX-stijl elektrische gitaar gebaseerd op zijn eigen custom shop gitaar uit de jaren tachtig en negentig. Alleen heeft hij een iets nieuwer jasje gekregen, of beter gezegd, de slang is verveld. Geladen met de inmiddels bekende EMG JH HET-set actieve humbuckers kun je rekenen op een snoeiharde metalklank. Opvallend aan deze set is dat de dynamiek en warmte die normaal geassocieerd wordt met passieve elementen ook hier goed tot uitting komen. Kortom, ook niet-Metallica fans halen met de Snakebyte een prachtgitaar in huis en hij komt bovendien geleverd met een koffer.',
            'image' => '../images/products/ltdsnakebyte.jpg',
            'category_id' => 1,
        ]);
        $product->save();
    }
}
