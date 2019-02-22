@extends('admin.master')
@section('title','Category')

@section('body_content')

<?php $m = Session::get('message') ?>
@if (@isset ($m))
<div class="alert alert-success no-border mb-2" role="alert">
    <strong>Well done!</strong> <span style="color: #fff;">{{$m}}</span>
  </div>
@endif

<!-- Trigger the modal with a button -->
      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Category</button>
      <br> <br>

      <div class="container">
 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Category</h4>
        </div>
        
        <div class="modal-body"> 
          {!! Form::open(['url' => '/saveCategory']) !!} <!-- use collective laravel pac-->
              <div class="form-group">

                 {{Form::label('text', 'Category Name:')}}
                
                 {{Form::text('category_name',$value=null,['class'=>'form-control border-primary','placeholder'=>'Enter Category Name','required','autofocus'])}}

              </div>

               <div class="form-group">

                 {{Form::label('text', 'Category Description:')}}
                
                 {{Form::text('category_Description',$value=null,['class'=>'form-control border-primary','placeholder'=>'Enter Category Description','required','autofocus'])}}

              </div>

              <div class="form-group">

                {{Form::label('text', 'Status:')}}

                      <div class="form-group">

{{ Form::select('status', ['1' => 'Active', '0' => 'Inactive'], null, ['placeholder' => 'Pick a Status','class'=>'form-control border-primary','required','autofocus'])}}


                      </div>
              </div>
             
        </div>

        
         <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="brand">Submit</button>
        </div>

      {!! Form::close() !!}
    
      </div>
      
    </div>
  </div>
  
</div>

<!-- modal end -->

<!-- Category table -->
<div class="card col-xs-12">
            <div class="card-header">
                <h4 class="card-title">Category table</h4>
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
      
      <div class="table-responsive">
          <table class="table table-bordered mb-0">
              <thead class="thead-inverse">
                    <tr>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Status</th>
                        <th>Action</th>
                  </tr>
             </thead>

              <tbody>
            @foreach($categories as $category)
            <tr>

                    <td>{{$category->CategoryName}}</td>
                    <td>{{$category->CategoryDescription}}</td>
                    <td>{{$category->PublicationStatus == 1 ? 'Active' : 'Inactive'}}</td>

                    <td>
                      <a href="{{url('/category/update/'.$category->id)}}" class="btn btn-success" style="margin-right: 30px;">
                       <i class="icon-edit2"></i>
                     </a>

                     <a href="{{url('/category/delete/'.$category->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure delete this category ?')">
                      <i class="icon-trash-o"></i>
                    </a>

                  </td>

          </tr>
          @endforeach
           
            </tbody>
                    </table><br>
                </div>
            </div>
        </div>

@endsection