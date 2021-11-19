<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{

    /**
     * Show all users
     */
    public function showUsers()
    {
        $users = User::all();
    }
}