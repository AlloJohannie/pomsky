<?php

// app/Http/Controllers/ContactController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1) Honeypot "champ invisible" + délai minimum
        if ($request->filled('website')) {           // doit rester vide
            return back()->with('status', 'ok');     // on fait comme si, mais on ignore (bot)
        }
        $formStartedAt = (int) $request->input('hp_time', 0);
        if (time() - $formStartedAt < 3) {           // < 3s => probablement bot
            return back()->with('status', 'ok');
        }

        // 2) Validation
        $data = $request->validate([
            'name'    => ['required','string','max:120'],
            'email'   => ['required','email','max:255'],
            'phone'   => ['nullable','string','max:40'],
            'message' => ['required','string','min:10','max:4000'],
        ]);

        // 3) (Optionnel) reCAPTCHA/hCaptcha côté serveur
        // if (config('services.recaptcha.secret')) { ... vérif du token ... }

        // 4) Envoi
        // app/Http/Controllers/ContactController.php

        // ...
        $to = config('mail.contact_to') ?: config('mail.from.address') ?: 'pomskyduquebec@hotmail.com';

        Mail::to($to)->send(new ContactMessage($data));

        return back()->with('status', 'ok')->with('sent', true);

    }
}
