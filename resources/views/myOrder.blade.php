@extends('master')
@section('content')
    <div class="container cart-list">  
        
            <div class="trending-wapper">
                <h3>My order</h3>
                
                @foreach($orders as $item)
                    <div class="row item" >
                        <div class="col-md-4">
                            <a href="detail/{{$item->id}}"><img src="{{$item->gallery}}" class="trending-img" alt="..."> </a>
                            
                        </div>
                        <div class="col-md-5 dess">
                            <div class="tt">
                                <h4>Giá : {{$item->price}}</h4>
                                <h5>Tên :{{$item->name}}</h5>
                                <p>Mô tả : {{$item->description}}</p>
                                <h5>Địa chỉ : {{$item->address}}</h5>
                                <h5>Phương thức thanh toán : {{$item->payment_method}}</h5>
                                <h5>Trạng thái : {{$item->payment_status}}</h5>
                            </div>
                        </div>

                        
                    </div>
                @endforeach
                {{-- <a href="orderNow" class="btn btn-success nutMua">Mua ngay</a> --}}
            </div>
        
    </div>
@endsection