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
        if (User::where('username', $input['username'])->first() || User::where('email', $input['email'])->first()) {
            $error = [
                'username' => 'The username has already been taken.',
                'email' => 'The email has already been taken.',
            ];
            return $this->errorResponse($error, Response::HTTP_UNPROCESSABLE_ENTITY);
        } else {
            $user = User::create($input);
            $data['token'] =  $user->createToken('token')->accessToken;
            $data['user'] =  $user;
            return $this->successResponse($data, Response::HTTP_OK);
        }
    }
}
