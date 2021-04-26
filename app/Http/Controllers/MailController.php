<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
use App;

class MailController extends Controller {
    public function index($lang) {
        App::setlocale($lang);
        return view('sendemail');
    }

    public function send(Request $request) {
        $demo = new \stdClass();
        $demo->sender = $request->sender;
        $demo->message = $request->message;

        Mail::to("190103311@stu.sdu.edu.kz")->send(new DemoEmail($demo));
        return back();
    }
}