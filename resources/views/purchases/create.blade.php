@extends('layouts.app')
@section('content')
<section>
  <div class="input-user-info">
    <div class="product-basic-info">
      <div class="card border-light mb-3 purchase-info">
      <div class="card-header">商品情報</div>
      <div class="card-body">
        <h4 class="card-title">{{ $product->name }}</h4>
        <p class="card-text product-price">{{ $product->description }}</p>
        <p class="card-text alert alert-primary" style="font-size: 20px"><span class="badge badge-primary" style="font-size: 15px">価格</span>: <b>{{ $product->price }}円</b></p>
      </div>

      <form action="{{ url('purchase') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="productId" value="{{ $product->id }}">
        <div class="form-row">
          <div class="form-group col-md-6 form-item">
            <label for="inputName">お名前</label>
            <input type="text" class="form-control" id="inputName" name="inputName" placeholder="猫村 ねこ" value="{{old('inputName')}}">
            @if($errors->has("inputName"))
              @foreach($errors->get("inputName") as $error)
                  <p style="color: red;">{{ $error }}</p>
              @endforeach
            @endif
          </div>
          <div class="form-group col-md-6 form-item">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="neco@cat.com" value="{{old('inputEmail')}}">
            @if($errors->has("inputEmail"))
              @foreach($errors->get("inputEmail") as $error)
                  <p style="color: red;">{{ $error }}</p>
              @endforeach
          @endif
          </div>
        </div>
        <div class="form-group form-item">
          <label for="inputAddress">電話番号</label>
          <input type="text" class="form-control" id="inputPhoneNumber" name="inputPhoneNumber" placeholder="02022220202" value="{{old('inputPhneNumber')}}">
          @if($errors->has("inputPhoneNumber"))
              @foreach($errors->get("inputPhoneNumber") as $error)
                  <p style="color: red;">{{ $error }}</p>
              @endforeach
          @endif
        </div>
        <div class="form-group form-item">
          <label for="inputAddress">住所</label>
          <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="東京都港区の公園" value="{{old('inputAddress')}}">
          @if($errors->has("inputAddress"))
              @foreach($errors->get("inputAddress") as $error)
                  <p style="color: red;">{{ $error }}</p>
              @endforeach
          @endif
        </div>
        <button type="submit" class="btn btn-warning product-purchase"><b>購入する</b></button>
        <p style="color: red; margin-top: 4%;">支払い方法は代金引換のみです。</p>
    </form>
    </div>
  </div>
</section>
@endsection
