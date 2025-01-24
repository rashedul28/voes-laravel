<?php

namespace App\Http\Controllers;

use App\Models\Executive;
use App\Models\Infoexecutives;
use App\Models\Members;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profileView(Request $request)
    {

        $profile = Members::where('id', session("sExecutiveId")->id)->first();

        // dd($id);
        // dd($profile);


        return view('Pages.Executive.profile')
            ->with('data', $profile);
    }

    public function profileUpdate(Request $request)
    {
        // $valid = $request->validate([
        //     'name' => 'required',
        //     'phone' => 'required',
        //     'password' => 'required',
        // ]);

        // if ($valid) {

        $phonePassword = Executive::where('id', session('sExecutiveId')->id)->first();
        $executiveInfo = Infoexecutives::where('executives_id', session('sExecutiveId')->id)->first();
        // $phonePassword->phone = $request->phone;
        // $phonePassword->password = $request->password;
        // $executiveInfo->name = $request->name;
        // $executiveInfo->image = $request->image;

        // $phonePassword->save();
        // $executiveInfo->save();
        dd(session('sExecutiveId'));
        // return view('Pages.Executive.profile');
        // }
    }
}
