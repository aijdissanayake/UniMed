<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class linkTest1 extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit('/doc')
                ->click('Patients')
                ->seePageIs('doc/patients');
        
        $this->visit('/doc')
                ->click('Lab')
                ->seePageIs('doc/lab');
        
        
    }
}
