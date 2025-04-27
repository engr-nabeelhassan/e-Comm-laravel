@extends('master') 
@section('content')
<div class="container d-flex flex-column min-vh-100 custom-product">  
        <div class="col-sm-10">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>Rs. {{$total}}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>Rs. 0</td>
                    </tr>
                    <tr>
                        <td>Delivery</td>
                        <td>Rs. 200</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>Rs. {{$total+200}}</td>
                    </tr>
                </tbody>
            </table>
            <div>
            <form action="/orderplace" method="POST">
                @csrf 
  <div class="mb-3">
    <textarea name="address" placeholder="Enter Your Address" class="form-control"> </textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Payment Method</label>
    <br>
    <input type="radio" value="cash" name="payment"><span style="margin-left:8px;">Cash On Delivery</span>
    <br>
    <input type="radio" value="cash" name="payment"><span style="margin-left:8px;">Payments For Banks</span>
    <br>
    <input type="radio" value="cash" name="payment"><span style="margin-left:8px;">Payment Visa Cards</span>
  </div>
  <button type="submit" class="btn btn-primary">Buy Now</button>
</form>
            </div>
        </div>
</div>
@endsection