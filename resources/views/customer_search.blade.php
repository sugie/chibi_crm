@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">検索条件</div>
                    <div class="card-body">
                        <form action="/customer_search" method="POST">
                            @csrf
                            <table>
                                <tr>
                                    <td>氏名</td>
                                    <td>
                                        <input type="text" name="name"
                                               value="{{isset($validated['name'])?$validated['name']:''}}"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>年齢</td>
                                    <td>
                                        <input type="number" min="0" max="999" name="age_from"
                                               value="{{isset($validated['age_from'])?$validated['age_from']:''}}"
                                        />
                                        〜
                                        <input type="text" min="0" max="999" name="age_to"
                                               value="{{isset($validated['age_to'])?$validated['age_to']:''}}"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <button type="submit" class="btn btn-primary">　　検　索　　</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                        @include('errors')
                    </div>
                </div>
                <br/>
                @if(!empty($customers))
                    <div class="card">
                        <div class="card-header">
                            <p>検索結果</p>
                            <ul>
                                @foreach($search_criterias as $criteria)
                                    <li>{{$criteria}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-body">
                            <ul>
                                @foreach($customers as $customer)
                                    <li>
                                        <a href="/customers/{{$customer['id']}}">{{ $customer['name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
