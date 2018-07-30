<?php

namespace Tests\Browser\Admin\Categories;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Browser\Admin\AdminTestCase;
use Tests\Browser\Pages\Admin\Category\CreateCategory;

class CreateCategoryTest extends AdminTestCase
{
    use DatabaseMigrations;

    /**
     * Override function setUp() for make user login
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCreateCategory()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs($this->user)
                    ->visit(new CreateCategory());
        });
    }
}
