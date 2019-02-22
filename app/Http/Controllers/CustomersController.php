<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use DB;

class CustomersController extends Controller
{
    //make sure you are logged
     public function __construct()
    {
        $this->middleware('loggedin');
    }

   //show add customer page
    public function customersAdd()
    {
    	return view('admin.home.pages.customers.addcustomers');
    	
    }

    //save customer data
    public function storeCustomers(Request $request)
    {
        //return $request->all();

        //validation
         $this->validate($request,[
          
          'customerName' => 'required',
          'email' => 'required|email|unique:customers',
          'phone' => 'required|numeric',
          'address' => 'required',
          'blance' => 'required',
        ]);

         //insert
        $Customer = new Customer();

        $Customer->name = $request->customerName;
        $Customer->email = $request->email;
        $Customer->phone = $request->phone;
        $Customer->address = $request->address;
        $Customer->blance = $request->blance;

        

        $Customer->save();
        return redirect('/customers/add')->with('message','customers info Successfully Added.');
    }


    //manage customers
       public function ManageCustomers()
    {
        $Customers = Customer::all();

        return view('admin.home.pages.customers.manageCustomers',['Customers'=>$Customers]);

        
        
    }

    //delete customers info
     public function deleteCustomers($id)
    {
        $Customers = Customer::find($id);
        $Customers->delete();
        return redirect('/customers/manage')->with('message','Customers delete has been successfull.');
    }


     //edit customers info
    public function editCustomers($id)
    {
        $CustomersByid = Customer::where('id',$id)->first();
        return view('admin.home.pages.customers.UpdateCustomers',compact('CustomersByid'));
    }



   //update customers info
    public function updateCustomers(Request $request)
    {
        $Customers = Customer::find($request->customerId);

        $Customers->name = $request->customerName;
        $Customers->email = $request->email;
        $Customers->phone = $request->phone;
        $Customers->address = $request->address;
        $Customers->blance = $request->blance;

        $Customers->save();
        return redirect('/customers/manage')->with('message','customers info Successfully Updated.'); 
    }




}
