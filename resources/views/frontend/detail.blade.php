@extends('frontendtemplate')
@section('content')
<div class="col-lg-9">
	<h2>Item  Detail Page Filer By brand and category</h2>
	<div class="row py-4">
		<div class="col-md-6">
			<img src="{{asset('frontend/frontendimg/c1.png')}}" class="img-fluid" width="200" height="50">
		</div>
		<div class="col-md-6">
			<h4>Item Information</h4>
			<p>Item Name:Apple</p>
			<p>Item Price:800MMK</p>
			<p>Category:Fruit</p>

			
		</div>
	</div>
	
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection