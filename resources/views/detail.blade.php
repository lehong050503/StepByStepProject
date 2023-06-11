@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="{{$products['gallery']}}" alt="" class="detail-img">
            </div>
            <div class="col-sm-6">
                <a href="/">Trang chủ</a>
                <h3>{{$products['name']}}</h3>
                <h2>Price : {{$products['price']}}</h2>
                <h2>Description : {{$products['description']}}</h2>
                <br> <br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" id="" value="{{$products['id']}}">
                    <button class="btn btn-primary">Thêm vào giỏ hàng</button>
                </form>
                
                <br> <br>
                <button class="btn btn-success">Mua ngay</button>
            </div>
        </div>
    </div>
@endsection