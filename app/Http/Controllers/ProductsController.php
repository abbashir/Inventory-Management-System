<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Category;
use App\Product;
use DB;
class ProductsController extends Controller
{

    //make sure you are logged
     public function __construct()
    {
        $this->middleware('loggedin');
    }

   //show on the page
    public function addProductPage()
    {
        $categories = Category::all();
        $brands = Brand::all();


    	return view('admin.home.pages.products.addproduct',compact('categories','brands'));
    }


    public function storeProducts(Request $request)
    {
        

    	//return $request->all();

    	/* Law 1 */
    	 $products = new Product();

    	$products->productName = $request->productName;
        $products->productDetails = $request->Details;
        $products->productCategory = $request->productCategory;
        $products->productBrand = $request->productBrand;

        $products->productModel = $request->productModel;
        $products->productQuantity = $request->productQuantity;
        $products->SupplierPrice = $request->SupplierPrice;
        $products->SellPrice = $request->SellPrice;
        

    	
    	

        $products->save();
    	return redirect('/product/add-product')->with('message','Product add has been successfull.'); 


         /* Law 3 (queiry builder) */
           
        // DB::table('brands')->insert([
        //  'BrandName'=> $request->brand_name,
        //  'PublicationStatus'=> $request->status,
       

        // ]);
        

        //  return redirect('/brands')->with('message','brand add has been successfull.'); 



    }


//show on the page
    public function ManageProduct()
    {
        $products = Product::all();
        return view('admin.home.pages.products.manageProduct',compact('products'));

    }

  //delete product
    public function deleteProduct($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect('/product/manage')->with('message','product delete has been successfull.');
      
    }

    //edit product
    public function editProduct($id)
    {
       $productsById = Product::where('id',$id)->first();
        return view('admin.home.pages.products.UpdateProduct',compact('productsById'));
    }

     //update customers info
    public function updateProduct(Request $request)
    {

        //return $request->all();
        $products = Product::find($request->productById);

        $products->productName = $request->productName;
        $products->productDetails = $request->Details;
        $products->productCategory = $request->productCategory;
        $products->productBrand = $request->productBrand;

        $products->productModel = $request->productModel;
        $products->productQuantity = $request->productQuantity;
        $products->SupplierPrice = $request->SupplierPrice;
        $products->SellPrice = $request->SellPrice;
        

        $products->save();
        return redirect('/product/manage')->with('message','products info Successfully Updated.'); 
    }
}
