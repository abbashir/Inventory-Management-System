<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use DB;
class BrandsController extends Controller
{
	//make sure you are logged
	 public function __construct()
    {
        $this->middleware('loggedin');
    }


//show on the tble
    public function createbrands()
    {
        $brands = Brand::all();


    	return view('admin.home.pages.brands.brands',['brandValue'=>$brands]);
    }

    public function storebrands(Request $request)
    {
        $this->validate($request,[
          
          'brand_name' => 'required',
        


        ]);






    	//return $request->all();

    	/* Law 1 */
    	 $brand = new Brand();

    	$brand->BrandName = $request->brand_name;
    	$brand->PublicationStatus = $request->status;
    	

        $brand->save();
    	return redirect('/brands')->with('message','brand add has been successfull.'); 


         /* Law 3 (queiry builder) */
           
        // DB::table('brands')->insert([
        //  'BrandName'=> $request->brand_name,
        //  'PublicationStatus'=> $request->status,
       

        // ]);
        

        //  return redirect('/brands')->with('message','brand add has been successfull.'); 






    }

   //edit brands method
    public function editBrand($id)
    {
        $brandByid = Brand::where('id',$id)->first();
        return view('admin.home.pages.brands.brandUpdate',compact('brandByid'));
    }

//update query perform
    public function updateBrand(Request $request)
    {
        $brand = Brand::find($request->BrandId);

        $brand->BrandName = $request->NewBrandName;
        $brand->PublicationStatus = $request->status;
        $brand->save();
        return redirect('/brands')->with('message','brand update has been successfull.'); 
    }


    public function deleteBrand($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('/brands')->with('message','brand delete has been successfull.');
    }
}
