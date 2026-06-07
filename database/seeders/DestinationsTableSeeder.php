<?php

namespace Database\Seeders;

use App\Category;
use App\Destinations;
use App\Tag;
use Illuminate\Database\Seeder;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create(['name' => 'Family travel']);
        $category2 = Category::create(['name' => 'Weekend Getaway']);
        $category3 = Category::create(['name' => 'Summer']);
        $category4 = Category::create(['name' => 'Explore the wild']);
        $category5 = Category::create(['name' => 'The Group Tour.']);
        $category6 = Category::create(['name' => 'The Gap Year.']);
        $category7 = Category::create(['name' => 'Road Trip.']);
        $category8 = Category::create(['name' => 'Solo travel']);
        $category9 = Category::create(['name' => 'Travel with friends']);

        $destination1 = Destinations::create([
            'pricing' => 'Rp 9.000.000',
            'title' => 'Paris, France',
            'description' => 'The City of Lights — iconic landmarks, world-class cuisine, and timeless romance await around every cobblestone corner.',
            'content' => 'Paris needs no introduction. From the iron lattice of the Eiffel Tower piercing the skyline to the hallowed halls of the Louvre housing the Mona Lisa, every moment in Paris feels cinematic. Stroll along the Seine at sunset, lose yourself in the charming streets of Montmartre, and savour buttery croissants at a sidewalk café. Visit the gothic masterpiece of Notre-Dame, explore the bohemian Marais district, and watch the city sparkle from the steps of Sacré-Cœur. Whether you\'re sipping wine in a hidden courtyard or browsing the bookstalls along the Left Bank, Paris delivers an experience that lingers long after you leave. This tour includes guided visits to Versailles, a Seine river cruise, and a food-tasting walk through Le Marais.',
            'category_id' => $category1->id,
            'image' => 'images/destination-1.jpg',
            'published_at' => now(),
            'duration' => '5 Days / 4 Nights',
            'group_size' => '8-12 People',
            'tour_type' => 'Cultural & Sightseeing',
        ]);

        $destination2 = Destinations::create([
            'pricing' => 'Rp 6.000.000',
            'title' => 'Italian Riviera',
            'description' => 'Sun-drenched coastlines, pastel villages clinging to cliffs, and the freshest Mediterranean cuisine you\'ll ever taste.',
            'content' => 'The Italian Riviera, stretching along the Ligurian coast, is where dramatic cliff faces meet crystal-clear turquoise waters. Begin in glamorous Portofino, where luxury yachts bob in a tiny harbour surrounded by painted facades. Hike the legendary Cinque Terre trail connecting five centuries-old fishing villages — Monterosso, Vernazza, Corniglia, Manarola, and Riomaggiore — each more photogenic than the last. Feast on fresh pesto (invented right here in Genoa), focaccia di Recco, and locally caught seafood paired with crisp Vermentino wine. Explore the elegant promenades of Santa Margherita Ligure, swim in secluded coves accessible only by boat, and watch the sunset paint the Mediterranean gold from a terraced vineyard. This tour includes boat transfers between villages, a cooking class, and guided coastal hikes.',
            'category_id' => $category3->id,
            'image' => 'images/destination-2.jpg',
            'published_at' => now(),
            'duration' => '6 Days / 5 Nights',
            'group_size' => '6-10 People',
            'tour_type' => 'Beach & Adventure',
        ]);

        $destination3 = Destinations::create([
            'pricing' => 'Rp 4.500.000',
            'title' => 'Bali, Indonesia',
            'description' => 'Where spiritual culture meets pristine beaches — Indonesia\'s tropical gem with centuries of rich heritage.',
            'content' => 'Bali is Indonesia\'s most famous island destination, with a history and culture deeply rooted in Hindu-Balinese traditions. Walk through the lush green rice terraces of Ubud, where ancient temples stand in harmony with nature. Explore the majestic Uluwatu temple perched on a cliff edge overlooking the Indian Ocean. Then, relax on the stunning sandy beaches of Seminyak or Nusa Dua, where warm waters offer fantastic surfing, diving, and sunsets. Enjoy authentic Balinese cuisine like Babi Guling, Bebek Betutu, and fresh seafood at Jimbaran bay. This all-inclusive package covers airport transfers, beachfront resort accommodation, a traditional Barong dance performance, a visit to Kintamani volcano, and a guided temple tour.',
            'category_id' => $category4->id,
            'image' => 'images/destination-3.jpg',
            'published_at' => now(),
            'duration' => '7 Days / 6 Nights',
            'group_size' => '10-15 People',
            'tour_type' => 'Beach & Culture',
        ]);

        // Create tags
        $tag1 = Tag::create(['name' => 'Travel']);
        $tag2 = Tag::create(['name' => 'Cruise']);
        $tag3 = Tag::create(['name' => 'Beach']);
        $tag4 = Tag::create(['name' => 'Adventure']);

        // Attach tags to destinations
        $destination1->tags()->attach([$tag1->id, $tag2->id]);
        $destination2->tags()->attach([$tag4->id, $tag3->id]);
        $destination3->tags()->attach([$tag1->id, $tag4->id]);
    }
}
