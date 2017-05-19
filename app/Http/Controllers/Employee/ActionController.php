<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\models\customers;
use App\models\users;
use App\models\action;
use App\models\assign;

class ActionController extends Controller
{
    public function store(Request $request ,$id){

        action::create([
            'customerId' => $id,
            'action' => $request['action'],
            'note' => $request['note'],
            'userId'=>Auth::user()->id,
        ]);

        $customers=array();
        $assign=assign::where('userId',Auth::user()->id)->get();
        foreach ($assign as $assign) {
            array_push($customers,customers::where('id',$assign->customersId)->get());
         } 
         
        return view('Employee.customer.myCustomer',compact('customers'));
    

    }

    public function viewAction($id){
    	$customer=customers::where('id',$id)->get();
    	$action = action::where('customerId',$id)->get();
    	return view('Employee.customer.viewAction',compact('customer','action'));
    }

    public function edit($id){
    	$action=action::where('id',$id)->get();
    	$customer=customers::where('id',$action[0]->customerId)->get();
    	
    	return view('Employee.customer.editAction',compact('action','customer'));
    }

     public function update(Request $request, $id)
    {
        $action =action::findOrFail($id);
        $action->action=$request->input('action');
        $action->note=$request->input('note');
        $action->save();

        $customers=array();
        $assign=assign::where('userId',Auth::user()->id)->get();
        foreach ($assign as $assign) {
            array_push($customers,customers::where('id',$assign->customersId)->get());
         } 
         
        return view('Employee.customer.myCustomer',compact('customers'));
    }


    public function destroy(Request $request){
    	$delete=action::where('id','=',$request->input('id'))->delete();
        
        $customers=array();
        $assign=assign::where('userId',Auth::user()->id)->get();
        foreach ($assign as $assign) {
            array_push($customers,customers::where('id',$assign->customersId)->get());
         } 
         
        return view('Employee.customer.myCustomer',compact('customers'));
   
    }
}
