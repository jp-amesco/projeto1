<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContatoController extends Controller
{
    public function index(){
        return view('contato');
    }

    public function enviar(Request $request){
        $dadosemail = array(
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'assunto' => $request->input('assunto'),
            'msg' => $request->input('msg'),
        );

        
        Mail::send('email.contato', $dadosemail, function ($message) {
            $message->from('formulario@pontocomdesenvolvimento.net', 'Formulario de contato');
            $message->subject('Mensagem enviada pelo formulario de contato');
            $message->to('joaopauloamesco@hotmail.com');
        });
        
        return redirect('contato')->with('success', 'Mensagem enviada, em breve entraremos em contato');
    }
}
