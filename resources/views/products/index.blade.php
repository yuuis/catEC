@extends('layouts.app')
@section('content')
<section>
  <div class="products">
    @foreach($products as $product)
      <a href="products/{{$product->id}}" style="text-decoration: none;">
        <div class="card product" style="width: 20rem;">
          <img class="card-img-top" src="images/products/{{ $product->image }}" alt="image of {{$product->name}}">
          <div class="card-body">
            <p>{{ $product->name }}</p>
            <div class="card-footer">
              <b>{{ $product->price }}円</b>
            </div>
          </div>
        </div>
      </a>
    @endforeach
  </div>
</section>
@endsection
