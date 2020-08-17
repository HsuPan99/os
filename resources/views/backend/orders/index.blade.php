@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Order List(Table)</h2>
	<a href="{{route('orders.create')}}" class="btn btn-success float-right">Add Orders</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Voucher No</th>
				<th>Order Date</th>
				<th>Notes</th>
				<th>Total</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($orders as $order)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$order->voucherno}}
					{{-- <a href="{{route('orders.show',$order->id)}}">
					<span class="badge badge-primary badge-pill">Detail</span></a> --}}
					{{-- <a href="#" class="box" data-name="{{$order->name}}" data-photo="{{asset($order->photo)}}" data-price="{{$order->price}}" data-desc="{{$order->description}}">
					<span class="badge badge-primary badge-pill">Detail</span></a> --}}
				</td>

				<td>{{$order->orderdate}}</td>
				<td>{{$order->note}}</td>
				<td>{{$order->total}}</td>
				<td>
					{{-- <a href="{{route('orders.edit',$order->id)}}" class="btn btn-warning">Edit</a> --}}
					<form method="post" action="{{route('orders.destroy',$order->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
						@csrf
						@method('DELETE')
						<a href="{{route('orders.show',$order->id)}}" class="btn btn-warning">Detail</a>
						<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>


</div>
@endsection