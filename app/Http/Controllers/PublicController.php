<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function location() {
        return view('location');
    }

    public function contact(){
        return view ('contatti');
    }

    public function contactSubmit(Request $request){
        $name = $request->input('name');
        $email = $request->email;
        $user_message = $request->user_message;


        try{
            Mail::to($email)->send(new ContactMail($name, $email, $user_message));
        }catch(Exception $error){
            /* return redirect()->back()->with('emailError', 'richiesta fallita riprova più tardi'); */
            dd($error);
        }


        return redirect(route('home'))->with('emailSent', 'Abbiamo ricevuto la sua  email. Ti contatteremo presto');
    }
}

