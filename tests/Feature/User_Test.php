<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class User_Test extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     *
     */
    public function test_it_loads_the_users_list_page()
    {
        $this->withExceptionHandling();

        $this->get('/usuarios')
            ->assertStatus(200)
            -> assertSee("listado de usuarios");
    }

    public function test_it_show_user_id(){

        $this->withExceptionHandling();

        $this->get('/usuarios/5')
             ->assertStatus(200)
            ->assertSee('5');
    }

    public function test_edit_user(){
        $this->withExceptionHandling();

        $this->get('/usuarios/5/edit')
            ->assertStatus(200)
            ->assertSee("Editando ID: 5");

    }
}
