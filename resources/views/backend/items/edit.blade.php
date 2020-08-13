@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Edit(Form with Old Values)</h2>
	@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
	@endif
	<form method="POST" action="{{route('items.update',$item->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label>Codeno</label>
			<input type="text" name="codeno" readonly="" class="form-control" value="{{$item->codeno}}">
		</div>
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="{{$item->name}}">
		</div>
		<div class="form-group">
			<label>Price</label>
			<input type="text" name="price" class="form-control" value="{{$item->price}}">
		</div>
		<div class="form-group">
			<label>Discount</label>
			<input type="text" name="discount" class="form-control" value="{{$item->discount}}">
		</div>
		<div class="form-group">
			<label>Photo</label>
			<input type="file" name="photo" class="form-control-file">
			<img src="{{asset($item->photo)}}" width="70" height="70">
			<input type="hidden" name="oldphoto" value="{{$item->photo}}">
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description">{{$item->description}}</textarea>
		</div>



		<div class="form-group">
			<label>Brand</label>
			<select name="brand" class="form-control">
				@foreach($brands as $brand)

				<option  value="{{$brand->id}}"
					@if($brand->id==$item->brand_id)
					{{'selected'}}
					@endif
					>{{$brand->name}}</option>
				@endforeach


			</select>
		</div>
		<div class="form-group">
			<label>Sub Category</label>
			<select name="subcategory" class="form-control">
				@foreach($subcategories as $subcategory)

				<option  value="{{$subcategory->id}}"
					@if($subcategory->id==$item->subcategory_id)
					{{'selected'}}
					@endif
					>{{$subcategory->name}}</option>
					@endforeach


			</select>

		</div>

		<input type="submit" value="Update" class="btn btn-outline-primary">

	</form>
</div>
@endsection