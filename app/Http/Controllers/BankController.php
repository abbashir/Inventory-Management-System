<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  
use App\Bank;
use App\BankTransaction;

use DB;

class BankController extends Controller
{
     //make sure you are logged
     public function __construct()
    {
        $this->middleware('loggedin');
    }

   //show bank add page
    public function BankAdd()
    {
    	$banks = Bank::all();

    	return view('admin.home.pages.bank.addbank',compact('banks'));
    	
    }

     //store bank info
    public function storeBank(Request $request)
    {
    	//validation
          $this->validate($request,[
          
          'bankName' => 'required',
          'ACName' => 'required',
          'ACNo' => 'required|numeric',
          'Branch' => 'required',

        ]);

       //insert
        $bank = new Bank();

        $bank->bankName = $request->bankName;
        $bank->ACName = $request->ACName;
        $bank->ACNo = $request->ACNo;
        $bank->Branch = $request->Branch;

        $bank->save();
        return redirect('/bank/add')->with('message','Bank record Successfully Added.');   

    	
    }

    //delete
    public function deleteBank($id)
    {
        $Bank = Bank::find($id);
        $Bank->delete();
        return redirect('/bank/add')->with('message','Bank info. delete has been successfull.');
    }

    //edit bank method
    public function editBank($id)
    {
        $BankByid = Bank::where('id',$id)->first();
        return view('admin.home.pages.bank.BankUpdate',compact('BankByid'));
    }



   //update bank query perform
    public function updateBank(Request $request)
    {
        $bank = Bank::find($request->BankId);

        $bank->bankName = $request->bankName;
        $bank->ACName = $request->ACName;
        $bank->ACNo = $request->ACNo;
        $bank->Branch = $request->Branch;

        $bank->save();
        return redirect('/bank/add')->with('message','Bank info. update has been successfull.'); 
    }


     //show bank Tarnsaction add page
    public function BankTransaction()
    {
         $bank = Bank::all();


    	return view('admin.home.pages.bank.bankTransaction',compact('bank'));	
    }

      //store Tarnsaction data
    public function StoreTransaction(Request $request)
    {
        //return $request->all();

      

         //insert
        $BankTran = new BankTransaction();

        $BankTran->Tran_date = $request->Tran_date;
        $BankTran->acType = $request->acType;
        $BankTran->bankName = $request->bankName;
        $BankTran->description = $request->description;
        $BankTran->WDNo = $request->WDNo;
        $BankTran->Amount = $request->Amount;

        $BankTran->save();
        return redirect('/bank/transaction')->with('message','Bank Tarnsaction info Successfully Added.');
    }

    //ledger Bank
    public function ledgerBank($id)
    {
              $BankByid = Bank::where('id',$id)->first();

        return view('admin.home.pages.bank.viewBank_Ledger',compact('BankByid'));
    }


}
