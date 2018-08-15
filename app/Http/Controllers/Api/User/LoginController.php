<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use App\Http\Requests\User\RegisterRequest;
use App\Http\Controllers\Auth\RegisterController;

class LoginController extends ApiController
{
    /**
     * Register user
     *
     * @param App\Http\Requests\RegisterRequest $request validated request
     *
     * @return json authentication code with user info
     */
    public function register(RegisterRequest $request)
    {
        $input = $request->except('password');
        $input['password'] = bcrypt($request->password);
        $user = User::create($input);
        $data['token'] =  $user->createToken('token')->accessToken;
        //dd($user->createToken('token')->accessToken);
        $data['user'] =  $user;
        return $this->successResponse($data, Response::HTTP_OK);
        //return $user;
        //return $data['token'];
        // return $request;
    }
    // public function register(Request $request)
    // {
    //     // $user = User::find(1);
    //     // $data['token'] =  $user->createToken('token')->accessToken;
    //     //$data = $input;
    //     //dd($request);
    //     return $request;
    //     // $data['user'] =  $user;
    //     // return $this->successResponse($data, Response::HTTP_OK);
    // }

    public function test(Request $request)
    {
        
        $user = User::create([
            'username' => 'asasas',
            'full_name' => 'asassd',
            'gender' => 1,
            'phone' => '01652638375',
            'email' => 'lebavy1611@gmail.com',
            'birthday' => '1996-11-16',
            'role_id' => 3,
            'password' => '$2y$10$oCwTHNtFvuj8p6XbjsGOreNl7HRmT0MHwK0D6gvPkg0RHbJua3oR.'
        ]);
        $data['token'] =  $user->createToken('token')->accessToken;
        //dd($user->createToken('token')->accessToken);
        //$data['user'] =  $user;
        //return $this->successResponse($data, Response::HTTP_OK);
        return $data['token'];
        //return $user->createToken('token')->accessToken;
    }
}
