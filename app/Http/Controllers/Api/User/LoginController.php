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
        $data['user'] =  $user;
        return $this->successResponse($data, Response::HTTP_OK);
    }
}
