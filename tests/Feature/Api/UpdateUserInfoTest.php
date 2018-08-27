<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Response;
use App\Models\User;

class UpdateUserInfoTest extends TestCase
{
   use DatabaseMigrations;

   /**
    * Set up user
    *
    * @return void
    */
   public function setUp()
   {
       parent::setUp();
       factory(User::class)->create();
       Artisan::call('passport:install');
   }

   /**
    * Return structure of json.
    *
    * @return array
    */
   public function jsonStructureGetProfile()
   {
       return [
           "result"=> [
               "id",
               "username",
               "full_name",
               "gender",
               "phone",
               "email",
               "created_at",
               "updated_at",
               "deleted_at",
           ],
           "code"
       ];
   }

   /**
    * Test status code
    *
    * @return void
    */
   public function test_get_user_info()
   {
       $user = User::find(1);
       $login = [
           'username' => $user->username,
           'password' => '12345'
       ];
       $response = $this->json('POST', '/api/login', $login, ['Accept' => 'application/json']);
       $token = json_decode($response->getContent())->result->token;
       $this->json('GET', 'api/users/info', [], ['Accept' => 'application/json', 'Authorization' => 'Bearer '.$token])
           ->assertStatus(200)
           ->assertJsonStructure($this->jsonStructureGetProfile());
   }
    /**
    * Test check some object compare database.
    *
    * @return void
    */
   public function test_compare_database()
   {
       $user = User::find(1);
       $login = [
           'username' => $user->username,
           'password' => '12345'
       ];
       $responseLogin = $this->json('POST', '/api/login', $login, ['Accept' => 'application/json']);
       $token = json_decode($responseLogin->getContent())->result->token;
       $responseProfie = $this->json('GET', 'api/users/info', [], ['Accept' => 'application/json', 'Authorization' => 'Bearer '.$token]);

       $data = json_decode($responseProfie->getContent())->result;
       $arrayUser = [
           'id' => $data->id,
           'username' => $data->username,
           'email' => $data->email
       ];
       $this->assertDatabaseHas('users', $arrayUser);
   }
}
