<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;



class User_Test extends TestCase
{

    use RefreshDatabase;

    /**@test* */
    public function test_it_loads_the_users_list_page()
    {

        factory(User::class)->create([
            'name' => 'pepito'
        ]);

        $this->withExceptionHandling();

        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('listado de usuarios')
            ->assertSee('pepito');

        ob_end_flush();
    }


    /**@test* */
    public function test_it_show_user_id()
    {

        $user = factory(User::class)->create([
            'name' => 'Agustin Oliver'
        ]);
        $this->withExceptionHandling();

        $this->get('/usuarios/' . $user->id)
            ->assertStatus(200)
            ->assertSee('Agustin Oliver');
    }

    /**@test* */
    public function test_edit_user()
    {
        $this->withExceptionHandling();

        $this->get('/usuarios/5/edit')
            ->assertStatus(200)
            ->assertSee("Editando ID: 5");

    }

    /**@test* */

    public function test_404_if_user_is_not_found()
    {

        $this->get('/usuarios/10090')
            ->assertStatus(404)
            ->assertSee('Pagina no encontrada');
    }


    public function test_creates_a_new_user()
    {
        $this->post('usuarios/crear', [
            'name' => 'Agustin',
            'email' => 'aoli@styde.com',
            'password' => '143256'

        ])->assertRedirect(route('user.index'));

        $this->assertDatabaseHas('users', [
            'name' => 'Agustin',
            'email' => 'aoli@styde.com',

        ]);
    }

    /**@test* */
    public function test_name_is_required()
    {

        $this->from('usuarios/nuevo')
            ->post('usuarios/crear', [
                'name' => '',
                'email' => 'aoli@styde.com',
                'password' => '1432'
            ])
            ->assertRedirect('usuarios/nuevo')
            ->assertSessionHasErrors(['name']);
        $this->assertDatabaseMissing('users', [
            'email' => 'aoli@styde.com',
        ]);

    }
    /**@test**/
    public function test_it_loads_edit_page(){
        $user=factory(User::class)->create();

        $this->get("usuarios/{$user->id}/editar")
        ->assertStatus(200)
        ->assertViewIs('users.edit')
        ->assertSee('Editar Usuario')
        ->assertViewHas('user',function($viewUser)use ($user){
            return $viewUser->id === $user->id;
        });
    }
}
