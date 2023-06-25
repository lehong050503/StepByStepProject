@extends('master')
@section('content')
    <div class="container cart-list">  
        
            <div class="trending-wapper">
                <h3>List Products Cart</h3>
                <a href="orderNow" class="btn btn-success nutMua">Mua ngay</a>
                @foreach($products as $item)
                    <div class="row item" >
                        <div class="col-md-4">
                            <a href="detail/{{$item->id}}"><img src="{{$item->gallery}}" class="trending-img" alt="..."> </a>
                            
                        </div>
                        <div class="col-md-5 dess">
                            <div class="tt">
                                <h4>{{$item->price}}</h4>
                                <h5>{{$item->name}}</h5>
                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                        <div class="col-md-3 button">
                            {{-- <button class="btn btn-danger">Xóa khỏi giỏ hàng</button> --}}
                            <a href="/removeCart/{{$item->cart_id}}" class="btn btn-danger">Xóa khỏi giỏ hàng</a>
                        </div>
                        
                    </div>
                @endforeach
                <a href="orderNow" class="btn btn-success nutMua">Mua ngay</a>
            </div>
        
    </div>
@endsection