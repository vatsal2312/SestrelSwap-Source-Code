<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Crypt;
use PragmaRX\Google2FA\Google2FA;
use \ParagonIE\ConstantTime\Base32;

class TFAController extends Controller
{
    
    public function show_tfa_page(Request $request){

        $user = $request->user();
        $image = '';
        $secret = '0';

        if($user->bool_2fa_status != true){

            $google2fa = new Google2FA();    
            $secret = $google2fa->generateSecretKey();
           
            $qrCodeUrl = $google2fa->getQRCodeUrl(
                'Sestrel Swap Admin',decrypText($user->email),$secret);

           $urlencoded = urlencode('otpauth://totp/'.'Sestrel Swap Admin'.'?secret='.$secret.'');
           $image = 'https://chart.googleapis.com/chart?chs=168x168&chld=M|0&cht=qr&chl='.$urlencoded.'';
        }

        return view('admin.pages.2fa',['image' => $image,'secret' => $secret]);

    }

    public function enableTwoFactor(Request $request){

        $google2fa = new Google2FA();    
        $secret = $google2fa->generateSecretKey();
        $user = $request->user();
        $user->txt_2fa_code = encrypText($secret);
        $user->bool_2fa_status = true;
        $user->save();

        $qrCodeUrl = $google2fa->getQRCodeUrl(
            'Sestrel Swap Admin',decrypText($user->email),$user->txt_2fa_code,
        );

        $urlencoded = urlencode('otpauth://totp/'.'test'.'?secret='.$secret.'');
        $image = 'https://chart.googleapis.com/chart?chs=168x168&chld=M|0&cht=qr&chl='.$urlencoded.'';

        return view('admin.pages.enable2fa', ['image' => $image,
            'secret' => $secret]);
    }

}
