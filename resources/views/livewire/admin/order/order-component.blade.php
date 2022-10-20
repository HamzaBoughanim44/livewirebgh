<x-slot name="titel">Orders</x-slot>
<div>
<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        @if (Session::has('order_message'))
            <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
        @endif
        <h4 class="card-title">Order Table</h4>
        <div class="table-responsive">
         <table class="table table-striped">
          <thead>
            <tr>
              <th>OrderId</th>
              <th>SubTotal</th>
              <th>Discount</th>
              <th>Tax</th>
              <th>Total</th>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Mobil</th>
              <th>Email</th>
              <th>ZipCode</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $order)
            <tr>
                <th>{{$order->id}}</th>
                <th>{{$order->subtotal}}</th>
                <th>{{$order->discount}}</th>
                <th>{{$order->tax}}</th>
                <th>{{$order->total}}</th>
                <th>{{$order->firstname}}</th>
                <th>{{$order->lastname}}</th>
                <th>{{$order->mobile}}</th>
                <th>{{$order->email}}</th>
                <th>{{$order->zipcode}}</th>
                <th>{{$order->status}}</th>
                <th>
                  <a href="{{route('admin.orderdetails',['order_id'=>$order->id])}}"> <button  class="btn btn-gradient-primary btn-sm">Details</button></a>
                  <a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'delivered')"> <button  class="btn btn-gradient-danger btn-rounded btn-sm">Delivered</button></a>
                  <a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'canceled')"> <button  class="btn btn-gradient-secondary btn-rounded btn-sm">Canceled</button></a>
                 

                </th>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



