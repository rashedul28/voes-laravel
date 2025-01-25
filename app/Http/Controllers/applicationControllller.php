<?php

namespace App\Http\Controllers;

use App\Models\Inqurie;
use Illuminate\Http\Request;

class applicationControllller extends Controller
{
    public function application(Request $request)

    {
        return view("Pages.Volunteer.application");
    }


    public function applicationSubmit(Request $request)

    {
        $request->validate([
            "subject" => 'required',
            "body" => 'required'
        ]);

        $membersId = session('sVolunteerId')->id;

        $save = new Inqurie();

        $save->members_id = $membersId;
        $save->subject = $request->subject;
        $save->body = $request->body;
        $save->read = 0;

        $save->save();

        return view('Pages.Volunteer.application');
    }


    public function applicationView(Request $request)

    {
        $data = Inqurie::all();
        return view("Pages.Executive.applicationView")
            ->with("data", $data);
    }

    public function applicationRead(Request $request, $id)

    {
        $data = Inqurie::where('members_id', $id)->first();
        return view("Pages.Executive.applicationRead")
            ->with('data', $data);
    }
}
