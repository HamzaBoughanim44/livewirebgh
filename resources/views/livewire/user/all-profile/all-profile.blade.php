<div>
    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">My Account</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                    <li class="active" aria-current="page">My Account</li>
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
            @if(Session::has('profile_success'))
            <div class="alert alert-success" role="alert">{{Session::get('profile_success')}}
            </div>
            @endif
            @if(Session::has('profile_error'))
            <div class="alert alert-danger" role="alert">{{Session::get('profile_error')}}
            </div>
            @endif
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button" >
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#dashboard" data-bs-toggle="tab"
                                    class="nav-link btn btn-block btn-md btn-black-default-hover active">Change Password</a>
                            </li>
                            <li> <a href="#orders" data-bs-toggle="tab"
                                    class="nav-link btn btn-block btn-md btn-black-default-hover">Orders</a></li>
                           
                            <li><a href="#address" data-bs-toggle="tab"
                                    class="nav-link btn btn-block btn-md btn-black-default-hover">Profile</a></li>
                            
                            </li>
                          <li>
                             <a  class="nav-link btn btn-block btn-md btn-black-default-hover" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                                        logout </a>
                             <form id="logout-form" action="{{route('logout')}}" method="POST">
                              @csrf
                              </form>
                           </li>        
                            
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" >
                        <div class="tab-pane fade show active" id="dashboard">
                            <h4>Change Password </h4>
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <form action="#" wire:submit.prevent="changePassword">
                                     
                                            <div class="default-form-box mb-20">
                                                <label>Current Password</label>
                                                <input type="password" placeholder="Current Password" name="current-password" wire:model="current_password" />
                                                @error('current_password')
                                                <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label> New Password</label>
                                                <input type="password" placeholder="new password" name="new-password" wire:model="password" />
                                                @error('password')
                                                <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Confirm Password</label>
                                                <input type="password" placeholder="Confirm password" name="confirm-password" wire:model="password_confirmation" />
                                                @error('password_confirmation')
                                                <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                            
                                            <div class="save_button mt-3">
                                                <button class="btn btn-md btn-black-default-hover"
                                                    type="submit">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders">

                            <div class="table_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Total Cost</th>
                                            <th>Total Purchase</th>
                                            <th>Today Delivered</th>
                                            <th>Total Canceled</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$totalCost}}</td>
                                            <td>{{$totalPurchase}}</td>
                                            <td><span class="success">{{$totalDeliverd}}</span></td>
                                            <td>{{$totalCanceled}} </td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        
                        <div class="tab-pane" id="address">
                            <div class="container">
                                <div class="row">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="billing-address">Profile</h5>
                                        </div>
                                        <div class="panel-body">
                                            <div class="col-md-4">
                                               @if ($user->profile->image)
                                                 <img src="{{asset('assets/images/product/default/home-1')}}/{{$user->profile->image}}" width="100%" alt="">  
                                               @else  
                                               <img src="{{asset('assets/images/product/default/home-1/bgh.jpg')}}" width="100%" alt="">  
                                               @endif
                                            </div>
                                            <div class="col-md-8">
                                                <p><b>Name: </b>{{$user->name}}</p>
                                                <p><b>Email: </b>{{$user->email}}</p>
                                                <p><b>Phone: </b>{{$user->profile->mobile}}</p>
                                                <hr>
                                                <p><b>Line1: </b>{{$user->profile->line1}}</p>
                                                <p><b>Line2: </b>{{$user->profile->line2}}</p>
                                                <p><b>City: </b>{{$user->profile->city}}</p>
                                                <p><b>Province: </b>{{$user->profile->province}}</p>
                                                <p><b>Country: </b>{{$user->profile->country}}</p>
                                                <p><b>Zip Code: </b>{{$user->profile->zipcode}}</p>
                                                <a href="{{route('user.editprofile')}}" ><button class="btn btn-md btn-black-default-hover mb-4 pull-right" type="submit">Update</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            
                           
                        </div>
                        <div class="tab-pane fade" id="account-details">
                            <h4>Change Password </h4>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Account Dashboard Section:::... -->

</div>
