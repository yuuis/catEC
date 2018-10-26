@extends('layouts.app')
@section('content')
<section>
  <div class="card success-purchase">
    <img class="card-img-top" src="images/cat.jpg" alt="Card image cat" style="height: 1000px; object-fit: cover;">
    <div class="card-body">
      <h4 class="card-title success-purchase-message">注文が完了しました！</h4>
      <p class="card-text">商品は入力された住所に発送されます。発送までには時間がかかる場合があります。</p>
      <a href="{{ url('/products') }}" class="btn btn-primary">商品一覧にもどる</a>
    </div>
  </div>
</section>
@endsection
