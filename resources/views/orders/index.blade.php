@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <div class="btn-group float-right" role="group">
              <a href="{{ route('orders.create') }}" class="btn btn-success">Add new order</a>
            </div>
            <h2>
              Orders
            </h2>
          </div>

          <div class="card-body">
            <table class="table">
              <thead>
              <tr>
                <th>#</th>
                <th>Contact Ref</th>
                <th>Product Name</th>
                <th>Price</th>
              </tr>
              </thead>
              <tbody>
              @foreach($orders as $order)
                <tr>
                  <td>{{ $order->id }}</td>
                  <td>{{ $order->contact->first_name }} {{ $order->contact->last_name }}</td>
                  <td>{{ $order->product }}</td>
                  <td>{{ $order->price }}</td>

              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection
