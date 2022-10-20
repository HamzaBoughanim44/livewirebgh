<li>
    <a href="#offcanvas-add-cart" class="offcanvas-toggle">
        <i class="icon-bag"></i>
        @if (Cart::instance('cart')->count()>0)
        <span class="item-count">{{Cart::instance('cart')->count()}}</span>
        @else
        <span class="item-count">0</span>
        @endif
    </a>
</li>