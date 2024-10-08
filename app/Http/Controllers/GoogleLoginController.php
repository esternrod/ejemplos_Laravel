<?php
 namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callback() {
        dd('hola'); 
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();
        if ( $finduser ) {
            Auth::login($finduser);
        return redirect()->intended('/');
        } else {
            $newUser = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'google_id'=> $user->id,
            'password' => 'dummypass'
            ]);
            Auth::login($newUser);
        return redirect()->intended('/');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
