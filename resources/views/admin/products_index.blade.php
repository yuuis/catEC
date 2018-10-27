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
          <th>価格</th>
          <th>写真</th>
          <th>説明文</th>
        </tr>
      </thead>
      <tbody>
        @if (isset($products))
          @foreach ($products as $product)
          <tr>
            <td>
              {{ $product->id }}
            </td>
            <td>
              {{ $product->name }}
            </td>
            <td>
              {{ $product->price }}
            <td>
              {{ $product->image }}
            </td>
            <td>
              {{ $product->description }}
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
