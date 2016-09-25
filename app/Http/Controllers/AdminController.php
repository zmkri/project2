<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Staff;
use App\Food;
use App\Menu;

class AdminController extends Controller
{
    //

    public function getAdmin(){
    	return view('admin');
    }
    public function getOnBehalf(){
		$behalf = Staff::where('role', '=', 'npc')->get();
        return view('onbehalf', ['behalfOf'=> $behalf]);
	}

	public function postAdminOrder(Request $request){
		$this->validate($request, [
			'order'=>'required',
			'uname'=>'required',
			]);

		$uname = $request['uname'];
		$order = $request['order'];
		
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

        return redirect()->route('onbehalf')->with(['message' => $message]);

	}

	public function getTodaysList(){
		$today = date("Y-m-d");
		$listTodays = Food::where('created_at', '=', $today)->get();
		$listTodays_tot = Food::where('created_at', '=', $today)->count();
        return view('todays-list', ['listOfToday'=> $listTodays])->with('listTot',$listTodays_tot);
	}

	public function getAddFood(){
		$opt1 = Menu::where('type','=', 'Option-1')->get();
		$opt1_tot = Menu::where('type','=', 'Option-1')->count('id');

		$opt2 = Menu::where('type','=', 'Option-2')->get();
		$opt2_tot = Menu::where('type','=', 'Option-2')->count('id');

		$extra = Menu::where('type','=', 'Extras')->get();
		$extra_tot = Menu::where('type','=', 'Extras')->count('id');
		// return view('addfood');
		return view('addfood', compact('opt1', 'opt1_tot', 'opt2', 'opt2_tot', 'extra', 'extra_tot'));
	}

	public function postAddFood(Request $request){
		$this->validate($request, [
			'menu'=>'required',
			'type'=>'required',
			]);

		$food = $request['menu'];
		$type = $request['type'];
		
		$menus = new Menu();

		$menus->menu = $food;
		$menus->type = $type;

		$message = 'Error Occured Whilst Uploading Food Item!';
         if($menus->save()){
          $message= 'Food Item Successfully uploaded!';
         };
        return redirect()->route('addfood')->with(['message' => $message]);
	}

	public function getOldList(){
		// return view('old-list');
		$oldList = Food::all();
        return view('old-list', ['listOld'=> $oldList]);
	}

	public function getAddStaff(){
		$staff = Staff::where('status', '=', 'active')->get();
		$npc = Staff::where('role', '=', 'npc')->get();
		return view('addstaff', ['active'=>$staff])->with(['nonpc' => $npc]);
	}

	public function postAddStaff(Request $request){
		$this->validate($request,[
			'staff_name'=>'required | unique:staff',
			'password'=>'required',
			'password2'=>'required',
			]);

		$staff_name = $request['staff_name'];
		$password2 = bcrypt($request['password2']);
		$password = bcrypt($request['password']);

		$staff = new Staff();

		$staff->staff_name = $staff_name;
		$staff->password = $password;
		$staff->role = 'staff';
		$staff->status = 'active';

		$message = 'Error Occured Whilst Adding Staff Member!';
		if($password = $password2){
	        if($staff->save()){
		        $message= 'Staff Successfully Uploaded!';
	        }else{
	        	$message = 'Error In Saving';
	        }
     	}else{
     		$message = 'Passwords DO NOT Match';
     	}
        return redirect()->route('addstaff')->with(['message' => $message]);
	}
}
