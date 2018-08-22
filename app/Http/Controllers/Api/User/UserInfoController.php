<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\UpdateUserRequest;
use Auth;

class UserInfoController extends ApiController
{

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request)
    {
        $updatedUser = $request->only(['full_name', 'address', 'gender', 'phone', 'identity_card', 'avatar', 'dob']);
        $user = Auth::user();
        try {
            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                $newImage = time() . '-' . str_random(8) . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path(config('define.images_path_users'));
                $updatedUser['avatar'] = $newImage;
                $image->move($destinationPath, $newImage);
            }
            UserInfo::updateOrCreate(['user_id' => $user->id], $updatedUser);
            $user->load('userinfo');
            return $this->showOne($user, Response::HTTP_OK);
        } catch (Exception $e) {
            return $this->errorResponse(trans('messages.update_user_fail'), Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return $this->showOne($user, Response::HTTP_OK);
    }
}
