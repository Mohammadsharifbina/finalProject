<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\admin;
use App\Notifications\sendNotifaction;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Notification;
use App\Notification\RegisterNotification;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
       
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        Auth::login($user);

       

        $details=[
            'greeting'=>"hi {{$user->name}}",
            'body'=>"you registered in public admin faculty",
            'actiontext'=>"check your account",
            'actionurl'=>'http://127.0.0.1:8000/',
            'lastline'=>"thank you for choosing us",
        ];
       
        Notification::send($user,new sendNotifaction($details));
        
        
        return redirect(RouteServiceProvider::HOME);
    }
}
