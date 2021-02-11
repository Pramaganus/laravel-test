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
              <div class="float-right">
                  Sort:
                  <a href="{{ request()->fullUrlWithQuery(['direction' => 'Asc']) }}"
                     class="@if(request('direction') == 'Asc' || !request()->exists('direction')) font-weight-bold @endif" >Asc</a>
                  <a href="{{ request()->fullUrlWithQuery(['direction' => 'Desc']) }}"
                     class="@if(request('direction') == 'Desc') font-weight-bold @endif" >Desc</a>
              </div>
            <table class="table">
              <thead>
              <tr>
                <th><a href="{{ request()->fullUrlWithQuery(['sort' => 'id']) }} ">#</a></th>
                <th>Contact Ref</th>
                <th><a href="{{ request()->fullUrlWithQuery(['sort' => 'product']) }}">Product Name</a></th>
                <th><a href="{{ request()->fullUrlWithQuery(['sort' => 'price']) }}">Price</a></th>
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
