<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMailRequest;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function recieve_mail(SendMailRequest $request){
       if( mail("contact@brooksvine.com", $request->subject, $request->message, [
            "From: {$request->email}\r\n",
            "ReplyTo: {$request->email}\r\n",
            "type: text/html"
        ])){
            return response([
                "status" => "success",
                "message" => "Mail sent successfully"
            ], 200);
        } else {
            return response([
                'status' => 'failed',
                'message' => 'Mail sending failed! Please try again later'
            ], 400);
        }
    }

    public function services($service){
        if(!empty($service)){
            return view($service);
        }
    }
}
