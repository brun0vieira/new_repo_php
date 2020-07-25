<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserResourceCollection;

class UserController extends Controller
{
    /*
    * @param User $user
    * @return UserResource
    */
    public function show(User $getuser): UserResource
    {
        return new UserResource($getuser);
    }

    /*
    * @return PersonResourceCollection
    */
    public function index(): UserResourceCollection
    {
        return new UserResourceCollection(User::all());
    }

    /*
    * @param Request $request
    * @return UserResource
    */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
        ]);

        $user = User::create($request->all());

        return new UserResource($user);
    }

    /*
    *   @param User $user
    *   @return \Illuminate\Http\JsonResponse
    *   @throws \Exception
    */
    public function destroy(User $deleteUser)
    {
        $deleteUser->delete();

        printf("\n\nThe following user was deleted: \n\n");
        print($deleteUser);

        return response()->json();
    }
}
