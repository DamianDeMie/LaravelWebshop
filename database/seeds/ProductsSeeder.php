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

        //Basgitaren

        $product = new \App\Products([
            'product_name' => 'Mayones Jabba Mala 5 - Federico Malaman',
            'product_price' => 2848.99,
            'description' => 'Mayones bouwde deze signature Jabba bas voor de Italiaanse top sessie-bassist Federico Malaman. Met deze bas heb je het hele spectrum te pakken van wat een Jazz Bass kan, maar met een moderne touch. Van klassieke fingerstyle (passief) tot heldere plectrum partijen (aktief), alles uit 1 bas. Heel mooi afgewerkt in Satine Dirty Blue Burst kleurstelling. ',
            'image' => '../images/products/mayonesbass.jpg',
            'category_id' => 2,
        ]);
        $product->save();

        $product = new \App\Products([
            'product_name' => 'Sire Marcus Miller P7 2nd Gen alder 4-string bass guitar antique white',
            'product_price' => 549.99,
            'description' => 'Sire heeft heel snel veel furore gemaakt in de baswereld door niemand minder dan Marcus Miller zijn naam laten verbinden aan dit nieuwe merk. Maar dat doet een topbassist als Marcus Miller natuurlijk niet zomaar. Deze bassen zijn echt goed, heel erg goed. Ze klinken fantastisch in elke situatie.

            Deze P7+ is alweer de 2de generatie van Sire. Ze hebben een paar toffe aanpassingen gedaan aan hun modellen. Onder andere hebben ze de rand van de fretboard afgerond zodat deze minder scherp aanvoelt. De Pickups zijn volledig vernieuwd. En deze bas heeft nu een Ebony fretboard in plaats van palissander!!',
            'image' => '../images/products/marcusbass.jpg',
            'category_id' => 2,
        ]);
        $product->save();

        $product = new \App\Products([
            'product_name' => 'Fender American Deluxe Jazz Bass V Ash',
            'product_price' => 1198.99,
            'description' => 'Prachtige Fender 5 snarige bas.',
            'image' => '../images/products/fenderbass.jpeg',
            'category_id' => 2,
        ]);
        $product->save();

        //Microfoons

        $product = new \App\Products([
            'product_name' => 'sE Electronics V7X',
            'product_price' => 98.99,
            'description' => 'Na het overweldigende succes van de V7 dynamisch handheld microfoon komt sE Electronics nu met een versie die meer geschikt is voor instrumenten. Een nieuw ontworpen membraan die een meer open laag weergeeft dan de gewone V7. Ook heeft hij een iets kleinere kop zodat hij ook makkelijker te positioneren is op bijvoorbeeld een snaredrum. Eigenlijk kan hij alles aan van gitaarversterkers tot koperblazers en van drums tot zang. Uiteraard is ook bij de V7X het membraan in een shockmount bevestigd wat hem geschikt maakt voor live gebruik.',
            'image' => '../images/products/sE.jpg',
            'category_id' => 3,
        ]);
        $product->save();

        $product = new \App\Products([
            'product_name' => 'Warm Audio WA-47Jr Studio Microphone',
            'product_price' => 348.99,
            'description' => 'Als je aan 100 studio technici vraagt wat de beste microfoon is, zullen de meesten antwoorden met Neumann U47. Neumann bouwde twee modellen van deze microfoon, een buizenmicrofoon en een FET variant. Het grote probleem van deze microfoon is dat hij zeer zeldzaam is, zeer gevoelig is en bovendien praktisch onbetaalbaar. Warm Audio heeft hierom een eigen variant van deze U47 FET gemaakt. In tests naast het origineel komt deze microfoon behoorlijk dichtbij het origineel. En dan te bedenken dat de prijs van de WA-47Jr echt maar een fractie is van het origineel. Universeel in te zetten op allerlei bronnen van zang, gitaar, bas, blazers. Deze microfoon is zelfs een favoriet op bassdrum voor veel producers.
            Doe jezelf een plezier en gun jezelf een microfoon van deze klasse, voor de prijs hoef je het niet meer te laten. Je zal merken dat opnames gelijk een stuk professioneler zullen klinken.',
            'image' => '../images/products/warmaudio.jpg',
            'category_id' => 3,
        ]);
        $product->save();
        $product = new \App\Products([
            'product_name' => 'Blue Yeti Silver',
            'product_price' => 138.99,
            'description' => 'Of je nu een fervent YouTuber, interviewer of muzikant bent, met de Blue Yeti neem je al je geluiden binnen no time op. Sluit de usb microfoon gemakkelijk aan op je computer en begin direct met opnemen. Met de handige schakelaar kies je tussen 4 verschillende richtingskarakteristieken. Hierdoor is de microfoon geschikt voor verschillende soorten opnames. Voorzie je livestream op YouTube van geluid met de cardioïde modus, terwijl je het geluid van hele bands opneemt met de omnidirectional modus. De Yeti heeft een verstelbare arm, zodat je de microfoon altijd in de juiste richting kunt plaatsen.',
            'image' => '../images/products/blueyeti.jpg',
            'category_id' => 3,
        ]);
        $product->save();

        //Drums
        $product = new \App\Products([
            'product_name' => 'Digital Drums 400 Elektronisch Drumstel + Versterker Pakket',
            'product_price' => 400.49,
            'description' => 'Het DD400 is een elektronisch drumstel van Gear4music met een extreem compact frame, ideaal voor in slaapkamers, kleine studios of oefenruimtes. Een stille kickdrum controllerpedaal en hoofdtelefoonuitgang zorgen ervoor dat u kunt oefenen zonder andere te sturen. Het drumstel komt tevens met allerlei verschillende aansluitingsmogelijkheden zodat u met uw computer digitaal kunt uitbreiden. Er zijn 10 voorgeprogrammeerde kits, 108 voices en 40 patronen om mee te spelen op dit responsieve en gebruiksvriendelijke digitale drumstel wat het ideaal maakt voor zowel beginners als de meer gevorderde drummer.
            Inbegrepen in dit pakket zijn een hoofdtelefoon, drumstokken, een drumkruk en een versterker.',
            'image' => '../images/products/edrums.jpg',
            'category_id' => 4,
        ]);
        $product->save();

        $product = new \App\Products([
            'product_name' => 'Yamaha JSBP2F5RBL Stage Custom Birch shellset Raven Black',
            'product_price' => 718.99,
            'description' => 'Schitter op het podium met de vernieuwde Yamaha Stage Custom Birch shellset. Afgewerkt in de diepzwarte kleur Raven Black voor een chique uitstraling. Deze vijfdelige shellset heeft een rockconfiguratie en bestaat uit een 22 inch bassdrum, een 10 en 12 inch tom, een 16 inch floortom en een 14 x 5.5 inch snaredrum. Voorzien van volledig berkenhouten ketels voor een heldere attack en universele sound.',
            'image' => '../images/products/yamahadrums.jpg',
            'category_id' => 4,
        ]);
        $product->save();

        $product = new \App\Products([
            'product_name' => 'Tama CK48S-MGD Superstar Classic Midnight Gold Sp. 4d shellset',
            'product_price' => 554.99,
            'description' => 'Al meer dan veertig jaar komt de naam Superstar voor in het assortiment van Tama. En iedere keer opnieuw weet Tama de serie opnieuw te verbeteren. Dat zie je ook weet terug in de Superstar Classic-serie, waarvan de solide basis wordt gevormd door esdoornhouten ketels (Maple). Deze houtsoort zorgt voor een krachtige, volle klank, zeker in combinatie met de moderne ketelhardware. De CK48S-configuratie bestaat uit een 18x14 inch bassdrum, een 12x8 inch tom, een 14x14 inch floortom en een 14x5 inch snaredrum. Doordat deze set is afgewerkt met een wrap is deze voordeliger dan de sets met een lak-afwerking. Deze variant heeft een Midnight Gold Sparkle-wrap.',
            'image' => '../images/products/tamadrums.jpeg',
            'category_id' => 4,
        ]);
        $product->save();
    }
}
