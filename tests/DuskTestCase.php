<?php

namespace Tests;

use Laravel\Dusk\TestCase as BaseTestCase;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use App\Models\User;

abstract class DuskTestCase extends BaseTestCase
{
    use CreatesApplication;
    
    protected $user;
    /**
     * Override function setUp() for make user login
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->user = factory('App\Models\User')->create([
            'email' => 'johnathan.mckenzie@example.com',
            'password' => bcrypt('12345'),
            'username' => 'test',
            'full_name' => 'Le Ba Vy',
            'birthday' => '1996-07-05',
            'gender' => '1',
            'phone' => '01265265656',
            'role_id' => '1',
            'is_active' => '1',
            'remember_token' => str_random(10)
        ]);
    }

    
    /**
     * Prepare for Dusk test execution.
     *
     * @beforeClass
     * @return void
     */
    public static function prepare()
    {
        static::startChromeDriver();
    }

    /**
     * Create the RemoteWebDriver instance.
     *
     * @return \Facebook\WebDriver\Remote\RemoteWebDriver
     */
    protected function driver()
    {
        $options = (new ChromeOptions)->addArguments([
            '--disable-gpu',
            '--headless',
            '--window-size=1920,1080'
        ]);

        return RemoteWebDriver::create(
            'http://localhost:9515', DesiredCapabilities::chrome()->setCapability(
                ChromeOptions::CAPABILITY, $options
            )
        );
    }
}
