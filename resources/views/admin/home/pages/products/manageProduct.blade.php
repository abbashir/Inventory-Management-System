@extends('admin.master')
@section('title','Manage Product')

@section('body_content')

<?php $m = Session::get('message') ?>
@if (@isset ($m))
<div class="alert alert-success no-border mb-2" role="alert">
    <strong>Well done!</strong> {{$m}}
  </div>
@endif

<!-- product table -->
<div class="card col-xs-12">
            <div class="card-header">
                <h4 class="card-title">Product List</h4>
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
                        <th>Product Name</th>
                        <th>Product Model</th>
                        <th>Quantity</th>
                        <th>Supplier Price</th>
                        <th>Sell Price</th>
                        <th style="width: 160px;">Action</th>

             
                  </tr>
             </thead>

              <tbody>
            @foreach($products as $product)
            <tr class="">

                    <td>{{$product->productName}}</td>
                    <td>{{$product->productModel}}</td>
                    <td>{{$product->productQuantity}}</td>
                    <td>{{$product->SupplierPrice}}</td>
                    <td>{{$product->SellPrice}}</td>
                  

                  <td>
                      <a href="{{url('/product/update/'.$product->id)}}" class="btn btn-success" style="margin-right: 10px;">
                       <i class="icon-edit2"></i>
                     </a>

                     <a href="{{url('/product/delete/'.$product->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure delete this product ?')">
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