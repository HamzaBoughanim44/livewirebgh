<div>
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">My Orders Details</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/user/order">Order</a></li>
                                    <li class="active" aria-current="page">My Orders Details </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->
      @if(Session::has('order_message'))
      <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
      @endif
    <!-- ...:::: Start Account Dashboard Section:::... -->
    <div class="account-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                           
                            <li><a href="#dashboard" data-bs-toggle="tab"
                                    class="nav-link btn btn-block btn-md btn-black-default-hover active">Orders Item</a>
                            </li>
                            <li> <a href="#orders" data-bs-toggle="tab"
                                    class="nav-link btn btn-block btn-md btn-black-default-hover">Belling Details</a></li>
                         @if($order->is_shipping_different)        
                            <li><a href="#downloads" data-bs-toggle="tab"
                                    class="nav-link btn btn-block btn-md btn-black-default-hover">Shipping Different</a></li>
                           @endif         
                            <li><a href="#address" data-bs-toggle="tab"
                                    class="nav-link btn btn-block btn-md btn-black-default-hover">Transaction</a></li>
                            
                            <li><a href="#account-details" data-bs-toggle="tab"
                                    class="nav-link btn btn-block btn-md btn-black-default-hover">Order</a></li>   
                            
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                        <div class="tab-pane fade show active" id="dashboard">
                            <h4>Orders Item </h4>
                            <div class="table_page table-responsive">
                                <table>
                                  
                                    <tbody>
                                        @foreach ($order->orderItems as $item)
                                        <!-- Start Cart Single Item-->
                                        <tr>
                                            <td ><a href="{{route('product.details',['slug'=>$item->product->slug])}}"><img src="{{asset('assets/images/product/default/home-1')}}/{{$item->product->image}}" alt=""></a></td>
                                            <td ><a href="{{route('product.details',['slug'=>$item->product->slug])}}">{{$item->product->name}}</a></td>
                                            <td >$ {{$item->price}}</td>
                                            <td >{{$item->quantity}}</td>
                                            <td >$ {{$item->price * $item->quantity }}</td>
                                            @if ($order->status =='delivered' && $item->rstatus == false)
                                            <td ><a href="{{route('user.review',['order_item_id'=>$item->id])}}" class="view">Write Review</a></td>
                                            @endif
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
                        <div class="tab-pane fade" id="orders">
                            <h4>Belling Details</h4>
                            <div class="table_page table-responsive">
                                <table>
                                    <tr>
                                        <th> First Name</th>
                                        <td> {{$order->firstname}}</td>
                                        <th> Last Name</th>
                                        <td> {{$order->lastname}}</td>
                                      </tr>
                    
                                      <tr>
                                        <th> Phone</th>
                                        <td> {{$order->mobile}}</td>
                                        <th> Email</th>
                                        <td> {{$order->email}}</td>
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
                        
                    @if($order->is_shipping_different)
                        <div class="tab-pane fade" id="downloads">
                            <h4>Shipping Different</h4>
                            <div class="table_page table-responsive">
                                <table>
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
                    @endif  

                        <div class="tab-pane" id="address">
                            
                            <h4>Transaction</h4>
                            <div class="table_page table-responsive">
                                <table>
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


                        <div class="tab-pane fade" id="account-details">
                            <h4>Orders Details </h4>
                           
                            <div class="table_desc">
                                <div class="table_page table-responsive">
                                
                                    <table>
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
                                <div class="cart_submit">
                                    @if ($order->status == 'ordered')
                                    <button class="btn btn-md btn-golden" type="submit" wire:click.prevent="cancelOrder">Cancel Order</button>
                                    @endif
                                   
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Account Dashboard Section:::... -->

</div>








