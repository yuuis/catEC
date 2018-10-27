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
                {{ $purchase[0]->id }}
              </td>
              <td>
                {{ $purchase[0]->name }}
              </td>
              <td>
                {{ $purchase[0]->email }}
              <td>
                {{ $purchase[0]->phone_number }}
              </td>
              <td>
                {{ $purchase[0]->address }}
              </td>
              <td>
                {{ $purchase[1]->name }}
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
