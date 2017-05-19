<?php

namespace App\Http\Controllers\Admin;
use App\models\customers;
use App\models\users;
use App\models\assign;
use App\models\action;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    
    
     public function index(){
        $customers=customers::all();
        return view('Admin.customer.show',compact('customers'));
    }

    public function create(){
		return view('Admin.customer.create');    	
    }

    public function store(Request $request){

        customers::create([
            'firstName' => $request['firstName'],
            'lastName' => $request['lastName'],
            'phoneNumber' => $request['phoneNumber'],
        ]);

        $customers=customers::all();
        return redirect('admin/customers')->with('customers');
    
    }    

  

    public function destroy(Request $request){
    	$delete=customers::where('id','=',$request->input('id'))->delete();
        $assign = assign::where('customersId','=',$request->input('id'))->delete();        
        $action = action::where('customerId','=',$request->input('id'))->delete();
        return redirect('admin/customers');
   
    }

     public function update(Request $request, $id)
    {
        $customers =customers::findOrFail($id);
        $customers->firstName=$request->input('firstName');
        $customers->lastName=$request->input('lastName');
        $customers->phoneNumber=$request->input('phoneNumber');
        $customers->save();
        return redirect('admin/customers');
    }

    public function edit($id){
    	$customers=customers::where('id',$id)->get();
    	return view('Admin.customer.edit',compact('customers'));
    
    }

    public function assign($id){
    	$users = users::where('rol',0)->get();
    	$customerId = $id;
    	return view('Admin.customer.assign',compact('users','customerId'));
    }

    public function assignto($userId,$customerId ){
    	 assign::create([
            'userId' => $userId,
            'customersId' => $customerId,
        ]);

    	  $customers=customers::all();
        return redirect('admin/customers')->with('customers');
    }

}

