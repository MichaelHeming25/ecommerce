<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */

    public function redirectToProvider_facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * @return \Illuminate\Http\Response
     */

    public function handleProviderCallback_facebook()
    {
        $user = Socialite::driver('facebook')->user();

        $user2 = Socialite::driver('facebook')->userFromToken($user->token);

        $dados = ["avatar"=>$user->getAvatar(), "name"=>$user->getName(), "token"=>$user->token, "nick"=>$user->getNickname(), "email"=>$user->getEmail(), "tipo"=>"facebook"];

        session()->put('avatar', $dados['avatar']);
        session()->put('name', $dados['name']);
        session()->put('token', $dados['token']);
        session()->put('email', $dados['email']);
        session()->put('tipo', "facebook");

        return redirect()->route('index');
    }

    // GOOGLE

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        $user2 = Socialite::driver('google')->userFromToken($user->token);

        $dados = ["avatar"=>$user->getAvatar(), "name"=>$user->getName(), "nick"=>$user->getNickname(), "email"=>$user->getEmail()];

        return view('index', [
            'avatar' => $dados['avatar'],
            'name' => $dados['name'],
            'email' => $dados['email'],
        ]);
    }
}
