<?php

namespace App\Http\Controllers;

use App\Models\Exdonation;
use App\Models\Indonation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function donationInternal()
    {
        return view('Pages.Executive.donationInternal');
    }

    public function donationInternalSubmit(Request $request)
    {
        $valid = $request->validate([
            'id' => 'required | ',
            'amount' => 'required | ',
        ]);

        if ($valid) {
            $in = new Indonation();

            $in->members_id = $request->id;
            $in->amount = $request->amount;

            $in->save();

            return view('Pages.Executive.donationInternal');
        }
    }



    public function donationExternal()
    {
        return view('Pages.Executive.donationExternal');
    }

    public function donationExternalSubmit(Request $request)
    {
        $in = new Exdonation();

        $in->name = $request->name;
        $in->phone = $request->phone;
        $in->amount = $request->amount;

        $in->save();

        return view('Pages.Executive.donationExternal');
    }


    public function internalDonationLog(Request $request)

    {
        $internal = Indonation::all();
        return view('Pages.Executive.internalDonationLog')
            ->with('internal', $internal);
    }

    public function externalDonationLog(Request $request)

    {
        $external = Exdonation::all();
        return view("Pages.Executive.externalDonationLog")
            ->with('external', $external);
    }
}
