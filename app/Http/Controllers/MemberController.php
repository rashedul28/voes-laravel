<?php

namespace App\Http\Controllers;

use App\Models\Executive;
use App\Models\Infoexecutives;
use App\Models\Infovolunteers;
use App\Models\Members;
use App\Models\Slot;
use App\Models\Volunteer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function addMember(Request $request)
    {
        $request->validate([
            'phone' => "required | min:11 |numeric",
            'role' => 'required',
        ]);


        $length = $request->input('length', 8); // Default length is 8
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
        $password = substr(str_shuffle($characters), 0, $length);



        $member = new Members();
        $executive = new Executive();
        $volunteer = new Volunteer();

        $member->phone = $request->phone;
        $member->password = $password;
        $member->name = "N/A";
        $member->image = "N/A";
        $member->department = $request->department;
        $member->role = $request->role;
        $member->joined = date('Y-m-d');

        $member->save();

        if ($request->role == "Volunteer") {
            $data = new Slot();
            $data->members_id = $member->id;


            $data->slot1 = "empty";
            $data->slot2 = "empty";
            $data->slot3 = "empty";
            $data->slot4 = "empty";
            $data->slot5 = "empty";
            $data->slot6 = "empty";

            $data->save();
        }

        // return view('Pages.Executive.addMembers');
        return back()->with('success', 'New member add successfully.');

        // $b = $member->id;
        // // dd($b);

        // if ($request->role == "Executive") {
        //     $executive->executive_id = $b;

        //     $executive->phone = $request->phone;
        //     $executive->password = $request->password;
        //     $executive->name = "RASHEDUL";
        //     $executive->image = "IMAGE";
        //     $executive->department = $request->department;
        //     $executive->role = $request->role;
        //     $executive->joined = date('Y-m-d');

        //     $executive->save();

        //     return view('Pages.Executive.addMembers');
        // } else if ($request->role == "Volunteer") {
        //     $volunteer->volunteer_id = $b;

        //     $volunteer->phone = $request->phone;
        //     $volunteer->password = $request->password;
        //     $volunteer->name = "RASHEDUL";
        //     $volunteer->image = "IMAGE";
        //     $volunteer->department = $request->department;
        //     $volunteer->role = $request->role;
        //     $volunteer->joined = date('Y-m-d');

        //     $volunteer->save();

        //     return view('Pages.Executive.addMembers');
        // }
    }


    public function executiveList()
    {
        $searchExecutive = Members::where('role', 'Executive')->get();;

        return view('Pages.Executive.executiveList')
            ->with('executives', $searchExecutive);

        // echo $searchExecutive;
    }


    public function volunteerList()
    {
        $searchVolunteer = Members::where('role', 'Volunteer')->get();

        return view('Pages.Executive.volunteerList')
            ->with('volunteers', $searchVolunteer);
    }
}
