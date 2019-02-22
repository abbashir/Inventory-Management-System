@extends('admin.master')
@section('title','Add Purchase')


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
			<h4 class="card-title" id="basic-layout-form-center">Add Purchase</h4>
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

				{!! Form::open(['url' => '/savePurchase','class'=>'class="form-inline"']) !!} <!-- use collective laravel pac-->


            {{-- upper form start--}}
				<div class="row">
					<div class="col-md-12 ">
						<div class="form-body">



                        <div class="col-md-6">
                        	<div class="form-group">
								{{Form::label('text', 'Supplier Name:')}}
								
								<input type="text" name="SupplierName" class="form-control round border-primary" placeholder="Supplier Name" >

							</div>
                           <span class="text-danger">{{$errors->has('SupplierName')? $errors->first('SupplierName') : ''}}</span>
                        </div>



                        <div class="col-md-6">
                        	<div class="form-group">
								{{Form::label('text', 'Purchase Date :')}}
								
								<input type="date" name="PurchaseDate" class="form-control round border-primary" >

							</div>
                        	<span class="text-danger">{{$errors->has('PurchaseDate')? $errors->first('PurchaseDate') : ''}}</span>
                        </div>


                         <div class="col-md-6">
                        	<div class="form-group">
								{{Form::label('text', 'Invoice No :')}}
								
								<input type="text" name="InvoiceNo" class="form-control round border-primary" placeholder="Enter Invoice No" >

							</div>
                        	<span class="text-danger">{{$errors->has('InvoiceNo')? $errors->first('InvoiceNo') : ''}}</span>
                        </div>


                         <div class="col-md-6">
                        	<div class="form-group">
								{{Form::label('text', 'Details :')}}
								
								<input type="text" name="Details" class="form-control round border-primary" placeholder="Enter Details" >

							</div>
                        	<span class="text-danger">{{$errors->has('Details')? $errors->first('Details') : ''}}</span>
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
                                <th>Item Information</th>
                                <th>Quantity</th>
                                <th>Rate</th>
                                <th>Total</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                	<input type="text" name="itemName" class="form-control" placeholder="Item name" required="required">

                                    <span class="text-danger">{{$errors->has('itemName')? $errors->first('itemName') : ''}}</span>
                                </th>

                                <th>
                                	<input type="text" name="Quantity" class="form-control price" placeholder="0.00" required="required">

                                    <span class="text-danger">{{$errors->has('Quantity')? $errors->first('Quantity') : ''}}</span>
                                </th>

                                <th>
                                	<input type="text" name="rate" class="form-control price" placeholder="0.00" required="required">

                                    <span class="text-danger">{{$errors->has('rate')? $errors->first('rate') : ''}}</span>
                                </th>

                                <th>
                                	<input type="text" name="total" class="form-control" placeholder="0.00" required="required" id='totalPrice'>

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
						<i class="icon-check2"></i> Save
					</button>
				</div>
				{!! Form::close() !!}

			</div>
		</div>
	</div>
</div>
<!-- form end -->


{{-- caculate total --}}
<script>
// we used jQuery 'keyup' to trigger the computation as the user type
$('.price').keyup(function () {
 
    // initialize the sum (total price) to zero
    var sum = 1;
     
    // we use jQuery each() to loop through all the textbox with 'price' class
    // and compute the sum for each loop
    $('.price').each(function() {
        sum *= Number($(this).val());
    });
     
    // set the computed value to 'totalPrice' textbox
    $('#totalPrice').val(sum);
     
});
</script>


@endsection