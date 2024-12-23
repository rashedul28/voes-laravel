<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Expense;
use App\Models\Funding;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function createEventSubmit(Request $request)
    {
        $valid = $request->validate([
            'eventName' => 'required',
            'start' => 'required',
            'end' => 'required',
            'description' => 'required'
        ]);

        if ($valid) {

            // dd('ok');
            $store = new Event();
            $store->event_name = $request->eventName;
            $store->start = $request->start;
            $store->end = $request->end;
            $store->description = $request->description;

            $store->save();

            return back();
        }
    }


    public function allEvents(Request $request)
    {
        $get = Event::all();
        return view('Pages.Executive.allEvents')
            ->with('events', $get);
    }

    public function ongoingEvents(Request $request)

    {
        $ongoing = Event::where('end', '>', date('Y-m-d'))->get();
        // dd($ongoing);
        return view('Pages.Volunteer.events')
            ->with('ongoing', $ongoing);
    }

    public function archieveEvents(Request $request)

    {
        $archieve = Event::where('end', '<', date('Y-m-d'))->get();
        // dd($archieve);
        return view('Pages.Volunteer.events')
            ->with('ongoing', $archieve);
    }

    public function fundingLog(Request $request)
    {

        $now = date('Y-m-d');
        $get = Event::where('end', '>=', $now)->get();

        // dd($get);
        return view('Pages.Executive.fundingLog')
            ->with('lists', $get);
    }

    public function fundingLogSubmit(Request $request)
    {
        $request->validate([
            'eventName' => 'required | ',
            'amount' => 'required | ',
        ]);



        $in = new Funding();

        $in->event_name = $request->eventName;
        $in->amount = $request->amount;

        $in->save();
        return back();
    }



    public function expenseLog(Request $request)
    {
        $now = date('Y-m-d');
        $lists = Event::where('end', '>=', $now)->get();

        // dd($lists);
        return view('Pages.Executive.expenseLog')
            ->with('lists', $lists);
    }

    public function expenseLogSubmit(Request $request)
    {
        $request->validate([
            'eventName' => 'required',
            'amount' => 'required',
            'sector' => 'required',
        ]);

        $in = new Expense();

        $in->event_name = $request->eventName;
        $in->amount = $request->amount;
        $in->sector = $request->sector;

        $in->save();

        return back();

        // $now = date('Y-m-d');
        // $lists = Event::where('end', '>=', $now)->get();

        // return view("Pages.Executive.expenseLog")
        //     ->with('lists', $lists);
    }




    public function eventFinancialLogExpense(Request $request)
    {

        $exp = Expense::all();

        return view('Pages.Executive.eventFinancialLogExpense')
            ->with('exps', $exp);
    }

    public function eventFinancialLogFunding(Request $request)

    {
        $fund = Funding::all();

        return view('Pages.Executive.eventFinancialLogFunding')
            ->with('funds', $fund);
    }


    public function eventStatement(Request $request)
    {
        $ev = Event::all();

        return view("Pages.Executive.eventStatement")

            ->with('evs', $ev);
    }


    public function eventStatementPrint(Request $request)
    {
        $store = $request->event_name;

        // dd($store);

        $event = Event::where('event_name', $store)->first();
        // dd($event);

        $funding = Funding::where('event_name', $store)->get();

        $expense = Expense::where('event_name', $store)->get();

        $now = date('y-m-d');
        return view("Pages.Executive.eventStatementPrint")
            ->with('funding', $funding)
            ->with('expense', $expense)
            ->with('event', $event)
            ->with('date', $now);
    }
}
