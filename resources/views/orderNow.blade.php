@extends('master')
@section('content')
    <div class="container">  
        <table class="table">
            {{-- <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead> --}}
            <tbody>
              <tr>
                
                <td>Amount</td>
                <td>$ {{ $total }}</td>
              </tr>
              <tr>
                
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                
                <td>Delivery</td>
                <td>$ 10</td>
              </tr>
              <tr>
                
                <td>Total Amount</td>
                <td>$ {{ $total+10 }}</td>
              </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderPlace" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Địa chỉ : </label>
                  <br>
                  <textarea name="address" id="" cols="173" rows="3"></textarea>
                  <div id="emailHelp" class="form-text">Vui lòng nhập địa chỉ chính xác của bạn.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Phương thức thanh toán : </label> <br><br>
                  <input type="radio" name="payment" value="cash"> <span>Thanh toán Online</span>
                  <input type="radio" name="payment" value="cash"> <span>Thanh toán MOMO</span>
                  <input type="radio" name="payment" value="cash"> <span>Thanh toán tiền mặt</span>
                  {{-- <select class="form-select" name="payment" aria-label="Default select example">
                    <option selected>Chọn phương thức thanh toán </option>
                    <option value="1">Thanh toán bằng tài khoản ngân hàng</option>
                    <option value="2">Thanh toán bằng MOMO</option>
                    <option value="3">Thanh toán bằng VNPAY</option>
                  </select> --}}
                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
            </form>
        </div>
    </div>
@endsection