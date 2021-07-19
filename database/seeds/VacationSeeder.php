<?php
use App\Vacation;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class VacationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $vacation = new Vacation();
            $vacation->image_url = $faker->imageUrl(640, 480, 'Vacation');
            $vacation->country = $faker->state();
            $vacation->city = $faker->city();
            $vacation->price = $faker->numberBetween(1000, 50000);
            $vacation->start_date = $faker->dateTimeThisYear();
            $vacation->duration = $faker->numberBetween(2,30);
            $vacation->person = $faker->numberBetween(1,10);
            $vacation->description = $faker->text();
            $vacation->save();
        }
    }
}