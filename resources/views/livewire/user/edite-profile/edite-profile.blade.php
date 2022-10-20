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
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list">
                               
                                <li> <a href="#orders" data-bs-toggle="tab"
                                        class="nav-link btn btn-block btn-md btn-black-default-hover">Update Profile</a></li>
                               
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                         
                            <div  id="orders">
                                <div class="container">
                                    <div class="row">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h5 class="billing-address">Update Profile</h5>
                                            </div>
                                            <div class="panel-body">
                                                @if (Session::has('message'))
                                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                               @endif
                                                <form wire:submit.prevent="updateProfile">
                                                    <div class="col-md-4">
                                                    @if ($newimage)
                                                        <img src="{{$newimage->temporaryUrl()}}" width="100%" alt="">
                                                    @elseif($image)
                                                    <img src="{{asset('assets/images/product/default/home-1')}}/{{$image}}" width="100%" alt="">  
      
                                                    @else  
                                                    <img src="{{asset('assets/images/product/default/home-1/bgh')}}" width="50%" alt="">  
                                                    @endif
                                                    <input type="file" class="from-control" wire:model="newimage" />
                                                    </div>
                                                    <div class="col-md-8">
                                                        <p><b>Name: </b><input type="text" class="from-control" wire:model="name"></p>
                                                        <p><b>Email: </b>{{$email}}</p>
                                                        <p><b>Phone: </b><input type="text" class="from-control" wire:model="mobile"></p>
                                                        <hr>
                                                        <p><b>Line1: </b><input type="text" class="from-control" wire:model="line1"></p>
                                                        <p><b>Line2: </b><input type="text" class="from-control" wire:model="line2"></p>
                                                        <p><b>City: </b><input type="text" class="from-control" wire:model="city"></p>
                                                        <p><b>Province: </b><input type="text" class="from-control" wire:model="province"></p>
                                                        <p><b>Country: </b><input type="text" class="from-control" wire:model="country"></p>
                                                        <p><b>Zip Code: </b><input type="text" class="from-control" wire:model="zipcode"></p>
                                                        <button class="btn btn-md btn-black-default-hover mb-4 pull-right" type="submit">Update</button>
                                                    </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ...:::: End Account Dashboard Section:::... -->
    
    
    
</div>
