<?php

namespace App\Http\Controllers\backend;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::orderBy('id', 'desc')->get();

        // return $sliders;
        return view('backend.service.index', compact(var_name: 'services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();

        $request->validate([
            'icon' => 'required',
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'required|image|max:2048',
            'title_image' => 'required|image|max:2048',
            'status' => 'required'
        ]);

        $serviceStore = new Service();
        $serviceStore->icon = $request->icon;
        $serviceStore->title = $request->title;
        $serviceStore->slug = Str::slug( $request->title );
        $serviceStore->content = $request->content;
        $serviceStore->status = $request->status;

        if ($request->hasFile('title_image')) {
            $title_file = $request->file('title_image');
            $title_fileName = substr(md5(time(). $serviceStore->title), 0, 15) . '.' . $title_file->getClientOriginalExtension();
            $title_file->move(public_path(path: 'uploads/service'), $title_fileName);
            $serviceStore->title_image = 'uploads/service/' . $title_fileName;
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = substr(md5(time()), 0, 15) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/service'), $fileName);
            $serviceStore->image = 'uploads/service/' . $fileName;
        }
        // return $request->all();
        $serviceStore->save();

        if($serviceStore){
            return redirect()->route('service_List')->with('success', 'Service Input Successfully Done');
        }else{
            return redirect()->back()->with('error', 'Request Failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $services = Service::findOrFail($id);
        // return $sliders;
        return view('backend.service.show', compact( 'services'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $services = Service::findOrFail($id);
        // return $sliders;
        return view('backend.service.edit', compact(var_name: 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'icon' => 'required',
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'image|max:2048',
            'title_image' => 'image|max:2048',
            'status' => 'required'
        ]);

        $serviceStore = Service::findOrFail($id);
        $serviceStore->icon = $request->icon;
        $serviceStore->title = $request->title;
        $serviceStore->slug = Str::slug( $request->title );
        $serviceStore->content = $request->content;
        $serviceStore->status = $request->status;

        if ($request->hasFile('title_image')) {
            if (isset($serviceStore->image) && file_exists(public_path($serviceStore->title_image))) {
                @unlink(public_path($serviceStore->title_image));
            }
            $file = $request->file(key: 'title_image');
            $title_fileName = substr(md5(time()), 0, 15) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/service'), $title_fileName);
            $serviceStore->title_image = 'uploads/service/' . $title_fileName;
        }

        if ($request->hasFile('image')) {
            if (isset($serviceStore->image) && file_exists(public_path($serviceStore->image))) {
                @unlink(public_path($serviceStore->image));
            }
            $file = $request->file('image');
            $fileName = substr(md5(time()), 0, 15) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/service'), $fileName);
            $serviceStore->image = 'uploads/service/' . $fileName;
        }
        // return $request->all();
        $serviceStore->save();

        if($serviceStore){
            return redirect()->route('service_List')->with('success', 'Service Input Successfully Done');
        }else{
            return redirect()->back()->with('error', 'Request Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $serviceDelete = Service::findOrFail($id);
        if (isset($serviceDelete->image ) && file_exists(public_path($serviceDelete->image))) {
            @unlink(public_path($serviceDelete->image));
        }

        if (isset($serviceDelete->title_image ) && file_exists(public_path($serviceDelete->title_image))) {
            @unlink(public_path($serviceDelete->title_image));
        }
        $serviceDelete->delete();

        if($serviceDelete){
            return redirect()->back()->with('success', 'Service Item Delete Successfully Done');
        }else{
            return redirect()->back()->with('error', 'Request Failed');
        }
    }
}
