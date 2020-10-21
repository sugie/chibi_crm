@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">顧客</div>
                <table width="100%" border="1">
                    <thead>
                    <tr style="background-color: lightgray">
                        <td>氏名</td>
                        <td>店舗</td>
                        <td>郵便番号</td>
                        <td>住所</td>
                    </tr>
                    </thead>
                    @foreach($customers as $customer)
                    <tr>
                        <td>
                            <a href="/customers/{{ $customer->id }}">
                                {{ $customer->name }}
                            </a>
                        </td>
                        <td>{{ $customer->shop->name }}</td>
                        <td>{{ $customer->postal }}</td>
                        <td>{{ $customer->address }}</td>
                    </tr>
                    @endforeach
                </table>
                {{--  pagenation link -------------------------------------------------------------------------------       --}}
                <table width="100%">
                    <tr>
                        @if($customers->lastPage() > 1)
                        <td width="120px"><a href="{{ $customers->url(0) }}">最初のページへ</a></td>
                        <td width="120px">
                            @if($customers->previousPageUrl())
                            <a href="{{ $customers->previousPageUrl() }}">前のページへ</a>
                            @endif
                        </td>
                        <td width="120px" style="text-align: center">{{ $customers->currentPage() }}
                            / {{ $customers->lastPage() }}</td>
                        <td width="120px">
                            @if($customers->nextPageUrl())
                            <a href="{{ $customers->nextPageUrl() }}">次のページへ</a>
                            @endif
                        </td>
                        <td width="120px"><a href="{{ $customers->url($customers->lastPage()) }}">最後のページへ</a>
                        </td>

                        @endif
                    </tr>
                </table>
                {{--  End of pagenation link -------------------------------------------------------------------------       --}}

{{--                @include('errors')--}}
            </div>
        </div>
    </div>
</div>
@endsection
