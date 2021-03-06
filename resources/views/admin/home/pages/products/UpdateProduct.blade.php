@extends('admin.master')
@section('title','Product Edit')


@section('body_content')

<?php $m = Session::get('message') ?>
@if (@isset ($m))
<div class="alert alert-success no-border mb-2" role="alert">
    <strong>Well done!</strong> {{$m}}
  </div>
@endif

{{-- jquery link --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>


<!-- form start -->
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title" id="basic-layout-form-center">Product List</h4>
			<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
			<div class="heading-elements">
				<ul class="list-inline mb-0">
					<li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
					<li><a data-action="reload"><i class="icon-reload"></i></a></li>
					<li><a data-action="expand"><i class="icon-expand2"></i></a></li>
					
				</ul>
			</div>
		</div>
		<div class="card-body collapse in">
			<div class="card-block">

				{!! Form::open(['url' => '/updateProduct','class'=>'class="form-inline"',
        'name'=>'updateProduct']) !!} <!-- use collective laravel pac-->


            {{-- upper form start--}}
				<div class="row">
					<div class="col-md-12 ">
						<div class="form-body">

             <!-- pass id -->
                <input type="hidden" name="productById" class="form-control" value="{{$productsById->id}}">

               <div class="form-group col-md-6">
                 <label><b>Product Name :</b></label>
                
                
                <input type="text" name="productName" class="form-control round border-primary" value="{{$productsById->productName}}" required="required">

              </div>


                 <div class="col-md-6">
                	<div class="form-group">
						<label><b>Details :</b></label>
						
						<input type="text" name="Details" class="form-control round border-primary" value="{{$productsById->productDetails}}" >

					</div>
                	
                </div>



                        
              <div class="form-group col-md-6">
                  <label><b>Category :</b></label>
                  
                  <select id="issueinput5" name="productCategory" class="form-control round border-primary" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" data-original-title="" title="">

                    <option value="{{$productsById->productCategory}}">{{$productsById->productCategory}}</option>
 

                  </select>
                </div>



                <div class="form-group col-md-6">
                   <label><b>Product Brand :</b></label>
                  
                  <select id="issueinput5" name="productBrand" class="form-control round border-primary" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" data-original-title="" title="">
                    <option value="{{$productsById->productBrand}}">{{$productsById->productBrand}}</option>
                
                  </select>
                </div>


                        

						</div>
					</div>
				</div>
            {{-- upper form end--}}


            {{-- upper loyer start--}}
				<div class="row">
					<div class="col-md-12 ">
						<div class="form-body">
                          <div class="col-xs-12">
        <div class="card">
        
            <div class="card-body collapse in">
                
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>Model :</th>
                                <th>Quantity :</th>
                                <th>Supplier Price :</th>
                                <th>Sell Price :</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                	<input type="text" name="productModel" class="form-control border-primary" required="required" value="{{$productsById->productModel}}">

                                </th>

                                <th>
                                	<input type="text" name="productQuantity" class="form-control border-primary" required="required" value="{{$productsById->productQuantity}}">

                                </th>

                                <th>
                                	<input type="text" name="SupplierPrice" class="form-control border-primary" required="required" value="{{$productsById->SupplierPrice}}">

                                </th>

                                <th>
                                	<input type="text" name="SellPrice" class="form-control border-primary" required="required" value="{{$productsById->SellPrice}}">

                                </th>
                              

                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



						</div>
					</div>
				</div>
            {{-- upper loyer end--}}
             






				<div class="form-actions center">
					<button type="button" class="btn btn-warning mr-1">
						<i class="icon-cross2"></i> Cancel
					</button>
					<button type="submit" class="btn btn-primary">
						<i class="icon-check2"></i> Save Changes
					</button>
				</div>
				{!! Form::close() !!}

			</div>
		</div>
	</div>
</div>
<!-- form end -->


     <script type="text/javascript">
        document.forms['updateProduct'].elements['productCategory'].value={{$productsById->productCategory}}
      </script>


@endsection