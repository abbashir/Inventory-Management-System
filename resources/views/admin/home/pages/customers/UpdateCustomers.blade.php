@extends('admin.master')
@section('title','Edit Customer')


@section('body_content')

<?php $m = Session::get('message') ?>
@if (@isset ($m))
<div class="alert alert-success no-border mb-2" role="alert">
    <strong>Well done!</strong> {{$m}}
  </div>
@endif
<!-- form start -->
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title" id="basic-layout-form-center">Edit Customer</h4>
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

				{!! Form::open(['url' => '/updateCustomers','name'=>'addproductForm']) !!} <!-- use collective laravel pac-->

				<div class="row">
					<div class="col-md-6 offset-md-3">
						<div class="form-body">

							<div class="form-group">
								{{Form::label('text', 'Customer Name:')}}
								
								<input type="text" name="customerName" class="form-control round border-primary" value="{{$CustomersByid->name}}">

							</div>


							   <!-- pass id -->
								<input type="hidden" name="customerId" class="form-control" value="{{$CustomersByid->id}}">



								<div class="form-group">
									<label for="complaintinput2">Customer Email</label>
									<input type="email" id="complaintinput2" class="form-control round border-primary" name="email" value="{{$CustomersByid->email}}">
								</div>


								<div class="form-group">
									<label for="complaintinput2">Customer Mobile</label>
									<input type="phone" id="complaintinput2" class="form-control round border-primary" name="phone" value="{{$CustomersByid->phone}}">
								</div>


								<div class="form-group">
									<label for="donationinput7">Customer Address</label>
									<textarea id="donationinput7" rows="5" class="form-control round border-primary" name="address">
										{{$CustomersByid->address}}
									</textarea>
								</div>


								<div class="form-group">
									<label for="complaintinput2">Previous Balance</label>
									<input type="text" id="complaintinput2" class="form-control round border-primary" name="blance" value="{{$CustomersByid->blance}}">
								</div>



								

							
							

						</div>
					</div>
				</div>

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

@endsection