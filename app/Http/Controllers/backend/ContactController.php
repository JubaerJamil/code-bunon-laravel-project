<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientMessage = Contact::orderBy('id', 'desc')->get();
        return view('backend.contactMessage.index', compact('clientMessage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('frontend.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required|string|max:45|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|string|email|max:191',
            'phone_number' => 'string|min:7|max:17|regex:/^\+?[\d\s\-\(\)]+$/',
            'city' => 'required|string|max:55|regex:/^[a-zA-Z\s]+$/',
            'country' => 'nullable|string|max:25|regex:/^[a-zA-Z\s]+$/',
            'subject' => 'required|string|max:255|regex:/^[a-zA-Z0-9\s]+$/',
            'message' => 'required|string|max:1000',
        ], [
            'name.regex' => 'The name must contain only letters and spaces.',
            'city.regex' => 'The name must contain only letters and spaces.',
            'city.max' => 'The city name must not exceed 55 characters',
            'country.regex' => 'The name must contain only letters and spaces.',
            'country.max' => 'The country name must not exceed 25 characters',
            'phone_number.regex' => 'The phone number must contain only digits, spaces, parentheses, hyphens, and an optional leading +. ',
            'phone_number.min' => 'It must be at least 7 digit long. ',
            'phone_number.max' => 'It must not exceed 17 digits.',
            'subject.regex' => 'The subject must contain only plain text (letters, numbers, and spaces).',
        ]);
        
        $message = new Contact();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone_number;
        $message->city = $request->city;
        $message->country = $request->country;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        if($message){
            return redirect()->back()->with('success', 'Thanks for you message. We will contact you very soon!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $messageDelete = Contact::findOrFail($id);
        $messageDelete->delete();

        if($messageDelete){
            return redirect()->back()->with('success', 'Delete Successfully Done');
        }else{
            return redirect()->back()->with('error', 'Request Failed');
        }
    }
}
