<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        $users = User::all();

        return view('users.index', ['users' => $model->paginate(15)]);
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('profile.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:8',
        ]);

        $users = User::findOrFail($id);
        $users->name = $request->name;
        $users->email = $request->email;

        if ($request->filled('password')) {
            $users->password = bcrypt($request->password);
        }

        $users->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }
}
