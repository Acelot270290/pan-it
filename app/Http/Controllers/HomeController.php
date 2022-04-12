<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {


        return view('web.index');
    }

    public function sendEmail(Request $request)
    {

        $data = [
            'reply_name' => $request->name,
            'reply_email' => $request->email,
            'subject' => $request->subject,
            'telefone' => $request->telefone,
            'mensage' => $request->mensage
        ];

        Mail::send(new Contact($data));

        if ($data) {


            Alert::success('Sucesso', 'Email enviado com Sucesso!');
            return redirect()->route('home');
        } else {

            Alert::error('OPS', 'Erro ao enviar o email');
            return redirect()->route('home');
        }
    }
}
