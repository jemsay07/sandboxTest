<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\user;
use App\role;

class HomeController extends Controller{
    // public function home(){
    // 	$user = user::find(1)->passport;
    // 	// return $user;
    // 	return view('welcome', compact('user'));
    // }

    // public function home(){
    // 	$mobiles = user::find(1)->mobile;
    // 	return view('welcome', compact( 'mobiles' ));
    // }
    

	public function home(){
		$role = user::find(2)->roles;
		$user = role::find(2)->users;
		return $user;
		//return view( 'welcome', compact( 'role' ) );
	}
}
