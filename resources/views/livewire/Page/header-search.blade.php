<div>
    <div id="search" class="search-modal">
        <button type="button" class="close">×</button>
        <form action="{{route('product.search')}}">
            <input type="search" value="{{$search}} " placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-lg btn-pink">Search</button>
            <div>
                <input type="hidden" name="product_cat" value="{{$product_name}}" >
                <input type="hidden" name="product_cat_id" value="{{$product_name_id}}" >
                
            </div>
        </form>
    </div>
</div>