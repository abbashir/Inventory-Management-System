@extends('admin.master')
@section('title','Manage Invoice')

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
                <h4 class="card-title">Manage Invoice</h4>
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
                        <th>Invoice No</th>
                        <th>Customer name</th>
                        <th>Date</th>
                        <th>Total Amount</th>

                        <th>Action</th>
                  </tr>
             </thead>

              <tbody>
            @foreach($Orders as $Order)
            <tr>

                    <td>57899</td>
                    <td>{{$Order->CustomerName}}</td>
                    <td>{{$Order->Date}}</td>
                    <td>{{$Order->total}}</td>

                    

                    <td>
                      <a href="" class="btn btn-success" style="margin-right: 30px;">
                       <i class="icon-edit2"></i>
                     </a>

                     <a href="" class="btn btn-danger" onclick="return confirm('Are you sure delete this customer ?')">
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