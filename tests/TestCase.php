<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\DatabaseMigrations;
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    protected $user;
    /**
     * Set up TestCase
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        Artisan::call('passport:install');
        $this->user = factory('App\Models\User')->create();
    }
 
}
