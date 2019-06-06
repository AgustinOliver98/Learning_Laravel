<?php

use App\User;
use App\Profession;
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
        $id_profession=Profession::where('title','Back-end Developer')->value('id');
        User::create(['name'=> 'Agustin Oliver',
            'email'=> 'afidjs@gmail.com',
            'password'=> bcrypt('laravel'),
            'id_profession'=>$id_profession
        ]);

        factory(User::class,20)->create();

    }
}
