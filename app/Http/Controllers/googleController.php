<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class googleController extends Controller
{
    public function redirect(){
        return Socialite::driver("google")->redirect();
    }
    public function callbackgoogle(){
        try {
            $google_user=Socialite::driver("google")->user();
            $user=User::where('google_id',$google_user->getId())->first();

            if(!$user){
                $new_user=User::create([
                    'name'=>$google_user->getName(),
                    'email'=>$google_user->getEmail(),
                    'google_id'=>$google_user->getId()

                ]);
                Auth::login($new_user);
                return redirect()->intended('/student');

            }
            else{
                Auth::login($user);
                return redirect()->intended('/student');
            }

        } catch (\Throwable $th) {
            //throw $th;
            dd('something went wrong!'.$th->getMessage());
        }
    }
}