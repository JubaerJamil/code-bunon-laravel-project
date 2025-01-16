<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')->get();

        // return $sliders;
        return view('backend.slider.index', compact('sliders'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'headline' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'required|image|max:2048',
            'status' => 'nullable'
        ]);

        $sliderStore = new Slider();
        $sliderStore->title = $request->title;
        $sliderStore->headline = $request->headline;
        $sliderStore->content = $request->content;
        $sliderStore->status = $request->status;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = substr(md5(time()), 0, 15) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/sliders'), $fileName);
            $sliderStore->image = 'uploads/sliders/' . $fileName;
        }
        // return $request->all();
        $sliderStore->save();

        if($sliderStore){
            return redirect()->route('slider_List')->with('success', 'Slider Input Successfully Done');
        }else{
            return redirect()->back()->with('error', 'Request Failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sliders = Slider::findOrFail($id);

        return view('backend.slider.edit', compact('sliders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:191',
            'headline' => 'required|string|max:191',
            'content' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        $sliderUpdate = Slider::findOrFail($id);
        $sliderUpdate->title = $request->title;
        $sliderUpdate->headline = $request->headline;
        $sliderUpdate->content = $request->content;
        $sliderUpdate->status = $request->status;

        if ($request->hasFile('image')) {
            if (isset($sliderUpdate->image) && file_exists(public_path(path: $sliderUpdate->image))) {
                @unlink(public_path($sliderUpdate->image));
            }
            $file = $request->file('image');
            $fileName = substr(md5(time()), 0, 15) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/img/slider'), $fileName);
            $sliderUpdate->image = 'assets/img/slider/' . $fileName;
        }
        $sliderUpdate->save();

        if($sliderUpdate){
            return redirect()->route('slider_List')->with('success', 'Slider Update Successfully Done');
        }else{
            return redirect()->back()->with('error', 'Request Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sliders = Slider::findOrFail($id);
        if (isset($sliders->image) && file_exists(public_path($sliders->image))) {
            @unlink(public_path($sliders->image));
        }
        $sliders->delete();

        if($sliders){
            return redirect()->back()->with('success', 'Slider Item Delete Successfully Done');
        }else{
            return redirect()->back()->with('error', 'Request Failed');
        }

    }
}
