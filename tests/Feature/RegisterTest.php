<?php
use Illuminate\Foundation\Testing\RefreshDatabase;


uses(RefreshDatabase::class);

it('has errors if the details are not provided', function () {
   $this->post('register')
         ->assertSessionHasErrors(['name', 'email', 'password']);
});



it('registers the user', function () {
    $this->post('register',[
        'name' => 'John Doe',
        'email' => 'ahmad@gmail.co',
        'password' => 'password',
        'password_confirmation' => 'password'
    
    ])->assertRedirect('/home');


 $this->assertDatabaseHas('users',[
     'name' => 'John Doe',
     'email' => 'ahmad@gmail.co',
     
    ])
    ->assertAuthenticated();

        
 });
 