<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Food;
use App\Menu;
use App\Staff;

class UserController extends Controller
{
    //

    public function getLogin(){
		return view('login');
	}

	public function postSignIn(Request $request){

		$this->validate($request, [
			'uname' => 'required',
			'password' => 'required'
			]);
		$message = 'Username or Password Incorrect or The Time for Placing Orders is Over';
		$today = date('H:m');
$today = strtotime(date('G:i', time()+10800));
$block_time = strtotime('09:00');


		if(Auth::attempt(['staff_name' => $request['uname'], 'password' => $request['password'], 'role'=>'staff'  ]) && ($today < $block_time)){
 // && ($today < $block_time)
			$message= 'LogIn Successful';
		 	return redirect()->route('order');
		 	// Direct to General User Panels Upon Successful Login

		}elseif (Auth::attempt(['staff_name' => $request['uname'], 'password' => $request['password'], 'role'=>'admin'  ]) ) {
			$message= 'LogIn Successful';
		 	return redirect()->route('admin'); 
		 	// Direct to Admin Panels Upon Successful Login
		}else{

			return redirect()->back()->with(['message' => $message]);

		}

		return view('home');
	}

	public function postSignOut(){
	 	Auth::logout();
		return redirect()->route('login');
	}

    public function getOrder(){
		// return view('order');
		$opt1 = Menu::where('type','=', 'Option-1')->get();
		$opt1_tot = Menu::where('type','=', 'Option-1')->count('id');

		$opt2 = Menu::where('type','=', 'Option-2')->get();
		$opt2_tot = Menu::where('type','=', 'Option-2')->count('id');

		$extra = Menu::where('type','=', 'Extras')->get();
		$extra_tot = Menu::where('type','=', 'Extras')->count('id');

		return view('order', compact('opt1', 'opt1_tot', 'opt2', 'opt2_tot', 'extra', 'extra_tot'));
	}

	public function postOrder(Request $request){
		$this->validate($request, [
			'order'=>'required',
			]);

		$order = $request['order'];

		$food = new Food();

		$uname = Auth::user()->staff_name;

		$food->uname = Auth::user()->staff_name ;
		$food->food = $order;
		
		$food = new Food();

		$food->uname = $uname;
		$food->food = $order;

		$message = 'Error Occured Whilst Adding Your Order';

		$today = date("Y-m-d");   

		$entry = Food::where('uname', '=', $uname)->where('created_at', '=', $today)->count();

	        if($entry >= 1){
	        	$message = "You Have Already Place your Order";
	        }else{
	        	$food->save();
		        $message= 'Order Successfully uploaded!';
	        }

        return redirect()->route('order')->with(['message' => $message]);
	}

	public function getOrderHistory(){
		// return view('orderHistory');
		$uname = Auth::user()->staff_name;
		$oderHistory = Food::where('uname', '=', $uname)->get();
        return view('orderHistory', ['orderHist'=> $oderHistory]);
	}



}
