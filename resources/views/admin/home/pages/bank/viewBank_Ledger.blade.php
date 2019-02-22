@extends('admin.master')
@section('title','Bank Ledger')


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
			<h4 class="card-title" id="basic-layout-form-center">Bank Ledger</h4>
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
				<div class="text-md-right">
                <button type="button" class="btn btn-warning">Print</button>
					
				</div>
                
                <div class="col-md-12 text-xs-center text-md-center">
				<h2>{{$BankByid->bankName}}</h2> 
				<p class="">A/C Number :{{$BankByid->ACNo}}</p>
				<p class="">Branch : {{$BankByid->Branch}}</p>
                 Print Date: 09/01/2019 11:36:34
			</div>


			{{-- upper loyer start--}}
				<div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Withdraw / Deposite ID</th>
                                <th>Debit (+)</th>
                                <th>Credit (-)</th>
                                <th>Balance</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>22-05-2019</td>
                                <td>546789</td>
                                <td>35000 TK.</td>
                                <td>5000 TK.</td>
                                <td>30000 TK.</td>

                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            {{-- upper loyer end--}}
				
			</div>
		</div>
	</div>
</div>
<!-- form end -->

@endsection