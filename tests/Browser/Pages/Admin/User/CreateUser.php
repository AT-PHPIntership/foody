<?php

namespace Tests\Browser\Pages\Admin\User;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page;

class CreateUser extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/admin/users/create';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url())
                ->assertSee('Create User');
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param string $name name of field
     * @param string $content content
     * @param string $message message show when validate
     * 
     * @return void
     */
    public function assertValidate($name, $content, $message)
    {
        $browser->assertPathIs($this->url())
                ->assertSee($message);
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@element' => '#selector',
        ];
    }
}
