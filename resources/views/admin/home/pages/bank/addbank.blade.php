@extends('admin.master')
@section('title','Bank')

@section('body_content')

<?php $m = Session::get('message') ?>
@if (@isset ($m))
<div class="alert alert-success no-border mb-2" role="alert">
    <strong>Well done!</strong> {{$m}}
  </div>
@endif

 <!-- <h3 class="text-success text-center">{{Session::get('message')}}</h3> -->
 <!-- Trigger the modal with a button -->
      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New Bank</button>
      <br> <br>

      <div class="container">
 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Bank</h4>
        </div>
        
        <div class="modal-body"> 
          {!! Form::open(['url' => '/banksave']) !!} <!-- use collective laravel pac-->
              
             <div class="form-group">
                  <label for="complaintinput2">Bank Name</label>
                  <input type="text" id="complaintinput2" class="form-control border-primary" placeholder="Bank Name" name="bankName">

                  <span class="text-danger">{{$errors->has('bankName')? $errors->first('bankName') : ''}}</span>
             </div>

             <div class="form-group">
                  <label for="complaintinput2">A/C Name</label>
                  <input type="text" id="complaintinput2" class="form-control border-primary" placeholder="A/C Name" name="ACName">

                  <span class="text-danger">{{$errors->has('ACName')? $errors->first('ACName') : ''}}</span>
             </div>

              <div class="form-group">
                  <label for="complaintinput2">A/C Number</label>
                  <input type="text" id="complaintinput2" class="form-control border-primary" placeholder="A/C Number" name="ACNo">

                  <span class="text-danger">{{$errors->has('ACNo')? $errors->first('ACNo') : ''}}</span>
             </div>

             <div class="form-group">
                  <label for="complaintinput2">Branch</label>
                  <input type="text" id="complaintinput2" class="form-control border-primary" placeholder="Branch " name="Branch">

                  <span class="text-danger">{{$errors->has('Branch')? $errors->first('Branch') : ''}}</span>
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

<!-- brand table -->
<div class="card col-xs-12">
            <div class="card-header">
                <h4 class="card-title">Bank List</h4>
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
                        <th>bank Name</th>
                        <th>A/C Name</th>
                        <th>A/C NO</th>
                        <th>Branch</th>

                        <th>Action</th>
                  </tr>
             </thead>

             <tbody>
            @foreach($banks as $bank)
            <tr>

                    <td>{{$bank->bankName}}</td>
                    <td>{{$bank->ACName}}</td>
                    <td>{{$bank->ACNo}}</td>
                    <td>{{$bank->Branch}}</td>

                    

                    <td>

                       <a href="{{url('/bank/ledger/'.$bank->id)}}" class="btn btn-success" style="margin-right: 30px;">
                       <i class="icon-eye6"></i>
                     </a>


                      <a href="{{url('/bank/update/'.$bank->id)}}" class="btn btn-success" style="margin-right: 30px;">
                       <i class="icon-edit2"></i>
                     </a>

                     

                     <a href="{{url('/bank/delete/'.$bank->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure delete this brand ?')">
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