<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistTest extends DuskTestCase
{
    // use DatabaseMigrations; 
    /**
     * A Dusk test example,
     * @group Register
     */
    public function testRegist(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(url:'/')
                    //->assertSee(text:'Enterprise Application Development')
                    ->clickLink(link: 'Register')
                    ->assertPathIs(path: '/register')
                    //->assertSee('Register')
                    ->type(field: 'name', value: 'test')
                    ->type(field: 'email', value: 'nsrnzhfh@gmail.com')
                    ->type(field: 'password', value:'1202220137')
                    ->type(field: 'password_confirmation', value:'1202220137')
                    ->press(button: 'REGISTER')
                    ->assertPathIs(path: '/dashboard')
                    ;
        });
    }
}
