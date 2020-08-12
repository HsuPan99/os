@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Create(Form)</h2>

	<div class="row">
		<div class="offset-md-2 col-md-8">
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<form method="POST" action="{{route('items.store')}}" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label>Codeno</label>
					<input type="text" name="codeno" class="form-control">
				</div>
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Price</label>
					<input type="text" name="price" class="form-control">
				</div>
				<div class="form-group">
					<label>Discount</label>
					<input type="text" name="discount" class="form-control">
				</div>
				<div class="form-group">
					<label>Photo</label>
					<input type="file" name="photo" class="form-control-file">
				</div>
				<div class="form-group">
					<label>Description</label>
					<textarea class="form-control" name="description"></textarea>
				</div>
				
				
					
					<div class="form-group">
						<label>Brand</label>
						<select name="brand" class="form-control">
							@foreach($brands as $brand)

							<option  value="{{$brand->id}}">{{$brand->name}}</option>
							@endforeach
							
							
						</select>
					</div>
					<div class="form-group">
						<label>Sub Category</label>
						<select name="subcategory" class="form-control">
							@foreach($subcategories as $subcategory)

							<option  value="{{$subcategory->id}}">{{$subcategory->name}}</option>
							@endforeach

							
						</select>
						
					</div>
					
					<input type="submit" value="Create" class="btn btn-outline-primary">

			</form>
		</div>
	</div>





</div>
@endsection