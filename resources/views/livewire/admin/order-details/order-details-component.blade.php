<div class="content-wrapper">

    
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-vector-polyline"></i>
      </span> Order Details
    </h3>
    <nav aria-label="breadcrumb">
    </nav>
  </div>

  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
         
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th>Order Id</th>
                <td>{{$order->id}}</td>

                <th>Order Date</th>
                <td>{{$order->created_at}}</td>
 
                <th>Status</th>
                <td>{{$order->status}}</td>
                @if ($order->status =="delivered")
                <th>Delevred Date</th>
                <td>{{$order->delivered_date}}</td>
                @elseif($order->status =="canceled")  
                <th>Cancellation Date</th>
                <td>{{$order->canceled_date}}</td>  
                @endif
              </tr>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
    



    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-cart"></i>
        </span> Orders Item
      </h3>
      <nav aria-label="breadcrumb">
      </nav>
    </div>

    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Product name</h4>
            <div class="table-responsive">
              <table class="table">
                <tbody>
                    @foreach ($order->orderItems as $item)
                    <!-- Start Cart Single Item-->
                    <tr>
                        <td class="product_thumb"><a href="{{route('product.details',['slug'=>$item->product->slug])}}"><img src="{{asset('assets/images/product/default/home-1')}}/{{$item->product->image}}" alt=""></a></td>
                        <td class="product_name"><a href="{{route('product.details',['slug'=>$item->product->slug])}}">{{$item->product->name}}</a></td>
                        <td class="product-price">$ {{$item->price}}</td>
                        <td class="product_quantity">{{$item->quantity}}</td>
                        <td class="product_total">$ {{$item->price * $item->quantity }}</td>
                    </tr> <!-- End Cart Single Item-->
                    @endforeach
                   
                </tbody>
                <tfoot>
                    <tr>
                        <th>Cart Subtotal</th>
                        <td> <strong>$ {{$order->subtotal}}</strong></td>
                    </tr>
                    <tr>
                        <th>Tax</th>
                        <td><strong>$ {{$order->tax}}</strong></td>
                    </tr>
                    <tr>
                        <th>Shipping</th>
                        <td><strong>Free Shipping</strong></td>
                    </tr>
                    <tr class="order_total">
                        <th>Total</th>
                        <td><strong>${{$order->total}}</strong></td>
                    </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-map-marker-radius"></i>
          </span> Belling Details
        </h3>
        <nav aria-label="breadcrumb">
        </nav>
      </div>
  
      <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
            
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th>First Name</th>
                    <td>{{$order->firstname}}</td>
                    <th>Last Name</th>
                    <td>{{$order->lastname}}</td>
                  </tr>

                  <tr>
                    <th>Phone</th>
                    <td>{{$order->mobile}}</td>
                    <th>Email</th>
                    <td>{{$order->email}}</td>
                  </tr>

                  <tr>
                    <th>Line1</th>
                    <td>{{$order->line1}}</td>
                    <th>Line2</th>
                    <td>{{$order->line2}}</td>
                  </tr>

                  <tr>
                    <th>City</th>
                    <td>{{$order->city}}</td>
                    <th>Province</th>
                    <td>{{$order->province}}</td>
                  </tr>

                  <tr>
                    <th>Country</th>
                    <td>{{$order->country}}</td>
                    <th>Zipcode</th>
                    <td>{{$order->zipcode}}</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


      @if($order->is_shipping_different)
          
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-map-marker-radius"></i>
          </span> Shipping Different
        </h3>
        <nav aria-label="breadcrumb">
        </nav>
      </div>
  
      <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
             
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th>First Name</th>
                    <td>{{$order->shipping->firstname}}</td>
                    <th>Last Name</th>
                    <td>{{$order->shipping->lastname}}</td>
                  </tr>

                  <tr>
                    <th>Phone</th>
                    <td>{{$order->shipping->mobile}}</td>
                    <th>Email</th>
                    <td>{{$order->shipping->email}}</td>
                  </tr>

                  <tr>
                    <th>Line1</th>
                    <td>{{$order->shipping->line1}}</td>
                    <th>Line2</th>
                    <td>{{$order->shipping->line2}}</td>
                  </tr>

                  <tr>
                    <th>City</th>
                    <td>{{$order->shipping->city}}</td>
                    <th>Province</th>
                    <td>{{$order->shipping->province}}</td>
                  </tr>

                  <tr>
                    <th>Country</th>
                    <td>{{$order->shipping->country}}</td>
                    <th>Zipcode</th>
                    <td>{{$order->shipping->zipcode}}</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
         
      @endif



      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-vector-polyline"></i>
          </span> Transaction
        </h3>
        <nav aria-label="breadcrumb">
        </nav>
      </div>
  
      <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">
             
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th>Transaction Mode</th>
                    <td>{{$order->transaction->mode}}</td>
                  </tr>

                  <tr>
                    <th>Status</th>
                    <td>{{$order->transaction->status}}</td>
                  </tr>

                  <tr>
                    <th>Transaction Date</th>
                    <td>{{$order->transaction->created_at}}</td>
                  </tr>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
   
  </div>