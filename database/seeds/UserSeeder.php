<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('ne_NP');
        for( $i = 0 ; $i<10; $i++ ){
            $user = User::create([
                'first_name'=> $faker->firstName,
                'last_name'=> $faker->lastName,
                'email'=> $faker->email,
                'user_name'=> $faker->userName,
                'contact_number'=> $faker->phoneNumber,
                'address'=> $faker->address,
                'country'=> $faker->country,
            ]);
            echo $user->name ."Seeded" . PHP_EOL;
        }
    }
}
