<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
        /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToFacebook()
    {        
        return Socialite::driver('facebook')->stateless()->redirect();        
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleFacebookCallback()
    {
        
        $fbUser = Socialite::driver('facebook')->stateless()->user();
        
        $imgUrl = $fbUser->avatar_original . "&access_token={$fbUser->token}";
                
        // $user = User::firstOrCreate(['facebook_id' => $fbUser->getId()], [
        //     'name'              => $fbUser->getName(),
        //     'email'             => $fbUser->getEmail(),
        //     'username'          => $fbUser->getNickname(),
        //     'avatar'            => $imgUrl,
        //     'facebook_id'       => $fbUser->getId(),                
        //     'profile_photo_path'=> $imgUrl,   
        // ]);

        $user = User::where('facebook_id',$fbUser->getId())->orWhere('email', $fbUser->getEmail())->first();
        
        if ($user->exists) {
            if (! $user->facebook_id) {
                $user->facebook_id = $fbUser->getId();
            }
        } else {
            $user = User::Create([
                'name'              => $fbUser->getName(),
                'email'             => $fbUser->getEmail(),
                'username'          => $fbUser->getNickname(),
                'facebook_id'       => $fbUser->getId(),
                'avatar'            => $imgUrl,
                'facebook_id'       => $fbUser->getId(),                
                'profile_photo_path'=> $imgUrl, 
            ]);
        }

        $user->facebook_token = $fbUser->token;
        $user->save();
        
        if ($user->avatar == NULL) {         
            $user->avatar = $imgUrl;         
            $user->save();         
        }
        
        Auth::login($user, true);
        
        return redirect('dashboard');

    }
}


