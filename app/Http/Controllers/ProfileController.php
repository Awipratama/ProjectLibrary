<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit(?int $id = null)
    {
        $user = User::where("id", $id)->first();
        return view('profile.edit', ['user' => $user]);
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request, int $userId)
    {
        // Memastikan hanya admin yang bisa mengupdate user lain, atau user hanya bisa mengupdate profilnya sendiri
        // if (auth()->id() !== $user->id && !auth()->user()->isAdmin()) {
        //     abort(403, 'Unauthorized action.');
        // }

        try {
            $field = $request->validated();
            $user = User::find($userId);
            $user->name = $field['name'];
            $user->email = $field['email'];

            $user->save();
            return back()->withStatus(__('Profile successfully updated.'));
        } catch (\Exception $e) {
            return back()->withErrors(['error' => __('An error occurred while updating the profile.')]);
        }
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }

    public function destroy(int $userId)
    {
        $users = User::find($userId);
        $users->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
