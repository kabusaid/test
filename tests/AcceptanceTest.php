<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AcceptanceTest extends TestCase
{
    public function testNewUserRegistration()
    {
        $this->visit('/register')
            ->type('Taylor', 'name')
            ->check('terms')
            ->press('Register')
            ->seePageIs('/dashboard');
    }

    public function testUserAcceptTerms()
    {
        $this->visit('/register')
            ->type('Taylor', 'name')
            //->check('terms')
            ->press('Register')
            ->seePageIs('/register');
    }
}
