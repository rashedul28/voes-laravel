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

    public function profileViewVolunteer(Request $request)
    {
        $profile = Members::where('id', session("sVolunteerId")->id)->first();

        // dd($id);
        // dd($profile);


        return view('Pages.Volunteer.profile')
            ->with('data', $profile);
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'name' => 'string',
            'phone' => 'required | string',
            'password' => 'required',
            // image
            // 'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // if ($request->file('image')) {
        $imagePath = $request->file('image')->store('images', 'public'); // Save image in storage/app/public/images
        // }



        $id = Members::where('id', session("sExecutiveId")->id)->first();

        $id->name = $request->name;
        $id->phone = $request->phone;
        $id->password = $request->password;
        $id->image = $imagePath;

        $id->save();

        return view('Pages.Executive.profile')
            ->with('data', $id);
    }



    public function profileUpdateV(Request $request)
    {
        $request->validate([
            'name' => 'string',
            'phone' => 'required | string',
            'password' => 'required',
            // image
            // 'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // if ($request->file('image')) {
        $imagePath = $request->file('image')->store('images', 'public'); // Save image in storage/app/public/images
        // }



        $id = Members::where('id', session("sVolunteerId")->id)->first();

        $id->name = $request->name;
        $id->phone = $request->phone;
        $id->password = $request->password;
        $id->image = $imagePath;

        $id->save();

        return view('Pages.Volunteer.profile')
            ->with('data', $id);
    }
}
