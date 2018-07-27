<?php

namespace Tests\Browser\Admin\Users;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\User;

class ShowListUserTest extends DuskTestCase
{
    use DatabaseMigrations;

    const NUMBER_RECORD = 14;
    const ROW_LIMIT = 5;

    /**
    * Override function setUp() for make user login
    *
    * @return void
    */
    public function setUp()
    {
        parent::setUp();
        factory(User::class, self::NUMBER_RECORD)->create();
    }

    // /**
    //  * A Dusk test example.
    //  *
    //  * @return void
    //  */
    // public function testExample()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/')
    //                 ->assertSee('Laravel');
    //     });
    // }

    /**
     * A Dusk test show list user.
     *
     * @return void
     */
    public function testShowListUser()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs($this->user)
                    ->visit('/admin/users')
                    ->assertPathIs('/admin/users')
                    ->assertSee('List Users');
        });
    }

    /**
     * A Dusk test show record with table has data.
     *
     * @return void
     */
    public function testShowRecord()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs($this->user)
                    ->visit('/admin/users')
                    ->assertSee('List Users');
            $elements = $browser->elements('.table tbody tr');
            $this->assertCount(self::ROW_LIMIT, $elements);
        });
    }

    /**
     * Test view Admin List Users with pagination
     *
     * @return void
     */
    public function testListUsersPagination()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs($this->user)
                    ->visit('/admin/users')
                    ->assertSee('List Users');
            $number_page = count($browser->elements('.pagination li')) - 2;
            $this->assertEquals($number_page, ceil((self::NUMBER_RECORD) / (self::ROW_LIMIT)));
        });
    }
}
