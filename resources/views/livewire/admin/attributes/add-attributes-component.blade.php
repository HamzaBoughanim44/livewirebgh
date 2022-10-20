<x-slot name="titel"> Add Attributs</x-slot>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Attributs</h4>
        <p class="card-description"> Add Attributs </p>
        @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{Session::get('message')}}
        </div>
        @endif
        <form class="forms-sample" wire:submit.prevent="storeAttribute">
          <div class="form-group">
            <label for="exampleInputName1">Attributs Name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" wire:model="name"  />
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>