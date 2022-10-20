
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
              </span> Dashboard
            </h3>
            <nav aria-label="breadcrumb">
             
             
            </nav>
          </div>
          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="{{asset('assets/admin/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image">
                  <h4 class="font-weight-normal mb-3">Total Revenue <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">${{$totalRevenue}}</h2>
                 
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <img src="{{asset('assets/admin/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image">
                  <h4 class="font-weight-normal mb-3">Total Sales <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">{{$totalSales}}</h2>
        
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="{{asset('assets/admin/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image">
                  <h4 class="font-weight-normal mb-3">Today Revenue <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">{{$todayRevenue}}</h2>
                </div>
              </div>
            </div>

           

            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-dark card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{asset('assets/admin/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image">
                    <h4 class="font-weight-normal mb-3">Today Sales <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{$todaySales}}</h2>
                  </div>
                </div>
              </div>
          </div>
  
        </div>
        <!-- content-wrapper ends -->
       
      </div>


      <div class="row">
        <div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    @if (Session::has('order_message'))
                        <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                    @endif
                    <h4 class="card-title">Last Order</h4>
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
                              <a href="{{route('admin.orderdetails',['order_id'=>$order->id])}}"> <button  class="btn btn-gradient-primary btn-rounded btn-sm">Details</button></a>
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
            
      </div>