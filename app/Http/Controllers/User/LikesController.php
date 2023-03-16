<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;
use App\Like;
use Illuminate\Support\Facades\Auth;

class LikesController extends Controller
{
    public function like(Request $request)
    {
        $user_id = Auth::id();
        $event_id = $request->event_id;
        $already_liked = Like::where('user_id', $user_id)->where('event_id', $event_id)->first();

        if (!$already_liked) {
            $like = new Like;
            $like->event_id = $event_id;
            $like->user_id = $user_id;
            $like->save();
        } else {
            Like::where('event_id', $event_id)->where('user_id', $user_id)->delete();
        }

        $event_likes_count = Event::withCount('likes')->findOrFail($event_id)->likes_count;
        $param = [
            'event_likes_count' => $event_likes_count,
        ];
        return response()->json($param); //JSONデータをjQueryに返す
    }
}
