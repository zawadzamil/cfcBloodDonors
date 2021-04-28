<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class RequestManagement extends Controller

{
    public function showContact()
    {
        return view('contact');
    }
    public function addMessagetoDatabase(Request $value)
    {



        $message_data = new Message([
            'yname' => $value->get('yname'),
            'phone' => $value->get('phone'),
            'pname' => $value->get('pname'),
            'address' => $value->get('address'),
            'group' => $value->get('group'),
            'message' => $value->get('message'),
            'date' => $value->get('date'),
        ]);
        $message_data ->save();


        return redirect()->back()->with('success', 'Your Message is Received. We Shall Contact You Soon');

    }
}
