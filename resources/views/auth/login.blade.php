<x-base-layout>
      <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Login</h3>
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
                        <h3>login</h3>
                        <x-jet-validation-errors class="mb-4" />
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="default-form-box">
                                <label> email <span>*</span></label>
                                <input type="email" name="email" placeholder="email" :value="old('email')" required autofocus >
                            </div>
                            <div class="default-form-box">
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="password" placeholder="*************" required autocomplete="current-password">
                            </div>
                            <div class="login_submit">
                                <button class="btn btn-md btn-black-default-hover mb-4" type="submit">login</button>
                                <label class="checkbox-default mb-4" for="offer">
                                    <input type="checkbox" id="offer" name="remember">
                                    <span>Remember me</span>
                                </label>
                                <a href="{{route('password.request')}}">Lost your password?</a>

                            </div>
                        </form>
                    </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register" data-aos="fade-up" data-aos-delay="200">
                        <h3>Register</h3>
                        <x-jet-validation-errors class="mb-4" />
                        <form  action="{{route('register')}}" name="frm-login" method="POST">
                            @csrf
                            <div class="default-form-box">
                                <label>Name <span>*</span></label>
                                <input type="text"  name="name" placeholder="Your name" :value="old('name')" required autofocus autocomplete="name">
                            </div>

                            <div class="default-form-box">
                                <label>Email address <span>*</span></label>
                                <input type="text" name="email" placeholder="Email address" :value="old('email')">
                            </div>
                            <div class="default-form-box">
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="password" placeholder="Password" required autocomplete="new-password">
                            </div>

                            <div class="default-form-box">
                                <label>Confirm Passwords <span>*</span></label>
                                <input type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="ew-password">
                            </div>
                            <div class="login_submit">
                                <button class="btn btn-md btn-black-default-hover" type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div> <!-- ...:::: End Customer Login Section :::... -->
</x-base-layout>
