<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index(){
        $mailData = [
            'title' => "Mail Từ Phạm Văn Lợi",
            'body' => "Đây là mail testing"
        ];
        Mail::to('loixoan28.07@gmail.com')->send(new DemoMail($mailData));
        dd("Email send Successfully");
    }
}
