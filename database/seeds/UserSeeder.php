<?php

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

        DB::table('users')->insert([
            'name'=> 'Agustin Oliver',
            'email'=> 'afidjs@gmail.com',
            'password'=> bcrypt('laravel'),
            'profession_id'=> DB::table('profession')->where('title','Back-end Developer')->value('id')
            ]);
    }
}
