
<?php

use App\Models\SiteConfig;
use DB;

function getConfig($key = FALSE) {	
	$result = SiteConfig::where('id', 1)->first();
	if ($key != "") {
		return $result->$key;
	} else {
		return $result;
	}
}


function admin_url($url = '') {
	$result = SiteConfig::where('id', 1)->first()->admin_redirect;
	return url($result.'/' . $url);
}


function base_url() {
	return url('/');
}

function encrypText($string) {
	$encrypt_method = "AES-256-CBC";
	$secret_key = 'WEsdBfs HSDF AQ52 SDF';
	$secret_iv = 'WEsdBfs HSDF YSSG T2J';
	$key = hash('sha256', $secret_key);
	$iv = substr(hash('sha256', $secret_iv), 0, 16);
	$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
	$output = base64_encode($output);
	return $output;
}
function decrypText($string) {
	$encrypt_method = "AES-256-CBC";
	$secret_key = 'WEsdBfs HSDF AQ52 SDF';
	$secret_iv = 'WEsdBfs HSDF YSSG T2J';
	$key = hash('sha256', $secret_key);
	$iv = substr(hash('sha256', $secret_iv), 0, 16);
	$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
	return $output;
}

function generateRandomToken($length = 50) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, strlen($characters) - 1)];
	}
	return $randomString;
}

function setting()
{
	$setting = SiteConfig::where('id',1)->first();
	return $setting;
}

function admin_redirect($url = '') {
	return redirect(admin_url($url));
}


function ver():string{
	return time();
}

function loginAttempts($attempts = "") {
	if ($attempts == "") {
		$attempts = 0;
	}

	if($attempts == null){
			Cookie::queue('loginAttempts', 1, time() + 600);
	}
	elseif ($attempts > 4) {
		// $ip = \Request::ip();
		$remote = !empty($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '127.0.0.1';
		$ip = !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $remote;
	 $val = DB::table('tbl_whitelist')->where('ip', 'like', '%'.$ip.'%')->delete();

		Cookie::queue('loginAttempts', '', time() - 600);
		return 1;
	} else {
		Cookie::queue('loginAttempts', $attempts + 1, time() + 600);
	}
}



?>