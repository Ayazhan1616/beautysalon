<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function send(Request $request)
    {
        $objDemo = new \stdClass();
        $objDemo->sender = 'Ayazhan.Zhaxykeldiyeva';
        $objDemo->receiver = 'Ayazhan.Zhaxykeldiyeva';

        Mail::to("190103195@stu.sdu.edu.kz")->send(new SendMail($objDemo));
    }
}
