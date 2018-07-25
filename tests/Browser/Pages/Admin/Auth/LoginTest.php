<?php

namespace Tests\Browser\Pages\Admin\Auth;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\User;
use Faker\Generator as Faker;
class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test for Login Admin.
     *
     * @return void
     */
    public function createUser($role_id)
    {
        $email = ($role_id == 3)? 'libbie.damore@example.org' : 'johnathan.mckenzie@example.com';
        $user = User::where('email', $email)->first();
        if(!$user) {
            $faker = new Faker;
            $user = factory(User::class)->create([
                'email' => $email,
                'password' => bcrypt('12345'),
                'username' => $faker->username,
                'full_name' => $faker->name,
                'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'gender' => $faker->numberBetween($min = 0, $max = 1),
                'phone' => $faker->phoneNumber,
                'role_id' => $role_id,
                'is_active' => $faker->numberBetween($min = 0, $max = 1),
                'remember_token' => str_random(10),
            ]);
        }
        return $user;
    }

    /**
     * A Dusk test for Login Admin.
     *
     * @return void
     */
    public function testLoginAdmin()
    {
        $user = $this->createUser(User::ROLE_ADMIN);

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/admin/login')
                    ->type('email', $user->email)
                    ->type('password', '12345')
                    ->press('Login')
                    ->assertPathIs('/admin/dashboard');
        });
    }

    /**
     * A Dusk test for Logout Admin.
     *
     * @return void
     */
    public function testLogoutAdmin()
    {
        $user = $this->createUser(User::ROLE_ADMIN);
        $this->browse(function (Browser $browser) use($user) {
            $browser->loginAs($user)
                    ->visit('/admin/dashboard')
                    ->click('#logout-button')
                    ->assertVisible('#link-click-me')
                    ->visit(
                        $browser->attribute('#link-click-me', 'href')
                    )
                    ->assertPathIs('/admin/login');
        });
    }

    /**
     * A Dusk test for Login Not be Admin.
     *
     * @return void
     */
    public function testLoginAdminByUser()
    {
        $user = $this->createUser(User::ROLE_USER);
 
        $this->browse(function (Browser $browser) use ($user) {
             $browser->visit('/admin/login')
                     ->type('email', $user->email)
                     ->type('password', '12345')
                     ->press('Login')
                     ->assertPathIs('/');
        });
    }
}
