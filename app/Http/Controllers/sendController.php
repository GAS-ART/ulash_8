<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests\sendRequest;

class sendController extends Controller {

    public function submit(sendRequest $req){
        $name = $req->input('name');
        $phone = $req->input('phone');
        $service = $req->input('service');
        $email = $req->input('email');
        $message = $req->input('message');

        /*ОТПРАВКА ДАННЫХ ИЗ ФОРМЫ И ФАЙЛА НА ПОЧТУ*/
        mail::send(['html' => 'mail'], ['name' => $name, 'phone' => $phone, 'service' => $service, 'email' => $email, 'message' => $message, ], function($message) {
        $message->to('temoha1386@gmail.com')->subject('ЗАКАЗ ЗВОНКА ИЗ ФОРМЫ ОБРАТНОЙ СВЯЗИ');
        });

        return view('send');
    }
}
    
