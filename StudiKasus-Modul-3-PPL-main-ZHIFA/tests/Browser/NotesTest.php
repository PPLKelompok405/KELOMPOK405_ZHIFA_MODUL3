<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
   // use DatabaseMigrations; 
    /**
     * A Dusk test example,
     * @group notes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(url: '/')
                    //->assertSee('Laravel')
                    ->clicklink(link: 'Log in')
                    ->assertPathIs('/login')
                    ->type(field:'email', value: 'nsrnzhfh@gmail.com')
                    ->type(field:'password', value:'1202220137')
                    ->press(button: 'LOG IN')
                    //->assertPathIs(path: '/dashboard')
                    ->clickLink(link:'Notes')
                    ->assertPathIs(path: '/notes')
                    ->clickLink(link:'Create Note')
                    ->assertPathIs(path: '/create-note')
                    ->type(field: 'title', value: 'PPL MODUL 3')
                    ->type(field:'Description', value: 'praktikum ppl')
                    ->press(button: 'CREATE')
                    ->assertPathIs(path: '/notes')
                    ;
        });
    }
}
