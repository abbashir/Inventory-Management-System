@extends('admin.master')
@section('title','Bank transaction')


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
			<h4 class="card-title" id="basic-layout-form-center">Bank transaction</h4>
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

				{!! Form::open(['url' => '/saveTransaction','name'=>'addproductForm']) !!} <!-- use collective laravel pac-->

				<div class="row">
					<div class="col-md-6 offset-md-3">
						<div class="form-body">

							<div class="form-group">
								{{Form::label('text', 'Date :')}}
								
								<input type="date" name="Tran_date" class="form-control round border-primary" required="required">

							</div>


							



								<div class="form-group">
									<label for="complaintinput2">Account Type :</label>

										<select id="issueinput5" name="acType" class="form-control round border-primary" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" data-original-title="" >
										<option value="debit">Debit(+)</option>
										<option value="credit">Credit(-)</option>

									
									</select>

								</div>


								<div class="form-group">
									<label for="complaintinput2">Bank Name :</label>
										<select id="issueinput5" name="bankName" class="form-control round border-primary" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" data-original-title="" title="">
										<option value="">Pick Bank</option>
										
										@foreach($bank as $bank)
			   <option value="{{$bank->bankName}}"> {{$bank->bankName}} </option>
										@endforeach

									</select>
								</div>


								<div class="form-group">
									<label for="donationinput7">Description :</label>
									<textarea id="donationinput7" rows="2" class="form-control round border-primary" name="description" placeholder="Description"></textarea>
								</div>


								<div class="form-group">
									<label for="complaintinput2">Withdraw / Deposite ID :</label>
									<input type="text" id="complaintinput2" class="form-control round border-primary" placeholder="Withdraw / Deposite ID" name="WDNo">
								</div>


								<div class="form-group">
									<label for="complaintinput2">Amount :</label>
									<input type="text" id="complaintinput2" class="form-control round border-primary" placeholder="Amount" name="Amount">
								</div>



								

							
							

						</div>
					</div>
				</div>

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

@endsection