<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;

class ContactController extends Controller
{
        
    public function index()
    {
        return view('contact');
    }
    
    public function store(Request $request)
    {
        
            // pass input to validator
        $validator = Validator::make($request->all(), [
            'name' => 'min:5',
        ]);
        
        //test if input is valid
        if($validator->fails()){
            $messages = $validator->errors();
            return redirect('contact')
                ->withErrors($validator)
                ->withInput();
        }
        
            \Mail::send('emails.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('whip210@gmail.com');
        $message->to('whip210@gmail.com', 'Admin')->subject('TODOParrot Feedback');
    });

  return redirect('contact')->with('message', 'Thanks for contacting us!');
    }
}
