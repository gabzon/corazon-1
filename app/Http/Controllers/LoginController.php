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
        
        // $token = $user->token;
        // $refreshToken = $user->refreshToken;
        // $expiresIn = $user->expiresIn;
        $imgUrl = $fbUser->avatar_original . "&access_token={$fbUser->token}";
                
        $user = User::firstOrCreate(['facebook_id' => $fbUser->getId()], [
            'name'              => $fbUser->getName(),
            'email'             => $fbUser->getEmail(),
            'username'          => $fbUser->getNickname(),
            'avatar'            => $imgUrl,
            'facebook_id'       => $fbUser->getId(),                
            'profile_photo_path'=> $imgUrl,   

        ]);

        $user->facebook_token = $fbUser->token;
        $user->save();
        
        if ($user->avatar == NULL) {
            // dd($imgUrl);
            $user->avatar = $imgUrl;
            // dd($user->avatar);
            $user->save();
            // dd($person);
        }
        // $contents = file_get_contents($imgUrl);
        // $name = substr($imgUrl, strrpos($imgUrl, '/') + 1);
        // $path = Storage::putFile('profile-photos', $contents);
        
        // $person->profile_photo_path->store('profile-photos', $contents);
        // $person->profile_photo_path = $path;
        // $person->save();
        //$person->addMediaFromUrl($imgUrl)->toMediaCollection();
        // $person->updateProfilePhoto($contents);
        
        Auth::login($user, true);
        
        return redirect('dashboard');

    }
}


