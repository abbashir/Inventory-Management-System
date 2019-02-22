<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Product;
use App\Order;

use DB;

class InvoiceController extends Controller
{

	  //make sure you are logged
     public function __construct()
    {
        $this->middleware('loggedin'); 
    }

   //new invoice
    public function invoiceAdd()
    {
        $Products = Product::all();
    return view('admin.home.pages.invoice.newInvoice',compact('Products'));
    }

    //store invoice
    public function storeInvoice(Request $request)
    {
        //return $request->all();
        //insert
         $Order = new Order();

        $Order->CustomerName = $request->CustomerName;
        $Order->Address = $request->Address;
        $Order->Date = $request->Date;
        $Order->productName = $request->productName;
        $Order->Quantity = $request->Quantity;
        $Order->rate = $request->rate;
        $Order->total = $request->total;

      
        

        $Order->save();
        return redirect('/invoice/add')->with('message','Order Successfully Added.');
    }

    //Manage invoice
    public function ManageInvoive()
    {
        
         $Orders = Order::all();

    return view('admin.home.pages.invoice.manageInvoice',compact('Orders'));
    }

    //test page
    public function test()
    {
    	return view('admin.home.pages.test');
    }
}
