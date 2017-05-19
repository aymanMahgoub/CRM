<?php

namespace App\Http\Controllers\Employee;
use App\models\customers;
use App\models\users;
use App\models\assign;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    
    //
     public function index(){
        $customers=customers::all();
        return view('Employee.customer.show',compact('customers'));
    }

    public function create(){
		return view('Employee.customer.create');    	
    }

    public function store(Request $request){

        customers::create([
            'firstName' => $request['firstName'],
            'lastName' => $request['lastName'],
            'phoneNumber' => $request['phoneNumber'],
        ]);

        $customers=customers::all();
        return redirect('employee/customers')->with('customers');
    
    }    

  

    public function destroy(Request $request){
    	$delete=customers::where('id','=',$request->input('id'))->delete();
        $assign = assign::where('customersId','=',$request->input('id'))->delete();
        $action = action::where('customerId','=',$request->input('id'))->delete();
        return redirect('employee/customers');
   
    }

     public function update(Request $request, $id)
    {
        $customers =customers::findOrFail($id);
        $customers->firstName=$request->input('firstName');
        $customers->lastName=$request->input('lastName');
        $customers->phoneNumber=$request->input('phoneNumber');
        $customers->save();
        return redirect('employee/customers');
    }

    public function edit($id){
    	$customers=customers::where('id',$id)->get();
    	return view('Employee.customer.edit',compact('customers'));
    
    }

    public function myCustomer(){
        $customers=array();
        $assign=assign::where('userId',Auth::user()->id)->get();
        foreach ($assign as $assign) {
            array_push($customers,customers::where('id',$assign->customersId)->get());
         } 
         
        return view('Employee.customer.myCustomer',compact('customers'));
    }

    public function action($id){
        $customers=customers::where('id',$id)->get();
        return view('Employee.customer.action',compact('customers'));
    }  
}

