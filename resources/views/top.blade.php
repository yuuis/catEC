@extends('layouts.app')
@section('content')
<section>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Cat EC
            </div>
            <button class="btn btn-primary">ねこ商品一覧</button>
            <button class="btn btn-primary">管理</button>
        </div>
    </div>
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

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