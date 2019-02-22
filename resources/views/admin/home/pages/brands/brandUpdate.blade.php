@extends('admin.master')
@section('title','Update Brands')

@section('body_content')


<!-- form start -->
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title" id="basic-layout-form-center">Brand update form</h4>
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

				{!! Form::open(['url' => '/update','name'=>'updateForm']) !!} <!-- use collective laravel pac-->

				<div class="row">
					<div class="col-md-6 offset-md-3">
						<div class="form-body">
							<div class="form-group">
								{{Form::label('text', 'Brand Name:')}}
								
								<input type="text" name="NewBrandName" class="form-control border-primary" value="{{$brandByid->BrandName}}" required="required">

								<!-- pass id -->
								<input type="hidden" name="BrandId" class="form-control" value="{{$brandByid->id}}">

							</div>

							<div class="form-group">
								{{Form::label('text', 'Status:')}}
								

								{{ Form::select('status', ['1' => 'Active', '0' => 'Inactive'], null, ['placeholder' => 'Pick a Status','class'=>'form-control border-primary','required','autofocus'])}}

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

  <script type="text/javascript">
      	document.forms['updateForm'].elements['status'].value={{$brandByid->PublicationStatus}}
      </script>

@endsection
