<x-slot name="titel"> Sale</x-slot>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Categories</h4>
        <p class="card-description"> Add Categories </p>
        @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{Session::get('message')}}
        </div>
        @endif
        <form class="forms-sample" wire:submit.prevent="updateSale">

          <div class="form-group">
            <label for="exampleInputEmail3">Statuse</label>
            <select class="form-control" id="exampleSelectGender" wire:model='status'>
              <option value="0">Inactive</option> 
              <option value="1">Active</option>               
          </select>
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Sale Date</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="YYYY/MM/DD H:M:S" wire:model="sale_date" />
           
          </div>

          <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
        </form>
      </div>
    </div>
  </div>