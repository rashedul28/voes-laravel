<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\Slot;
use Illuminate\Http\Request;

class timeController extends Controller
{

    public function FreeTime(Request $request)
    {

        $data = Slot::where('members_id', session('sVolunteerId')->id)->first();
        return view("Pages.Volunteer.freeTime")
            ->with("data", $data);
    }

    public function FreeTimeSubmit(Request $request)
    {


        $data = Slot::where('members_id', session('sVolunteerId')->id)->first();

        // $membersId = session('sVolunteerId');
        // $save = new Slot();
        $data->members_id = session('sVolunteerId')->id;


        $data->slot1 = $request->slot1;
        $data->slot2 = $request->slot2;
        $data->slot3 = $request->slot3;
        $data->slot4 = $request->slot4;
        $data->slot5 = $request->slot5;
        $data->slot6 = $request->slot6;

        $data->save();

        return view("Pages.Volunteer.freeTime")
            ->with("data", $data);
    }


    public function Volunteers(Request $request)
    {

        $data = Members::where('role', 'Volunteer')->get();

        return view('Pages.Executive.availableVolunteer')
            ->with('msg', 'All Volunteers')
            ->with('data', $data);
    }

    public function VolunteersFree(Request $request)
    {
        $find = Slot::where($request->slot, 'Free')->pluck('members_id');

        $data = Members::whereIn('id', $find)->get();

        return view("Pages.Executive.availableVolunteer")
            ->with('msg', 'Free Volunteers')

            ->with('data', $data);
    }
}
