@extends('master')
@section('content')
<div class="container">
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
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">address</label>
            <input type="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your Address">
            
        </div>
        <hr>
        <div class="form-group">
            <label class="h4" for="exampleInputPassword1">Payment Method</label>
            <br>
            <input type="radio" name="payment"> <span>Online Payment</span>
            <br>
            <input type="radio" name="payment"> <span>Payment on Delivery</span>
        </div>
        
        <button type="submit" class="btn btn-primary">Order Now</button>
        
    </form>
    <br>
</div>
@endsection