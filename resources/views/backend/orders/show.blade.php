@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Order Detail</h2>
	<div class="card shadow mb-4">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered"  width="100%" cellspacing="0">
 					<tr>
 						<h5 class="text-center">ONLINE SHOP</h5>
 						<p class="text-center">MEIKTILA<br>Tel:09951400729</p>
 					</tr>
 					<thead>
 						<tr>
 							<td colspan="6">
 								<div class="row">
 									<div class="col-md-3">
 										<h6>Casher</h6>
 										
 										<h6>Voucher</h6>
 									</div>
 									<div class="col-md-3">
 										
 										<h6>  {{Auth::user()->name}}</h6>
 										<h6>{{$order->voucherno}}</h6>
 									</div>
 								<div class="col-md-3">
 									<h6>Date</h6>
 									<h6>Order Date</h6>
 								</div>
 								<div class="col-md-3">

 									<h6>{{$order->orderdate=date('Y-m-d')}}</h6>
 									<h6>{{$order->orderdate}}</h6>
 								</div>

 								</div>
 							</td>
 							
 						</tr>
 					</thead>
 					<thead>



 						<tr>
 							<th>No.</th>

 							<th>Item Name</th>

 							<th>Price</th>
 							<th>Discount</th>
 							<th>Qualtity</th>
 							<th>Total</th>
 						</tr>

 					</thead>
 					<tbody>
					@php
						$i=1;
					@endphp
					@foreach($order->items as $item)

					<tr>
						<td>{{$i++}}</td>

						<td>{{$item->name}}
							

						</td>
						
						<td>{{$item->price}}</td>
						<td>{{$item->discount}}</td>
						
						<td>{{$item->pivot->qty}}</td>
						<td>{{$item->pivot->qty*$item->discount}}</td>


					</tr>
					@endforeach
					<tr>
						<td colspan="5">Total Amount</td>
						<td>{{$order->total}}</td>
					</tr>
				</tbody>
 					
 				</table>
			</div>
		</div>
	</div>

</div>
@endsection