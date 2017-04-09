<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SubCatagoriesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
       $this->browse(function ($browser) {
            $browser->visit('/sub_catagories')
                     ->type('name','Rahad')
                    ->select('catagory_id', 35)
                    
                    ->press('Add SubCatagory')
                    ->assertPathIs('/sub_catagories');
        });

    }
}
