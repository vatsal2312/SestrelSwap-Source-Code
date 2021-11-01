<?php

namespace App\Http\Middleware;

use Auth;
use App\User;

use Closure;

class check2fa
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {        
        $usr = Auth::user(); 
        if($usr->bool_2fa_status != null && $usr->bool_2fa_status == true){
            if(session('verified_2fa') == true){
                if (Auth::check()) {
                    session('admin_ip') == $_SERVER['REMOTE_ADDR'];
                }else{
                    Auth::logout();
                    return redirect(admin_url('InGqkuuiaiusdha'));
                }
                return $next($request);
            }else{
                return redirect(admin_url('verify_tfa'));
            }
        }else{
            return $next($request);
        }
    }
}
