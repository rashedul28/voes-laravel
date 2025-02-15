<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class PosterController extends Controller
{
    public function eventPoster(Request $request, $id)

    {

        $id = Event::where('id', $id)->first();
        return view('Pages.Poster.event-poster')
            ->with('data', $id);
    }
}
