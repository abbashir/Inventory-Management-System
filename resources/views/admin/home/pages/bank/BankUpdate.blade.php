@extends('admin.master')
@section('title','Bank Edit')

@section('body_content')


<!-- form start -->
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title" id="basic-layout-form-center">Bank Edit form</h4>
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

				{!! Form::open(['url' => '/Bankupdate','name'=>'updateForm']) !!} <!-- use collective laravel pac-->

				<div class="row">
					<div class="col-md-6 offset-md-3">
						<div class="form-body">
							
								
								<div class="form-group">
									<label for="complaintinput2">Bank Name</label>
									<input type="text" class="form-control border-primary"  name="bankName" value="{{$BankByid->bankName}}">
								</div>

								<!-- pass id -->
								<input type="hidden" name="BankId" class="form-control" value="{{$BankByid->id}}">

								<div class="form-group">
									<label for="complaintinput2">A/C Name</label>
									<input type="text" class="form-control border-primary"  name="ACName" value="{{$BankByid->ACName}}">
								</div>

								<div class="form-group">
									<label for="complaintinput2">A/C Number</label>
									<input type="text" class="form-control border-primary"  name="ACNo" value="{{$BankByid->ACNo}}">
								</div>

								<div class="form-group">
									<label for="complaintinput2">Branch</label>
									<input type="text" class="form-control border-primary"  name="Branch" value="{{$BankByid->Branch}}">
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
