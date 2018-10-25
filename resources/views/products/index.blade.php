@extends('layouts.app')
@section('content')
<section>
  <div class="products">
    @foreach($products as $product)
      <a href="products/{{$product->id}}" style="text-decoration: none;">
        <div class="card product" style="width: 20rem;">
          <img class="card-img-top" src="images/{{ $product->image }}" alt="image of {{$product->name}}">
          <div class="card-body">
            <p>{{ $product->name }}</p>
            <div class="card-footer">
              <b>{{ $product->price }}円</b>
            </div>
            <!-- <p class="card-text">{{ $product->description }}</p> -->
          </div>
        </div>
      </a>
    @endforeach
  </div>
</section>
@endsection
