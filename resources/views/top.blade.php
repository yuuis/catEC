@extends('layouts.app')
@section('content')
<section>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Cat EC
            </div>
            <a href="{{ url('/products') }}"><button class="btn btn-primary top-button">ねこ商品一覧</button></a>
            <a href="{{ url('/login') }}"><button class="btn btn-primary top-button">管理</button></a>
        </div>
    </div>
    <style>

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</section>
@endsection
