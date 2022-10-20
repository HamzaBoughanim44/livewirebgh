
    <li>
        <a href="#offcanvas-wishlish" class="offcanvas-toggle">
            <i class="icon-heart"></i>
            @if (Cart::instance('wishlist')->count()>0)
            <span class="item-count">{{Cart::instance('wishlist')->count()}}</span>
            @else
            
            <span class="item-count">0</span>
            @endif
        </a>
    </li>

