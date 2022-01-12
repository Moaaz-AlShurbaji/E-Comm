@extends('master')
@section('content')
<div class="container">
    <h1 class="text-center">Order Details</h1>
    <br>
    <table class="table table-dark">
    
    <tbody>
        <tr>
        
        <td>Amount</td>
        <td>${{ $total }}</td>
        </tr>
        <tr>
        
        <td>Tax</td>
        <td>$0</td>
        </tr>
        <tr>
        
        <td>Delivery</td>
        <td>$10</td>
        </tr>
        <tr>
        
        <td>Total</td>
        <td>${{ $total + 10 }}</td>
        </tr>
    </tbody>
    </table>
    <form action="/orderplace" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">address</label>
            <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Address">
            @error('address')
                <small class="text-danger">{{ $message }}</small>
            @enderror
                
            
            
        </div>
        <hr>
        <div class="form-group">
            <label class="h4" for="exampleInputPassword1">Payment Method</label>
            <br>
            <input type="radio" value="cash" name="payment"> <span>Online Payment</span>
            <br>
            <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span>
        </div>
        @error('payment')
                <small class="text-danger">{{ $message }}</small>
        @enderror
        
        <button type="submit" class="btn btn-success">Order Now</button>
        
    </form>
    <br>
</div>
@endsection