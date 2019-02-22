@extends('admin.master')
@section('title','Customer list')

@section('body_content')

<?php $m = Session::get('message') ?>
@if (@isset ($m))
<div class="alert alert-success no-border mb-2" role="alert">
    <strong>Well done!</strong> {{$m}}
  </div>
@endif

 <!-- <h3 class="text-success text-center">{{Session::get('message')}}</h3> -->



<!-- brand table -->
<div class="card col-xs-12">
            <div class="card-header">
                <h4 class="card-title">Customer list</h4>
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
                        <th>Customer Name</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Blance</th>

                        <th>Action</th>
                  </tr>
             </thead>

              <tbody>
            @foreach($Customers as $Customer)
            <tr>

                    <td>{{$Customer->name}}</td>
                    <td>{{$Customer->address}}</td>
                    <td>{{$Customer->phone}}</td>
                    <td>{{$Customer->blance}}</td>

                    

                    <td>
                      <a href="{{url('/customers/update/'.$Customer->id)}}" class="btn btn-success" style="margin-right: 30px;">
                       <i class="icon-edit2"></i>
                     </a>

                     <a href="{{url('/customers/delete/'.$Customer->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure delete this customer ?')">
                      <i class="icon-trash-o"></i>
                    </a>

                  </td>

          </tr>
          @endforeach
           
            </tbody>
                    </table>
                </div><br>
            </div>
        </div>

@endsection