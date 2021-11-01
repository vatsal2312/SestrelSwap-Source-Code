<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pair;
use App\Models\Price;
use App\Models\Whitelist;


class AdminController extends Controller
{

    public function store_pair_log(Request $request){

        $trans = new Pair;
        $trans->txt_txnHash = $request->txn_hash;
        $trans->txt_symbol = $request->txt_sym;
        $trans->txt_amount = $request->amt;
        $trans->save();

    }

    public function store_price_log(Request $request){

        $trans = new Price;
        $trans->txt_txnHash = $request->txn_hash;
        $trans->txt_amount = $request->amt;
        $trans->save();

    }

    public function load_whitelist(){

        $wht_lst = Whitelist::whereNull('status')->select('id','ip')->get();
        return view('admin.pages.whitelist')->with(['whitelist'=>$wht_lst]);

    }

    public function delete_ip(Request $request){

        Whitelist::where('id',$request->id)->delete();
        return response('success',200);

    }

    public function add_whitelist(Request $request){

        Whitelist::insert(['ip' => $request->ip]);
        return response('success',200);
        
    }
}
