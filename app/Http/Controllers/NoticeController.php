<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function noticeCreatePage(Request $request)

    {
        return view('Pages.Executive.createNotice');
    }

    public function noticeCreatePageSubmit(Request $request)

    {
        $request->validate([
            "notice" => "required"
        ]);



        $store = new Notice();

        $store->notice = $request->notice;
        $store->datetime = date("Y-m-d");
        $store->save();


        return redirect(
            '/notice/archieve'
        );
    }


    public function noticeArchieve(Request $request)


    {
        $fetch = Notice::all();
        return view("Pages.Executive.noticeArchieve")
            ->with('notices', $fetch);
    }


    public function noticeRead(Request $request, $id)

    {
        $find = Notice::where('id', $id)->first();

        // dd($find);

        return view('Pages.Executive.readNotice')
            ->with('data', $find);
    }


    public function vNoticeList(Request $request)
    {
        $fetch = Notice::all();
        return view('Pages.Volunteer.notice')
            ->with('notices', $fetch);
    }

    public function vNoticeRead(Request $request, $id)
    {
        $find = Notice::where('id', $id)
            ->first();

        return view('Pages.Volunteer.noticeRead')
            ->with('data', $find);
    }
}
