<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SellTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function ($browser) {
            $browser->visit('/sells')
                    ->select('product_id[]', 13)
                    ->type('quantity[]', 22)
                    ->type('unit_sell_price[]', 23)
                    ->type('customer_name', 'Debasish Chakroborti')
                    ->type('address', 'Khulna University')
                    ->type('contact_no', '01516183810')
                    ->press('Add')
                    ->assertPathIs('/sells');
        });

         $this->browse(function ($browser) {
            $browser->visit('/sells')
                    ->select('product_id[]', 15)
                    ->type('quantity[]', 16)
                    ->type('unit_sell_price[]',15 )
                    ->type('customer_name', 'Fatima Tabassum')
                    ->type('address', 'Khulna University')
                    ->type('contact_no', '01925688436')
                    ->press('Add')
                    ->assertPathIs('/sells');
        });
    }
}
