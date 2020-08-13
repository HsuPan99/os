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
				<a href="products.php" class="btn btn-primary">Continue Shopping</a>
			</div>
			<div class="offset-md-2 col-md-4 text-left">
				
					 	<button class="btn btn-info buy_now">Buy Now</button>
					
					
					 	
					 

				
			</div>
		</div>
	</div>
</div>
	
</div>
@endsection