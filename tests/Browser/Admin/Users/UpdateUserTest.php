<?php

namespace Tests\Browser\Admin\Users;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use \Tests\Browser\Admin\AdminTestCase;
use Tests\Browser\Pages\Admin\User\UpdateUser;
use App\Models\User;

class UpdateUserTest extends AdminTestCase
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
        factory(User::class)->create();
    }

    /**
     * Test update user url
     *
     * @return void
     */
    public function test_update_user_url()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs($this->user)
                    ->visit(new UpdateUser);
        });
    }

    /**
     * List case for test validate for input
     *
     * @return array
     */
    public function list_test_case_update_user_validate()
    {
        return [
            ['full_name', '', 'The full name must be a string.'],
            ['birthday', '', 'The birthday does not match the format Y-m-d.'],
            ['phone', '', 'The phone format is invalid.'],
        ];
    }

    /**
     * Dusk test validate for input
     *
     * @param string $name name of field
     * @param string $content content
     * @param string $message message show when validate
     *
     * @dataProvider list_test_case_update_user_validate
     *
     * @return void
     */
    public function test_update_user_validate($name, $content, $message)
    {
        $this->browse(function (Browser $browser) use ($name, $content, $message) {
            $browser->loginAs($this->user)
                    ->visit(new UpdateUser)
                    ->type($name, $content)
                    ->press('Update User')
                    ->assertSee($message);
        });
    }
}
