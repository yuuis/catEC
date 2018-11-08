@extends('layouts.app')
@section('content')
<section style="text-align: center">
<script>
  jQuery(function($){
    $.extend( $.fn.dataTable.defaults, {
      language: {
        url: "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Japanese.json"
      }
    });
    $("#table").DataTable();
  });
</script>
  <div class="table-wrap">
    <table id="table" class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>名前</th>
          <th>Email</th>
          <th>電話番号</th>
          <th>住所</th>
          <th>購入商品</th>
        </tr>
      </thead>
      <tbody>
        @if (isset($purchases))
          @foreach ($purchases as $purchase)
            <tr>
              <td>
                {{ $purchase->user->id }}
              </td>
              <td>
                {{ $purchase->user->name }}
              </td>
              <td>
                {{ $purchase->user->email }}
              <td>
                {{ $purchase->user->phone_number }}
              </td>
              <td>
                {{ $purchase->user->address }}
              </td>
              <td>
                {{ $purchase->product->name }}
              </td>
            </tr>
          @endforeach
          @endif
      </tbody>
    </table>
  </div>
</section>
<button type="button" class="btn btn-info" onclick="javascript:window.history.back(-1);return false;" style="margin-left: 5%">戻る</button>
@endsection
