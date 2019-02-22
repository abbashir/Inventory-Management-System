@extends('admin.master')
@section('title','New Invoice')


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
			<h4 class="card-title" id="basic-layout-form-center">New Invoice</h4>
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

				{!! Form::open(['url' => '/saveInvoice','class'=>'class="form-horizontal"']) !!} <!-- use collective laravel pac-->


            {{-- left form start--}}
				<div class="row">
					<div class="col-md-6 ">
						<div class="">
                       
		<div class="form-group">
		<label class="col-md-4 control-label" for="textinput"><b>Customer Name :</b></label>  
		<div class="col-md-8">
		<input name="CustomerName" type="text" placeholder="Customer Name" class="form-control border-primary " required="">

		</div>
		</div><br> <br> <br> 

		<div class="form-group">
		<label class="col-md-4 control-label" for="textinput"><b>Address :</b></label>  
		<div class="col-md-8">
		<input name="Address" type="text" placeholder="Address" class="form-control border-primary " required="">

		</div>
		</div><br> <br>

		<div class="form-group">
		<label class="col-md-4 control-label" for="textinput"><b>Date :</b></label>  
		<div class="col-md-8">
		<input name="Date" type="date" class="form-control border-primary " required="">

		</div>
		</div><br> <br> 



                        	

						</div>
					</div>


					     {{-- right form start--}}
				
					<div class="col-md-6 ">
						<div style="margin-top: 80px;">
        

                        	<button type="button" class="btn btn-info">Old Customer</button>

						</div>
					</div>
				
            {{-- right form end--}}


				</div>
            {{-- left form end--}}



        


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
                                <th style="width: 260px;">Product Name</th>

                                <th>Quantity</th>
                                <th>Rate</th>
                                <th>Total</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                	

                	  <select id="issueinput5" name="productName" class="form-control round border-primary" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="" data-original-title="" title="">
                    <option value="low">Pick a Product</option>
                    
                    @foreach($Products as $Product)
					      <option value="{{$Product->productName}}"> 
					      	{{$Product->productName}}
					      </option>
                    @endforeach

                  </select>
                                </th>

                              

                                <th>
                                	<input type="text" name="Quantity" class="form-control price" placeholder="0.00" required="required">

                                </th>

                                <th>
                                	<input type="text" name="rate" class="form-control price" placeholder="0.00" required="required">

                                  
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

{{-- searchable data --}}
  <datalist id="languages">

  	@foreach($Products as $Product)
        <option value="{{$Product->productName}}">

      
    @endforeach
   

  </datalist>

  
  

@endsection