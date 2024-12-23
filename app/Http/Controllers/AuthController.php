<?php

namespace App\Http\Controllers;

use App\Models\Executive;
use App\Models\Members;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginExecutiveAuth(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'password' => 'required',
        ]);
        // if ($valid) {
        $check = Members::where('phone', $request->phone)->where('password', $request->password)->first();

        if ($check) {
            $request->session()->put('sExecutiveId', $check->id);
            $request->session()->put('authorized', true);
            return view('Pages.Executive.dashboardCount');
        } else {
            return back();
        }
        // }
    }

    public function loginVolunteerAuth(Request $request)
    {
        $valid = $request->validate([
            'phone' => 'required',
            'password' => 'required',
        ]);

        if ($valid) {
            $check = Members::where('phone', $request->phone)->where('password', $request->password)->first();

            if ($check) {
                return redirect('/events/showEvent/ongoing');
            } else {
                return back();
            }
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
    }
}
