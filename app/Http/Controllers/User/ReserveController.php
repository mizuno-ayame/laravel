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
    const RESERVE_LIMIT_NUM = 400;
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

    public function getPastReserve()
    {
        $today = Carbon::today();
        $reserves = Auth::user()->reserves()
        ->where('check_in', '<=', $today)
        ->orderBy('check_in', 'asc')
        ->get();

        return view('user.reserve.indexPast', ['reserves' => $reserves]);
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
        //予約日が被っていないないかのチェック
        $user_re=Reservation::where('user_id', $request['user_id'])
        ->where('check_in', '>=', $data['check_in'])
        ->where('check_out', '<=', $data['check_out'])
        ->first();
        if(!empty($user_re)){
            return redirect()->route('user.reserve.create')
            ->with(
                'error',
                'お申込みされた日付で予約が入っています。もう一度お願いします'
            );
        }

        //宿泊人数のチェック
        $re=Reservation::select(
            'adult_num as anum',
            'child_num as cnum',
            'check_in',
            'check_out'
        )->where('check_in', '>=', $data['check_in'])
        ->where('check_out', '<=', $data['check_out'])
        ->get();

        $total=0;
        foreach($re as $v){
            $total +=($v->anum+$v->cnum);
        }
        if(self::RESERVE_LIMIT_NUM < $total){
            return redirect()->route('user.reserve.create')
            ->with(
                'error',
                '予約人数が多いです。もう一度お願いします'
            );
        }


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
        if(Auth::id() !== $reserve->user_id){
            abort(404);
        }
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
        if(Auth::id() !== $reserve->user_id){
            abort(404);
        }
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
