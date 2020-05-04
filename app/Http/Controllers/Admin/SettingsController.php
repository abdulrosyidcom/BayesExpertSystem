<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SettingsController extends Controller
{
    public function profile()
    {
        return view('admin.settings.profile');
    }

    public function profileUpdate(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required',
            'name' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();

            if (Storage::disk('public')->exists('users/' . $user->image)) {
                if ($user->image !== 'default.jpg') {
                    Storage::disk('public')->delete('users/' . $user->image);
                }
            }

            $request->image->storeAs('users', $filename, 'public');
        } else {
            $filename = Auth::user()->image;
        }

        User::where('id', Auth::user()->id)->update([
            'username' => Str::slug($request->username),
            'name' => $request->name,
            'image' => $filename
        ]);

        return redirect('admin/profile')->with('toast_success', 'Profile Berhasil Diubah');
    }
}
