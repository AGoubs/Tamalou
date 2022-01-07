<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
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

    public function edit()
    {
        $user = User::getUserById(Auth::id());
        return view('edit_profil', compact('user'));
    }

    /**
     * Show all users
     */
    public function showUsers()
    {
        $users = User::all();
        dd($users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function update(HttpRequest $request)
    {
        $user = User::getUserById(Auth::id());

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        if ($request->email !== $user->email) {
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);
        }

        $user->fill($request->all())->save();

        return redirect('/');
    }
}
