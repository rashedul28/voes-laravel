<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Exdonation;
use App\Models\Indonation;
use App\Models\Members;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashbordCount(Request $request)
    {
        $totalMember = Members::count();
        $totalEvent = Event::count();

        $internalTotalDonation = Indonation::sum('amount');
        $externalTotalDonation = Exdonation::sum('amount');

        $TotalDonation = $internalTotalDonation + $externalTotalDonation;



        // dd($totalMember);
        return view("Pages.Executive.dashboardCount")
            ->with("totalMember", $totalMember)
            ->with("totalEvent", $totalEvent)
            ->with("TotalDonation", $TotalDonation);
    }
}
