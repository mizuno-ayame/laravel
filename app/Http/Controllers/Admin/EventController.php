<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use InterventionImage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(15);

        return view('admin.event.index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $this->eventValidate($request);

        try {
            DB::beginTransaction();

            // 画像処理
            $data['image1'] = $request->hasFile('image1') ? $this->eventImage($request->file('image1')) : null;
            $data['image2'] = $request->hasFile('image2') ? $this->eventImage($request->file('image2')) : null;
            $data['image3'] = $request->hasFile('image3') ? $this->eventImage($request->file('image3')) : null;
            $data['image4'] = $request->hasFile('image4') ? $this->eventImage($request->file('image4')) : null;

            Event::create([
                'event_name' => $data['event_name'],
                'sports'     => $data['sports'],
                'detail'     => $data['detail'],
                'image1'     => $data['image1'],
                'image2'     => $data['image2'],
                'image3'     => $data['image3'],
                'image4'     => $data['image4'],
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('admin.events.create')->with('error', '処理途中にエラーが発生しました。もう一度お願いします');
        }
        return redirect()->route('admin.home.index')->with('status', '登録に成功しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('admin.event.show', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('admin.event.edit', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $data = $this->eventValidate($request);

        try {
            DB::beginTransaction();

            // 画像処理
            $data['image1'] = $request->hasFile('image1') ? $this->eventImage($request->file('image1')) : null;
            $data['image2'] = $request->hasFile('image2') ? $this->eventImage($request->file('image2')) : null;
            $data['image3'] = $request->hasFile('image3') ? $this->eventImage($request->file('image3')) : null;
            $data['image4'] = $request->hasFile('image4') ? $this->eventImage($request->file('image4')) : null;

            $event->event_name = $data['event_name'];
            $event->sports     = $data['sports'];
            $event->detail     = $data['detail'];
            $event->image1     = $data['image1'];
            if(!empty($data['image2'])) $event->image2 = $data['image2'];
            if(!empty($data['image3'])) $event->image3 = $data['image3'];
            if(!empty($data['image4'])) $event->image4 = $data['image4'];
            $event->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('admin.events.edit', ['event' => $event->id])->with('error', '処理途中にエラーが発生しました。もう一度お願いします');
        }
        return redirect()->route('admin.home.index')->with('status', '編集に成功しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.home.index')->with('status', '削除しました。');
    }

    private function eventValidate($request)
    {
        $validatedData = $request->validate([
            'event_name' => 'required|max:255',
            'sports'     => 'required|max:255',
            'detail'     => 'required',
            'image1'     => 'required|mimes:jpg,jpeg,png,gif',
            'image2'     => 'nullable|mimes:jpg,jpeg,png,gif',
            'image3'     => 'nullable|mimes:jpg,jpeg,png,gif',
            'image4'     => 'nullable|mimes:jpg,jpeg,png,gif',
        ]);
        return $validatedData;
    }

    private function eventImage($image)
    {
        // アップロードされたファイル名を取得
        $file_name = $image->getClientOriginalName();
        // 取得したファイル名でストレージに保存
        $image->storeAs('public/images', $file_name);
        // 画像圧縮
        // $image = InterventionImage::make('storage/public/images/'.$file_name);
        // $image->orientate();
        // $image->resize(300,200);

        return $file_name;
    }
}
