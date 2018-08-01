<?php

namespace Tests\Browser\Admin\Categories;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use \Tests\Browser\Admin\AdminTestCase;
use Tests\Browser\Pages\Admin\Category\ListCategories;

class DeleteCategoryTest extends AdminTestCase
{
    protected $category;
    /**
     * Override function setUp() for make user login
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->category = factory('App\Models\Category')->create();
    }

    /**
     * Test button delete category in List Categories
     *
     * @return void
     */
    public function test_click_cancel_delele_on_pop_up()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs($this->user)
                ->visit(new ListCategories)
                ->click('#delete-'. $this->category->id)
                ->assertDialogOpened('Do you want to delete this Category?')
                ->dismissDialog();
            $this->assertDatabaseHas('categories', ['deleted_at' => null]);
        });
    }

    /**
     * Test click button Delete
     *
     * @return void
     */
    public function test_click_confirm_delete_on_pop_up()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs($this->user)
                ->visit(new ListCategories)
                ->click('#delete-'. $this->category->id)
                ->assertDialogOpened('Do you want to delete this Category?')
                ->acceptDialog()
                ->assertSee('Delete Category Successfull!');
            $this->assertDatabaseMissing('categories', ['deleted_at' => null]);
        });
    }
}
