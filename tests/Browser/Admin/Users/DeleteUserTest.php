<?php

namespace Tests\Browser\Admin\Users;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\User;
use Tests\Browser\Admin\AdminTestCase;

class DeleteUserTest extends AdminTestCase
{
    protected $userDel;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    /**
    * Override function setUp() database
    *
    * @return void
    */
    public function setUp()
    {
        parent::setUp();
        $this->userDel = factory(User::class)->create([
            'role_id' => '1'
        ]);
    }

    /**
     * Test button delete user
     *
     * @return void
     */
    public function test_cancel_confirm_delete()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs($this->user)
                ->visit('/admin/users')
                ->assertSee('List Users')
                ->click('#deleteUser-'. $this->userDel->id)
                ->assertDialogOpened('Are you sure want to delete?')
                ->dismissDialog();
            $this->assertDatabaseHas('users', ['deleted_at' => null]);
        });
    }

     /**
     * Test click button Delete
     *
     * @return void
     */
    public function test_confirm_delete()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs($this->user)
                ->visit('/admin/users')
                ->click('#deleteUser-'. $this->userDel->id)
                ->assertDialogOpened('Are you sure want to delete?')
                ->acceptDialog()
                ->assertSee(__('user.admin.delete_success'));
            $this->assertDatabaseMissing('users', ['id' => 2, 'deleted_at' => null]);
        });
    }
}
