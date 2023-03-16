<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(15);

        return view('user.event.index', ['events' => $events]);
    }

    public function show(Event $event)
    {
        return view('user.event.show', ['event' => $event]);
    }
}
