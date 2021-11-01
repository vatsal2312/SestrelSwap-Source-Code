<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransHistory;
use DB;

class HomeController extends Controller
{

     public function __construct()
    {
      
        $remote = !empty($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '127.0.0.1';
        $ip = !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $remote;

        $val = DB::table('tbl_blacklist')->where('ip', 'like', '%'.$ip.'%')->get();
        
        if($val->count() != 0){
            return abort(404, 'Page not found.');
            echo '<div style="background-position: center;background-repeat: no-repeat;background-size: cover;min-height: 800px;background-color: #12141d;text-align: center !important;line-height: 300px;font-size: 30px;color:#fff;">404 Found</div>';
            echo  exit;
        }

    }

    public function show_home()
    {
        return view('home');
    }

    public function store_history(Request $request){

        $trans = new TransHistory;
        $trans->txn_hash = $request->txn_hash;
        $trans->from_currency = $request->from_currency;
        $trans->to_currency = $request->to_currency;
        $trans->user_addr = $request->user_addr;
        $trans->from_amt = $request->from_amt;
        $trans->to_amt = $request->to_amt;
        $trans->contract_type = $request->con_typ;
        $trans->save();

    }
}
