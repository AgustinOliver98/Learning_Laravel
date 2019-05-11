<?php

use App\Profession;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profession::create([
            'title' => 'Back-End Developer',
        ]);

        Profession::create([
            'title'=> 'Front-End Developer'
        ]);


    }
}
