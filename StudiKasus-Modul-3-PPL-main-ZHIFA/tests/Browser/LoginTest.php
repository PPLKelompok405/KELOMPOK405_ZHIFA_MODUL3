<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
   // use DatabaseMigrations; 
    /**
     * A Dusk test example,
     * @group login
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(url:'/')
                    //->assertSee(text: 'started')
                    ->clicklink(link: 'Log in')
                    ->assertPathIs('/login')
                    ->type(field:'email', value: 'nsrnzhfh@gmail.com')
                    ->type(field:'password', value:'1202220137')
                    ->press(button: 'LOG IN')
                    ->assertPathIs(path: '/dashboard')
                    ;
        });
    }
}
