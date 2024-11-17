<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('greets the user if they are signed out', function () {
        $user= User::factory()->create();
   $this->get('/')
        ->assertSee('Sign in to see your feed.')
        ->assertSee('BookFriend')

        ->assertDontSee(['Feed']);
     

   
});

it('shows authenticated menu items if the user is signed in', function () {

        $user= User::factory()->create();

        $this->actingAs($user)
            ->get('/')
            ->assertSeeText(['Feed', 'My books', 'Add a book', 'Friends',$user->name]);
         
    
   
});

it('shows unauthenticated menu items if the user is not signed in', function () {

    

        $this->get('/')
        ->assertSeeText(['Login', 'Register']);
         
    
   
});


