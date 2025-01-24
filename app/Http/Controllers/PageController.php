<?php

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function dashbordCount()
    {
        return view('Pages.Executive.dashboardCount');
    }
    public function loginExecutive()
    {
        return view('Pages.Executive.login');
    }
    public function profile()
    {
        return view('Pages.Executive.profile');
    }

    public function showAllMembersList()
    {
        return view("Pages.Executive.allMembersList");
    }

    public function executiveList()
    {
        return view("Pages.Executive.executiveList");
    }

    public function volunteerList()
    {
        return view("Pages.Executive.volunteerList");
    }

    public function addMember()
    {
        return view('Pages.Executive.addMembers');
    }

    public function allEvents()
    {
        return view('Pages.Executive.allEvents');
    }
    public function createEvent()
    {
        return view("Pages.Executive.createEvent");
    }
    public function manageEvents()
    {
        return view('Pages.Executive.manageEvents');
    }
    // public function ongoingEvents()
    // {
    //     return view('Pages.Executive.ongoingEvents');
    // }
    // public function archieveEvents()
    // {
    //     return view('Pages.Executive.archieveEvents');
    // }
    public function expenseLog()
    {
        return view('Pages.Executive.expenseLog');
    }
    public function fundingLog()
    {
        return view('Pages.Executive.fundingLog');
    }




    public function donationExternal()
    {
        return view('Pages.Executive.donationExternal');
    }

    public function donationInternal()
    {
        return view('Pages.Executive.donationInternal');
    }

    public function noticeCreate()
    {
        return view('Pages.Executive.createNotice');
    }

    public function noticeArchieve()
    {
        return view('Pages.Executive.noticeArchieve');
    }

    public function noticeRead()
    {
        return view('Pages.Executive.readNotice');
    }

    public function internalDonationLog()
    {
        return  view('Pages.Executive.internalDonationLog');
    }

    public function externalDonationLog()
    {
        return view('Pages.Executive.externalDonationLog');
    }

    public function applicationView()
    {
        return view('Pages.Executive.applicationView');
    }

    public function applicationRead()
    {
        return view('Pages.Executive.applicationRead');
    }

    public function applicationFeedback()
    {
        return view('Pages.Executive.applicationFeedback');
    }

    public function availableVolunteer()
    {
        return view('Pages.Executive.availableVolunteer');
    }


    // volunteer

    public function loginVolunteer()
    {
        return view('Pages.Volunteer.login');
    }

    public function showEvent()
    {
        return view('Pages.Volunteer.events');
    }

    public function showNotice()
    {
        return view('Pages.Volunteer.notice');
    }

    public function volReadNotice()
    {
        return view('Pages.Volunteer.noticeRead');
    }

    public function myFreeTime()
    {
        return view('Pages.Volunteer.freeTime');
    }

    public function sentApplication()
    {
        return view('Pages.Volunteer.application');
    }
}
