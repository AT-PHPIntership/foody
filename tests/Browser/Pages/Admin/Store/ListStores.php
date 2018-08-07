<?php

namespace Tests\Browser\Pages\Admin\Store;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page;

class ListStores extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/admin/stores';
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
                ->assertSee('Store')
                ->assertSee('Create Store')
                ->assertSee('ID')
                ->assertSee('Name')
                ->assertSee('Address')
                ->assertSee('Active')
                ->assertSee('Show')
                ->assertSee('Edit')
                ->assertSee('Delete');
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
