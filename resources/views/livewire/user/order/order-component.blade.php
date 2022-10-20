<div>
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">My Order</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/shope">Shop</a></li>
                                    <li class="active" aria-current="page">My Orders</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Account Dashboard Section:::... -->
    <div class="account-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                           
                            <li> <a href="#orders" data-bs-toggle="tab"
                                    class="nav-link btn btn-block btn-md btn-black-default-hover">Orders</a></li>
                           
                           
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                     
                        <div class="tab-pane fade" id="orders">
                            <h4>Orders</h4>
                            <div class="table_page table-responsive">
                                <table>
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
                                                <th><a href="{{route('user.orderdetails',['order_id'=>$order->id])}}" class="view">view</a></th>
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
    </div> <!-- ...:::: End Account Dashboard Section:::... -->

</div>
