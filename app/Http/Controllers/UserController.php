<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserPasswordRequest;
use App\Http\Requests\UpdateUserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;

class UserController extends Controller{

    // public function __construct()
    // {
    //     // parent::__construct();
    // }

    public function index()
    {
        $users = User::sortable()->paginate(10);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $user = new User();
        $user->role = 3; //set member default role
        return view('users.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requests\UserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $user = new User();
        $user->fill($request->validated());
        $user->password = Hash::make($user->password);
        $user->save();
        return redirect()->action('UserController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateUserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->fill($request->validated());
        $user->save();
        return redirect()->action('UserController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->action('UserController@index');
    }

    /**
     *Return reset view . (role:user-higher)
     */
    public function change_password()
    {
        $user = Auth::user();
        return view('users.change_password', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update_password(UpdateUserPasswordRequest $request, User $user)
    {
        $password = $request->validated();
        $user = User::where('id', Auth::id())->first();
        $user->password = Hash::make($password['password']);
        $user->save();
        return redirect()->action('BookController@index');
    }
}
