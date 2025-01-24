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
        $request->validate([
            'name' => 'string',
            'phone' => 'required | string',
            'password' => 'required',
        ]);



        $id = Members::where('id', session("sExecutiveId")->id)->first();

        $id->name = $request->name;
        $id->phone = $request->phone;
        $id->password = $request->password;

        $id->save();
        return view('Pages.Executive.profile')
            ->with('data', $id);
    }
}
