<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CatagoriesTest extends TestCase
{
	use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        // $this->visit('catagories')
        //     ->type('Printer_test', 'name')
        //     ->press('Add subcatagory')
        //     ->seePageIs('catagories');

        $this->browse(function ($browser) {
            $browser->visit('/home')
                    -> assertSee('Latest Transactions');
        });
    }
}
