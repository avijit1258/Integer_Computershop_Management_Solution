<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class VendorsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
         $this->browse(function ($browser) {
            $browser->visit('/vendors')
                    ->type('name','Nadira')
                    ->type('adress', 'Khulna University')
                    ->type('contact_number', '01521454853')

                    ->press('GO')
                    
                    ->assertPathIs('/vendors');
        });



       
    }
}
