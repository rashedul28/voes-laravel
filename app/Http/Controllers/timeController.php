<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\Slot;
use Illuminate\Http\Request;

class timeController extends Controller
{

    public function FreeTime(Request $request)
    {
        $id = session('sVolunteerId');
        $data = Slot::where('members_id', $id)->first();
        return view("Pages.Volunteer.freeTime")
            ->with("data", $data);
    }

    public function FreeTimeSubmit(Request $request)
    {

        $id = session('sVolunteerId');
        $data = Slot::where('members_id', $id)->first();

        // $membersId = session('sVolunteerId');
        $save = new Slot();
        $save->members_id = $id;


        $save->slot1 = $request->slot1;
        $save->slot2 = $request->slot2;
        $save->slot3 = $request->slot3;
        $save->slot4 = $request->slot4;
        $save->slot5 = $request->slot5;
        $save->slot6 = $request->slot6;

        $save->save();

        return view("Pages.Volunteer.freeTime")
            ->with("data", $data);
    }


    public function Volunteers(Request $request)
    {
        $data = Members::where('role', 'Volunteer')->get();
        return view('Pages.Executive.availableVolunteer')
            ->with('data', $data);
    }

    public function VolunteersFree(Request $request)
    {
        $find = Slot::where($request->slot, '1')->pluck('members_id');

        $data = Members::whereIn('id', $find)->get();

        return view("Pages.Executive.availableVolunteer")
            ->with('data', $data);
    }
}
