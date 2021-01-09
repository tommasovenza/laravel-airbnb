<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Apartment;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        // creiamo 10 appartamenti di prova
        for ($i=0; $i < 10; $i++) { 
            
            $new_apartment = new Apartment();
            // foreign key, assegno l'appartamento ad uno dei 3 utenti provvisori
            $new_apartment->user_id = rand(1, 3);
            $new_apartment->title = $faker->sentence();
            $new_apartment->description = $faker->text(1000);
            $new_apartment->address = $faker->streetAddress;
            $new_apartment->city = $faker->city;
            $new_apartment->cap = $faker->postcode;
            $new_apartment->district = $faker->stateAbbr;
            $new_apartment->image = $faker->imageUrl(640, 480, 'apartments');
            $new_apartment->rooms_number = rand(1, 5);
            $new_apartment->beds_number = rand(1, 5);
            $new_apartment->bathrooms_number = rand(1, 4);
            $new_apartment->square_meters = $faker->numberBetween(10, 300);
            $new_apartment->latitude = $faker->latitude();
            $new_apartment->longitude = $faker->longitude();
            $new_apartment->availability = $faker->boolean();
            $new_apartment->save();
        }
    }
}
