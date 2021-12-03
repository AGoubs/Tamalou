<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;


class UserController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = User::getUserById(Auth::id());
        dd($user);
        //TODO return vue
    }

    /**
     * Show all users
     */
    public function showUsers()
    {
        $users = User::all();

        //TODO
        dd($users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function update(Request $request)
    {
        //TODO tester
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::getUserById(Auth::id());
        $user->fill($request->all())->save();
    }
}
