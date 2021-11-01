<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

use PragmaRX\Google2FA\Google2FA;

use Validator;
use Auth;
use DB;
use Exception;
use Session;
use Cookie;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function __construct() // con()
    {
        
        if (!isset($_SERVER['PHP_AUTH_USER']) || (isset($_SERVER['PHP_AUTH_USER']) && ($_SERVER['PHP_AUTH_USER'] != 'GrEHSHSDFsdgkljkjs' || $_SERVER['PHP_AUTH_PW'] != 'WBjvxxfWEiRcykHdYYNz'))) {
            header('WWW-Authenticate: Basic realm=" Auth"');
            header('HTTP/1.0 401 Unauthorized');
            echo 'Authentication Failed';exit;
        }

        $remote = !empty($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '127.0.0.1';
        $ip = !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $remote;

        $val = DB::table('tbl_whitelist')->where('ip', 'like', '%'.$ip.'%')->get();
        
        if($val->count() == 0){
            return abort(404, 'Page not found.');
            echo '<div style="background-position: center;background-repeat: no-repeat;background-size: cover;min-height: 800px;background-color: #12141d;text-align: center !important;line-height: 300px;font-size: 30px;color:#fff;">404 Found</div>';
            echo  exit;
        }

    }

    public function show_login_page(){
        return view('admin.auth.login');
    }

    public function admin_login(Request $request){
        
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:150',
            'password' => 'required|max:150',
            'pattern_code' => 'required'
        ]);

        if($validator->fails()){

            return json_encode(array('status' => FALSE, 
                'message' => 'Fill all Feilds..'));
        }

         

        $data = array('email' => encrypText($request->email),
            'password' => $request->password,
            'txt_ptrnCode' => encrypText($request->pattern_code));

        if (Auth::attempt($data)) {
          
            $ip = $_SERVER['REMOTE_ADDR'];
            $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
            $history = ['ip' => $ip, 'location' => 'Not found', 'browser' => $request->header('User-Agent'), 'comment' => 'Logged in'];
            if ($details && isset($details->city)) {
                $history['location'] = $details->city . ',' . $details->region;
            }

            DB::table('tbl_Hfjsrzsssdfdf')->insert($history);
            Session::flash('success', 'Login successfully');
            session(['admin_ip' => $ip]);

           return json_encode(array('status' => TRUE, 'message' => 'tfa'));
        }else{

            $attempts = Cookie::get('loginAttempts');

            loginAttempts($attempts);
            return json_encode(array('status' => FALSE, 'message' => 'Invalid Credentials', 'ip'=> \Request::ip()));
        
        }

    }

    public function verify2fa(Request $request){

        $usr = Auth::user();
        $secret = '';
        $data = [];
       
        if(isset($request->tfa_sec)){ 
            if($request->disable == 'true'){
               $data['bool_2fa_status'] = false;
               $data['txt_2fa_code'] = null;
               $secret = decrypText($usr->txt_2fa_code);
            }else{
               $secret = $request->tfa_sec; 
               $data['bool_2fa_status'] = true;
               $data['txt_2fa_code'] = encrypText($secret);
               
            }
        }
        else if($usr->bool_2fa_status && $usr->txt_2fa_code != '' && $usr->txt_2fa_code != null){
            $secret = decrypText($usr->txt_2fa_code);
        }
        $google2fa = new Google2FA();  
        $valid = $google2fa->verifyKey($secret, $request->password);       
            if($valid){
               $request->session()->put('verified_2fa', true);               
               $data['txt_2fa_verify'] = true;
              User::where('id',$usr->id)->update($data);
              return json_encode(array('status' => TRUE, 'message' => 'success'));
            }else{
                $request->session()->put('verified_2fa', false);
               return json_encode(array('status' => TRUE, 'message' => 'failed'));
            }        
    }

    public function admin_register(Request $request){
        
        $user = new User;
        $user->name = "Admin";
        $user->email = encrypText('admin@sestrelswap.com');
        $user->password = Hash::make('ASdf@1234');
        $user->txt_ptrnCode = encrypText('1236');
        $user->save();

    }

    public function logout() {
       header('HTTP/1.0 401 Unauthorized');
       if(Auth::check()){
            Auth::logout();
            session()->flush();
        }
       return redirect(admin_url('InGqkuuiaiusdha'));
    }
}
