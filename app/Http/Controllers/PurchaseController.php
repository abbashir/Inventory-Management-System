<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;
use DB;

class PurchaseController extends Controller
{
    //make sure you are logged
     public function __construct()
    {
        $this->middleware('loggedin');
    }

   //show add Purchase add page
    public function purchaseAdd()
    {
    	return view('admin.home.pages.purchase.addpurchase');
    	
    }

    //store purchase info
    public function storePurchase(Request $request)
    {
    	//validation
          $this->validate($request,[
          
          'SupplierName' => 'required',
          'PurchaseDate' => 'required',
          'InvoiceNo' => 'required|numeric',
          'Details' => 'required',
          'itemName' => 'required',
          'Quantity' => 'required|numeric',
          'rate' => 'required|numeric',
          'total' => 'required|numeric',

        ]);

       //insert
        $purchase = new Purchase();

        $purchase->sup_name = $request->SupplierName;
        $purchase->date = $request->PurchaseDate;
        $purchase->invoice_no = $request->InvoiceNo;
        $purchase->details = $request->Details;

        $purchase->item_name = $request->itemName;
        $purchase->quantity = $request->Quantity;
        $purchase->rate = $request->rate;
        $purchase->total = $request->total;


        

        $purchase->save();
        return redirect('/purchase/add')->with('message','purchase record Successfully Added.');   

    	
    }

     //manage customers
       public function ManagePurchase()
    {
        $purchase = Purchase::all();

        return view('admin.home.pages.purchase.managePurchase',['purchase'=>$purchase]);

        
        
    }
}
