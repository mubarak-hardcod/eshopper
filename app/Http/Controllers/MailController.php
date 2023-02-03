<?php
use App\Http\Requests;
use App\Http\Controllers\Controller;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;


class MailController extends Controller
{
    public function basic_email() {
        $data = array('name'=>"pofitesting");
     
        Mail::send(['text'=>'mail'], $data, function($message) {
           $message->to('mubarak@pofitec.com', 'Mubarak')->subject
              ('Laravel Basic Testing Mail');
           $message->from('pofitesting2022@gmail.com','pofitesting');
        });
        echo "Basic Email Sent. Check your inbox.";
     }
     public function html_email() {
        $data = array('name'=>"pofitesting");
        Mail::send('mail', $data, function($message) {
            $message->to('mubarak@pofitec.com', 'Mubarak')->subject
            ('Laravel Basic Testing Mail');
         $message->from('pofitesting2022@gmail.com','pofitesting');
        });
        echo "HTML Email Sent. Check your inbox.";
     }
     public function attachment_email() {
        $data = array('name'=>"pofitesting");
        Mail::send('mail', $data, function($message) {
           $message->to('abc@gmail.com', 'Tutorials Point')->subject
              ('Laravel Testing Mail with Attachment');
           $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
           $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
           $message->from('xyz@gmail.com','Virat Gandhi');
        });
        echo "Email Sent with attachment. Check your inbox.";
     }
}
