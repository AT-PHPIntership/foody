<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;

class LoginController extends ApiController
{
    /**
     * Register user
     *
     * @param App\Http\Requests\CreateUserRequest $request validated request
     *
     * @return json authentication code with user info
     */
    public function register(Request $request)
    {
        $input = $request->only(['full_name', 'username', 'gender', 'phone', 'email', 'password']);
        // $mail = new SendMailUser($input);
        $input['password'] = bcrypt($input['password']);
        // $userInfo = $request->except(['username', 'email', 'password']);
        $user = User::create($input);
        // $userInfo['user_id'] = $user->id;
        // UserInfo::create($userInfoData);
        // Mail::to($user->email)->send($mail);
        //$data['token'] =  $user->createToken('token')->accessToken;
        $data['input'] = $input;
        return $request;
        //$data['user'] =  $user->load('userInfo');
        //return $this->successResponse($data, Response::HTTP_OK);
    }
}
