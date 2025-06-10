<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterConfirmation;
use App\Models\NewsletterSubscriber;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
     $request->validate([
    'email' => 'required|email|unique:newsletter_subscribers,email',
], [
    'email.required' => 'O campo e-mail é obrigatório.',
    'email.email' => 'O campo e-mail deve conter um endereço válido.',
    'email.unique' => 'Este e-mail já está cadastrado.',
]);

    // Salva no banco
    NewsletterSubscriber::create([
        'email' => $request->email,
    ]);

    // Envia o e-mail de confirmação
    Mail::to($request->email)->send(new NewsletterConfirmation());

    return redirect()->back()->with('success', 'Inscrição realizada com sucesso!');
    }
}
