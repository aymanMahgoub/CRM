<?php

namespace App\Http\Controllers\Admin;

use App\Models\users;
use App\Models\assign;
use App\Models\action;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class EmployeeController extends Controller
{
    
     public function index(){
        $users=users::where('rol','0')->get();
        return view('Admin.employee.show',compact('users'));
    }

    public function create(){
		return view('Admin.employee.create');    	
    }

    public function store(Request $request){

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'rol' => $request['rol'],
        ]);

        $users=users::where('rol','0')->get();
        return redirect('admin/employees')->with('users');
    
    }    

    public function edit($id){
    	$users=users::where('id','=',$id)->get();
    	return view('Admin.employee.edit',compact('users'));
    
    }

    public function destroy(Request $request){
    	$delete=users::where('id','=',$request->input('id'))->delete();
        $assign = assign::where('userId','=',$request->input('id'))->delete();
        $action = action::where('userId','=',$request->input('id'))->delete();
        return redirect('admin/employees');
   
    }

    public function update(Request $request, $id){
        $user =users::findOrFail($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        if($request->input('rol') == 'admin'){
        $user->rol='1';
        $assign = assign::where('userId','=',$id)->delete();
        $action = action::where('userId','=',$request->input('id'))->delete();
        }
        $user->save();
        return redirect('admin/employees');
    }


}
