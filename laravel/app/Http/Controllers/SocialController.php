<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use function PHPUnit\Framework\isNull;

class SocialController extends Controller
{
    public function loginVK(){
        if(\Auth::id()){
            return redirect()->route('home');
        }
        return Socialite::with('vkontakte')->redirect();
    }

    public function responseVK(){
        $user = Socialite::driver('vkontakte')->user();
        $ownUser= User::query()
            ->where('id_in_soc',$user->getId())
            ->where('type_auth','vk')
            ->first();
        if (isNull($ownUser)){
            $ownUser = new User();
            $ownUser->fill(
                [
                    'name'=>($user->getName()),
                    'email'=>($user->getEmail()),
                    'password'=>\Hash::make('qwerty'),
                    'id_in_soc'=>($user->getId()),
                    'type_auth'=>'vk',
                    'avatar'=>($user->getAvatar()),
                ]
            )->save();
        }
        \Auth::login($ownUser);
        return $ownUser;
    }

}
