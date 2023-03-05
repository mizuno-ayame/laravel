<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Reservation;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Carbon::today();
        $reserves = Reservation::where('check_in', '>=', $today)
        ->orderBy('check_in', 'asc')
        ->paginate(15);

        return view('admin.reserve.index', ['reserves' => $reserves]);
    }

    public function searchPeriod(Request $request)
    {
        $date1 = $request->from ?? null;
        $date2 = $request->to ?? null;
        $representative = $request->input('representative') ?? null;
        $clubName = $request->input('club_name') ?? null;

        $reservation = Reservation::query();

        if (!is_null($date1) || !is_null($date2)) {

            if (!empty($date1) && !empty($date2)) {
                $date1 = (new Carbon($date1))->format('Y-m-d');
                $date2 = (new Carbon($date2))->format('Y-m-d');
                $reservation->whereBetween('check_in', [$date1, $date2]);
            }
            else {
                if(!empty($date1)) {
                    $date1 = (new Carbon($date1))->format('Y-m-d');
                    $reservation->where('check_in', '>=', $date1);
                }

                if(!empty($date2)) {
                    $date2 = (new Carbon($date2))->format('Y-m-d');
                    $reservation->where('check_in', '<=', $date2);
                }
            }
        }

        // 代表者名
        if($representative) {
            $reservation->where('representative', $representative);
        }
        // 団体名
        if($clubName) {
            $reservation->where('club_name', $clubName);
        }

        $reserves = $reservation->orderBy('check_in', 'asc')
                            ->paginate(15);

        return view('admin.reserve.index', [
            'reserves' => $reserves,
            'date1' => $request->from,
            'date2' => $request->to,
            'representative' => $request->representative,
            'club_name' => $request->club_name,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reserve)
    {
        return view('admin.reserve.show', ['reserve' => $reserve]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
