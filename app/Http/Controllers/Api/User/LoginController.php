<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use App\Http\Requests\User\RegisterRequest;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;

class LoginController extends ApiController
{
    /**
     * Login as user
     *
     * @return json authentication code
     */
    public function login()
    {
        if (Auth::attempt(['username' => request('username'), 'password' => request('password')])) {
            $user = Auth::user();
            $data['token'] =  $user->createToken('token')->accessToken;
            $data['user'] = $user;
            return $this->successResponse($data, Response::HTTP_OK);
        } else {
            return $this->errorResponse(config('define.login.unauthorised'), Response::HTTP_UNAUTHORIZED);
        }
    }

    /**
     * Logout
     *
     * @return 204
     */
    public function logout()
    {
        $user = Auth::user();
        $accessToken = $user->token();
        $accessToken->revoke();
        return $this->successResponse(null, Response::HTTP_NO_CONTENT);
    }
}
