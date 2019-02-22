@extends('admin.master')
@section('title','Update Category')

@section('body_content')


<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title" id="basic-layout-form-center">Category update form</h4>
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

				{!! Form::open(['url' => '/updateCategory','name'=>'updateForm']) !!} <!-- use collective laravel pac-->

				<div class="row">
					<div class="col-md-6 offset-md-3">
						<div class="form-body">
							<div class="form-group">
								{{Form::label('text', 'Category Name:')}}
								
								<input type="text" name="NewCategoryName" class="form-control border-primary" value="{{$categoryByid->CategoryName}}" required="required">

								<!-- pass id -->
								<input type="hidden" name="CategoryId" class="form-control" value="{{$categoryByid->id}}">

							</div>


							<div class="form-group">
								{{Form::label('text', 'Category Description:')}}
								
								<input type="text" name="NewCategoryDecs" class="form-control border-primary" value="{{$categoryByid->CategoryDescription}}" required="required">

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


      <script type="text/javascript">
      	document.forms['updateForm'].elements['status'].value={{$categoryByid->PublicationStatus}}
      </script>

@endsection
