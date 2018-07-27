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
            'email' => 'mclaughlin.ressie@example.com',
            'password' => bcrypt('12345'),
            'username' => 'test',
            'full_name' => 'Minh Hien',
            'birthday' => '1981-07-02',
            'gender' => '0',
            'phone' => '716.654.4798 x697',
            'role_id' => '2',
            'is_active' => '1',
            'remember_token' => 'mQ3XZYjb1KPae0ZR8a6GerpyUEqPaSpZSOwqPdUvNyUX2dSovkR6wQN0uUCX'
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
