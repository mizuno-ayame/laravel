<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.home');
    }

    public function getUsers()
    {
        $users = User::paginate(15);
        return view('admin.user.index', ['users' => $users]);
    }

    public function getUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.show', ['user' => $user]);
    }
}
