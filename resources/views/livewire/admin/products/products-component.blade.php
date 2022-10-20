<x-slot name="titel">Products</x-slot>


  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Products Table</h4>
          <div class="table-responsive">
            @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
           @endif
           <table class="table table-striped">
            <thead>
              <tr>
                <th>Image</th>
                <th>name</th>
                <th>price</th>
                <th>Sele Price</th>
                <th>Category</th>
                <th>Stock</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
              <tr>
                <td ><img src="{{asset('assets/images/product/default/home-1')}}/{{$product->image}}" height="120" width="120"></td>
                <td>{{$product->name}}</td>
                <td>{{$product->regular_price}}</td>
                <td>{{$product->sale_price}}</td>
                <td>{{$product->category->name}}</td>
                <td><span class="badge badge-success">{{$product->stock_status}}</span></td>
                <td> 
                  <a href="{{route('admin.editproduct',['product_slug'=>$product->slug])}}"><button type="button" class="btn btn-gradient-primary btn-sm">Edite</button></a>
                  <button type="button" class="btn btn-gradient-danger btn-sm"  onclick="confirm('Are you sure , You want to delet this Product ?') || event.stopImmediatePropagation()" class="btn btn-sm btn-primary" wire:click.prevent="deleteProduct({{$product->id}})" >Delet</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>


