<x-slot name="titel">Edit Coupons</x-slot>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Coupons</h4>
        <p class="card-description"> Edit Coupons </p>
        @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{Session::get('message')}}
        </div>
        @endif
        <form class="forms-sample" wire:submit.prevent="updateCoupont">
         
          <div class="form-group">
            <label for="exampleInputName1">Coupon Code</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Coupon Code" wire:model="code"  />
            @error('code')
            <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Coupon Type</label>
            <select class="form-control" id="exampleSelectGender" wire:model='type'>
                <option value="">Select Coupon</option>
                <option value="fexed">Fixed</option>
                <option value="percent">Percent</option>              
            </select>
            @error('type')
            <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail3">Coupon value</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Coupon value" wire:model="value" >
            @error('value')
            <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputEmail3">Cart Value</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Cart Value" wire:model="cart_value" >
            @error('cart_value')
            <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="form-group" wire:ignore>
            <label for="exampleInputEmail3">Expiry Date</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Expiry Date" wire:model="expiry_date" >
            @error('expiry_date')
            <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
         
         
          <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
