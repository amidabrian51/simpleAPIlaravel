<?php

use Illuminate\Database\Seeder;
use App\Member;
use Faker\Factory as Faker;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();

      foreach (range(1, 35) as $index) {
        Member::create([
          'title'=> $faker->sentence(5),
          'author'=> $faker->name(10),
          'description'=>$faker->paragraph(4),
          'comments'=>$faker->paragraph(2),
          'some_bool'=>$faker->boolean()
        ]);
      }

    }
}
