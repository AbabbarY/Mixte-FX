@extends('master.layout_dash')

@section('title')
Orders 
@endsection


@section('content')
<div class="bg-white" >
<div class=" p-5">
    <div class="card-header">
      
      <h3 class="card-title my-4">Orders</h3>

    <!-- /.card-header -->
    <div class=" p-0">
      <div class="table-responsive">
        <table class="table m-0">
          <thead>
            <tr>
              <th>Order ID</th>
              <th>User ID</th>
              <th>Item</th>
              <th>Price</th>
              <th>Quantité</th>
              <th>Size</th>
              <th>Total</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
          @foreach($orders as $order)
          <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->user_id}}</td>
            <td>{{$order->product_name}}</td>
            <td>{{$order->prix}}</td>
            <td>{{$order->quantite}}</td>
            <td>{{$order->size}}</td>
            <td>{{$order->total}}</td>
            {{-- CHECK ORDERS IF PAID OR DELEVERY --}}
            @if($order->paid === 1 && $order->delivred === 1)
            <td><span class="badge bg-success mx-2">Paid</span></td>
            <td><span class="badge bg-success mx-2">Delivred</span></td>
            @elseif($order->paid === 1 && $order->delivred === 0)
            <td><span class="badge bg-success mx-2">Paid</span></td>
            <td><span class="badge bg-danger mx-2">Delivred</span></td>
            @elseif($order->paid === 0 && $order->delivred === 1)
            <td><span class="badge bg-danger mx-2">Paid</span></td>
            <td><span class="badge bg-success mx-2">Delivred</span></td>
            @elseif($order->paid === 0 && $order->delivred === 0)
            <td><span class="badge bg-danger mx-2">Paid</span></td>
            <td><span class="badge bg-danger mx-2">Delivred</span></td>
            @endif
            {{-- END CHECK --}}
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.table-responsive -->
    </div>
    <!-- /.card-body -->
    
    <!-- /.card-footer -->
  </div>
</div>
</div>
@endsection