@extends('layouts.app')
@section('content')
<section>
  <div class="password-input" style="text-align: center">
    <div class="card bg-light mb-3 password-input-content">
      <div class="card-header">管理画面にログイン</div>
      <div class="card-body">
        <h4 class="card-title">パスワードを入力</h4>
        <form action="{{ url('login') }}" method="post">
          {{ csrf_field() }}
          <div class="form-group" style="text-align: center">
            <input type="password" class="form-control" id="password" name="password" placeholder="password">
            <button class="btn btn-primary" style="margin-top: 5%">ログインする</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
