@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Categories Edit(Form with Old Values)</h2>
	@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
	@endif
	<form method="POST" action="{{route('categories.update',$category->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="{{$category->name}}">
		</div>
		
		
		<div class="form-group">
			<label>Photo</label>
			<input type="file" name="photo" class="form-control-file">
			<img src="{{asset($category->photo)}}" width="70" height="70">
			<input type="hidden" name="oldphoto" value="{{$category->photo}}">
		</div>
		<input type="submit" value="Update" class="btn btn-outline-primary">

	</form>
</div>
@endsection