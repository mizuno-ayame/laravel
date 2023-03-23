<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reservation;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $reserves = Auth::user()->reserves()
        ->where('check_in', '>=', $today)
        ->orderBy('check_in', 'asc')
        ->get();

        return view('user.reserve.index', ['reserves' => $reserves]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.reserve.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->reserveValidate($request);

        try {
            DB::beginTransaction();

            Reservation::create([
                'representative' => $data['representative'],
                'club_name'      => $data['club_name'],
                'check_in'       => $data['check_in'],
                'check_out'      => $data['check_out'],
                'meal'           => $data['meal'],
                'request'        => $data['request'],
                'start_at'       => $data['start_at'],
                'end_at'         => $data['end_at'],
                'adult_num'      => $data['adult_num'],
                'child_num'      => $data['child_num'],
                'institution'    => $data['institution'],
                'information'    => $data['information'],
                'user_id'        => $request['user_id'],
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('user.reserve.create')->with('error', '処理途中にエラーが発生しました。もう一度お願いします');
        }
        return redirect()->route('user.home.index')->with('status', '予約申込を受け付けました');
    }

    private function reserveValidate($request)
    {
        $validatedData = $request->validate([
            'representative' => 'required|max:255',
            'club_name'      => 'required|max:255',
            'check_in'       => 'required|date',
            'check_out'      => 'required|date',
            'meal'           => 'nullable|string',
            'request'        => 'nullable|string',
            'start_at'       => 'required|string',
            'end_at'         => 'required|string',
            'adult_num'      => 'required|integer|max:100|min:1',
            'child_num'      => 'required|integer|max:100|min:0',
            'institution'    => 'nullable|string',
            'information'     => 'nullable|string',
        ]);
        return $validatedData;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reserve)
    {
        $today = Carbon::today();
        $checkIn = new carbon($reserve->check_in);
        $diff = $today->diffInDays($checkIn);
         return view('user.reserve.show', [
            'reserve' => $reserve,
            'bool' => $diff < 7 ? true : false,
        ]);
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
    public function destroy(Reservation $reserve)
    {
        try {
            DB::beginTransaction();
            $reserve->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('user.reserve.show', ['reserve' => $reserve->id])->with('error', '処理途中にエラーが発生しました。もう一度お願いします');
        }

        return redirect()->route('user.reserve.index')->with('status', '予約をキャンセルしました。');
    }
}
