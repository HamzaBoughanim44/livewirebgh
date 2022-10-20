
<x-base-layout>
    <!-- ...:::: Start Breadcrumb Section:::... -->
  <div class="breadcrumb-section breadcrumb-bg-color--golden">
      <div class="breadcrumb-wrapper">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <h3 class="breadcrumb-title">Reset Password</h3>
                      <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                          <nav aria-label="breadcrumb">
                              <ul>
                                  <li><a href="/">Home</a></li>
                                  <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                  <li class="active" aria-current="page">Login</li>
                              </ul>
                          </nav>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div> <!-- ...:::: End Breadcrumb Section:::... -->

  <!-- ...:::: Start Customer Login Section :::... -->
  <div class="customer-login">
      <div class="container">
          <div class="row">
              <!--login area start-->
              <div class="col-lg-6 col-md-6">
                  <div class="account_form" data-aos="fade-up" data-aos-delay="0">
                      <h3>Reset Password</h3>
                      @if (session('status'))
                      <div class="mb-4 font-medium text-sm text-green-600">
                          {{ session('status') }}
                      </div>
                     @endif
                      <x-jet-validation-errors class="mb-4" />
                      <form action="{{route('password.update')}}" method="POST">
                          @csrf
                          <input type="hidden" name="token" value="{{ $request->route('token') }}">

                          <div class="default-form-box">
                              <label> email <span>*</span></label>
                              <input type="email" name="email" placeholder="email" value="{{$request->email}}" required autofocus >
                          </div>

                          <div class="default-form-box">
                            <label>Passwords <span>*</span></label>
                            <input type="password" id="password" name="password" placeholder="Password" required autocomplete="new-password">
                        </div>

                        <div class="default-form-box">
                            <label>Confirm Passwords <span>*</span></label>
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required autocomplete="ew-password">
                        </div>
                         
                          <div class="login_submit">
                              <input class="btn btn-md btn-black-default-hover mb-4" value="Reset Password"  type="submit" />
                              
                              

                          </div>
                      </form>
                  </div>
              </div>
              <!--login area start-->

              
          </div>
      </div>
  </div> 
</x-base-layout>
