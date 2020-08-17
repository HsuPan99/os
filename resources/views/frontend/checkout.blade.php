@extends('frontendtemplate')
@section('content')
<div class="col-lg-9">
	
	<div id="checkout_body">
	<div class="container my-4 text-center">
		<div class="row">
			<div class="offset-md-2 col-md-8">
				<h1>Check Out</h1>
				<div class="table-responsive">
					<table class="table table-bordered" >
						<thead>
							<tr>
								<th>No.</th>
								<th>Photo</th>
								<th>Item Name</th>
								<th>Price</th>
								<th>Qty</th>
								<th>Sub Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Item 1</td>
								<td>500</td>
								<td><button class="min btn btn-outline-secondary btn-sm mx-2">-</button>3<button class="max btn btn-outline-secondary btn-sm mx-2">+</button></td>
								<td>1500</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Item 2</td>
								<td>500</td>
								<td><button class="min btn btn-outline-secondary btn-sm mx-2">-</button>3<button class="max btn btn-outline-secondary btn-sm mx-2">+</button></td>
								<td>1500</td>
							</tr>
							
						</tbody>
					</table>

				</div>
			</div>
			<div class="offset-md-2 col-md-8">
				<div class="form-group">
					<textarea class="form-control notes" placeholder="Notes">
						
					</textarea>
					<input type="hidden" name="" class="total">
				</div>
			</div>
			<div class="offset-md-2 col-md-4 text-left">
				<a href="{{route('homepage')}}" class="btn btn-primary">Continue Shopping</a>

			</div>

			<div class="offset-md-2 col-md-4 text-left">
			@role('customer')	
			<a class="btn btn-info buy_now" href="#">Check Out</a>
			@else
			<a class="btn btn-primary" href="{{route('login')}}">Login To Checkout</a>
			@endrole	
					
					 	
					 

				
			</div>
		</div>
	</div>
</div>
	
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection