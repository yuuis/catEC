@extends('layouts.app')
@section('content')
<section>
  <div class="admin-item" style="text-align: center">
    <div class="card bg-light mb-3 admin-item-content">
      <div class="card-header"><h3>商品管理</h3></div>
      <div class="card-body">
        <h4 class="card-title"><a href="{{ url('admin/products') }}"><button class="btn btn-primary" style="width: 30%">商品一覧</button></a></h4>
      </div>
    </div>
  </div>

  <div class="admin-item" style="text-align: center">
    <div class="card bg-light mb-3 admin-item-content">
      <div class="card-header"><h3>購入者管理</h3></div>
      <div class="card-body">
        <h4 class="card-title"><a href="{{ url('admin/purchases') }}"><button class="btn btn-primary" style="width: 30%">購入者一覧</button></a></h4>
      </div>
    </div>
  </div>
</section>
@endsection
