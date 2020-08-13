@extends('frontendtemplate')
@section('content')
<div class="col-lg-9 my-4">
	<h1>Profile Page </h1>
	<div class="row py-4">
		<div class="col-md-4">
			<img src="{{asset('frontend/frontendimg/c1.png')}}" class="img-fluid" width="100" height="50">
			<a class="btn btn-info btn-sm my-2 border-primary">Change Profile Picture</a>		
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-4">
					
					<p>Name:</p>
					<hr>
					<p>Email:</p>
					<hr>
					<p>Phone No:</p>
				</div>
				<div class="col-md-8">
					<p>Hla Hla</p>
					<hr>
					<p>hlahla@gmail.com</p>
					<hr>
					<p>09-87656789</p>
				</div>

			
		</div>
	</div>
	
</div>
</div>
@endsection