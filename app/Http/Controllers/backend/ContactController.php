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
            'phone_number' => 'string|min:11|max:17|regex:/^\d+$/',
            'msg_subject' => 'required|string|max:255|regex:/^[a-zA-Z0-9\s]+$/',
            'message' => 'required|string|max:1000',
        ], [
            'name.regex' => 'The name must contain only letters and spaces.',
            'phone_number.regex' => 'The phone number must contain only digits.',
            'msg_subject.regex' => 'The subject must contain only plain text (letters, numbers, and spaces).',
        ]);
        
        $message = new Contact();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone_number;
        $message->subject = $request->msg_subject;
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
