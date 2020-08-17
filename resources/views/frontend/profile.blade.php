@extends('frontendtemplate')
@section('content')
<div class="col-lg-12 my-4">
	<h1 class="text-center">Profile Page </h1>
	{{-- <div class="row py-4">
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
	</div> --}}
	<form class="form-group" enctype="multipart/form-data">
		<div class="col-lg-3"> 
			<img src="{{asset('frontend/frontendimg/c3.png')}}" style=" width: 150px; height: 150px">
			<a href="" class="btn btn-info btn-sm my-3">Change Profile Picture</a>
		</div>
	
		<div class="col-md-4">
			<input type="text" name="user_name" value="{{Auth::user()->name}}" class="form-control form-control-user" placeholder="Name">
			<hr>
			<input type="email" name="user_name" value="{{Auth::user()->email}}" class="form-control form-control-user" placeholder="Email">
			<a href="" class="btn btn-info my-2 btn-sm">Change Profile</a>
		</div>

	

	
</form>
</div>

@endsection