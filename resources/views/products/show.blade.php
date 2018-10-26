@extends('layouts.app')
@section('content')
  <section>
    <h1 class="product-title">{{ $product->name }}</h1>
    <div class="product-info">
      <div class="product-img">
        <img src="{{ url('images/' . $product->image) }} " alt="image of {{ $product->name }}">
      </div>
      <div class="product-basic-info">
        <div class="card border-light mb-3">
        <div class="card-header">商品情報</div>
        <div class="card-body">
          <h4 class="card-title">{{ $product->name }}</h4>
          <p class="card-text product-price">{{ $product->description }}</p>
          <p class="card-text alert alert-primary" style="font-size: 20px"><span class="badge badge-primary" style="font-size: 15px">価格</span>: <b>{{ $product->price }}円</b></p>
          <a href="{{ url(('purchase/create/' . $product->id)) }}"><button class="btn btn-warning product-purchase"><b>購入する</b></button></a>
        </div>
      </div>
    </div>
  </section>
@endsection
