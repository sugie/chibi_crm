@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">社員一覧
                    </div>
                    <table width="100%" border="1">
                        <thead>
                        <tr style="background-color: lightgray">
                            <td>氏名</td>
                            <td>所属店舗</td>
                            <td>ロール</td>
                            <td>メール</td>
                        </tr>
                        </thead>
                        @foreach($users as $user)  {{-- Controllerから渡された users を foreach で回す --}}
                        <tr>
                            <td>{{ $user->name }}</td> {{-- 各要素を表示 --}}
                            <td>{{ $user->shop->name }}</td>
                            <td>{{ $user->role->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
