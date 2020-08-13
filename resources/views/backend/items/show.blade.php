@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Detail(Your UI)</h2>
		<table class="table table-bordered">
			<thead>
			<tr>
				<th>No</th>
				<th>Image</th>
				<th>Codeno</th>
				<th>Name</th>
				<th>Price</th>
				<th>Description</th>
				<th>Brand</th>
				<th>Subcatagory</th>
				
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp

			<tr>
				<td>{{$i++}}</td>
				<td><img src="{{asset($item->photo)}}" width="90" height="90"></td>
				<td>{{$item->codeno}}
				</td>
				<td>{{$item->name}}</td>
				<td>{{$item->price}} MMK</td>
				<td>{{$item->description}}</td>
				<td>{{$item->brand->name}}</td>
				<td>{{$item->subcategory->name}}</td>
				
			</tr>
		</tbody>
		</table>
</div>
@endsection