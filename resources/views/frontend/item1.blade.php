@extends('frontendtemplate')
@section('content')
<div class="col-lg-9 my-4">
	<h1>Item Page Filer By brand and category</h1>

	<div class="row">
    @foreach($items as $item)
    <div class="col-lg-4 col-md-6 mb-4 my-3">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="{{asset('frontend/frontendimg/c1.png')}}" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="#">Item1</a>
          </h4>
          <h5>6000</h5>
          <p class="card-text">ghhjlk</p>
        </div>
        <div class="card-footer">
          <a href="#" class="btn btn-info">Add To Cart</a>
          <a href="{{route('detailpage',$item->id)}}" class="btn btn-primary">Detail</a>

        </div>
      </div>
    </div>
    @endforeach

   

  </div>


   

  </div>
	

@endsection
