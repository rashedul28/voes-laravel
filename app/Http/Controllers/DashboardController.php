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
        $ongoing = Event::where('end', '>', date('Y-m-d'))->count();
        $archive = Event::where('end', '<', date('Y-m-d'))->count();

        $internalTotalDonation = Indonation::sum('amount');
        $externalTotalDonation = Exdonation::sum('amount');

        $TotalDonation = $internalTotalDonation + $externalTotalDonation;



        // dd($totalMember);
        return view("Pages.Executive.dashboardCount")
            ->with("totalMember", $totalMember)
            ->with("ongoing", $ongoing)
            ->with("archive", $archive)
            ->with("TotalDonation", $TotalDonation);
    }
}
