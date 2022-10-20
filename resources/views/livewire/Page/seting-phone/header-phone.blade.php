<div class="mobile-contact-info">
    <div class="logo">
        <a href="/"><img src="{{asset('assets/images/logo/logo_white.png')}}" alt=""></a>
    </div>

    <address class="address">
        <span>Address: {{$setting->address}}.</span>
        <span>Call Us: {{$setting->phone}}, {{$setting->phone2}}</span>
        <span>Email: {{$setting->email}}</span>
    </address>

    <ul class="social-link">
        <li><a href="{{$setting->facebook}}"><i class="fa fa-facebook"></i></a></li>
        <li><a href="{{$setting->twiter}}"><i class="fa fa-twitter"></i></a></li>
        <li><a href="{{$setting->instagram}}"><i class="fa fa-instagram"></i></a></li>
        <li><a href="{{$setting->pinterest}}"><i class="fa fa-pinterest"></i></a></li>
        <li><a href="{{$setting->youtube}}"><i class="fa fa-youtube"></i></a></li>
    </ul>

    <ul class="user-link">
        <li><a href="/wishlist">Wishlist</a></li>
        <li><a href="/cart">Cart</a></li>
        <li><a href="/checkout">Checkout</a></li>
    </ul>
</div>