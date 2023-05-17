<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index ()
    {
        return view ('index');
    }

    public function updateUserDetails(Request $request)
    {
        $request->validate([
            'username' => ['required','string'],
            'phone' => ['required','digits:10'],
            'pin_code' => ['required','digits:6'],
            'address' => ['required','string','max:499'],


        ]);

        $user =User::findorFail(Auth::user()->id);
        $user->update([
            'name' => $request->username
        ]);
        $user->userDetail()->updateOrCreate(
            [
                'user_id' => $user->id,
            ],
            [
                'phone' => $request->phone,
                'pin_code' => $request->pin_code,
                'address' => $request->address,
            ]
        );
        return redirect()->back()->with('message','User Profile Updated');
    }
}
