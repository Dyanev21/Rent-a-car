<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Requests\UserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(config('constants.per_page'));

        return view('admin.user.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update($request->all());

        return redirect(route('user.index'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(UserRequest $request)
    {
        $formRequest = $request->all();

        $formRequest['password'] = bcrypt($formRequest['password']);

        User::create($formRequest);

        return redirect(route('user.index'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect(route('user.index'));
    }
}
