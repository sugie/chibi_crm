@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $customer->name }}({{ $customer->id }})</div>
                    <p>店舗：{{ $customer->shop['name'] }}</p>
                    <p>郵便番号：{{ $customer->postal }}</p>
                    <p>住所：{{ $customer->address }}</p>
                    <p>メール：{{ $customer->email }}</p>
                    <p>生年月日：{{ $customer->birthdate }}</p>
                    <p>電話番号：{{ $customer->phone }}</p>
                    <p>クレーマーフラグ：{{ $customer->kramer_flag }}</p>
                    <p>更新日：{{ $customer->created_at }}</p>
                    <p>登録日日：{{ $customer->updated_at }}</p>

{{--                    @include('errors')--}}
                </div>
                <br/>
                <div class="card">
                    <form action="/customers/{{$customer->id}}/logs" method="POST">
                        @csrf
                        Log: <input type="text" name="log" value="{{old('log')}}">
                        <button type="submit" class="btn btn-sm btn-outline-primary">投稿</button>
                    </form>

                </div>
                <br/>
                <div class="card">
                    <ul>
                        @foreach($customer->customerLogs as $log)
                            <li>
                                {{ $log->log }}<br/>
                                記入時刻：{{ $log->created_at }} 記入者：{{ $log->user->name }}<br/>
                                <br/>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

