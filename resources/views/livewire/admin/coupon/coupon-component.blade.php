<x-slot name="titel">Coupons</x-slot>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Coupons Table</h4>
        <p class="card-description"> Add class <code>.table-striped</code>
        </p>
        @if (Session::has('message'))
        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
       @endif
        <table class="table table-striped">
          <thead>
            <tr>
              <th> Id </th>
              <th> Coupons Code </th>
              <th> Coupons Type </th>
              <th> Coupons Value </th>
              <th> Cart Value </th>
              <th> Expry Date </th>
              <th> Action </th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($coupons as $coupon)
            <tr>
              <td class="py-1">{{$coupon->id}}</td>
              <td class="py-1">{{$coupon->code}}</td>
              <td class="py-1">{{$coupon->type}}</td>
              @if($coupon->type== 'fexed')
                <td class="py-1">${{$coupon->value}}</td>
              @else 
              <td class="py-1">{{$coupon->value}}%</td>
              @endif
              <td class="py-1">{{$coupon->cart_value}}</td>
              <td class="py-1">{{$coupon->expiry_date}}</td>
              <td> 
                <button type="button" class="btn btn-gradient-primary btn-sm"><a href="{{route('admin.editcoupons',['coupon_id'=>$coupon->id])}}">Edite</a></button>
                <button type="button" class="btn btn-gradient-danger btn-sm" onclick="confirm('Are you sure , You want to delet this Coupons?') || event.stopImmediatePropagation()" wire:click.prevent="deletcoupons({{$coupon->id}})">Delet</button>
              </td>
             
            </tr>
            @endforeach
           
            
          </tbody>
        </table>
       
      </div>
    
    </div>
  </div>