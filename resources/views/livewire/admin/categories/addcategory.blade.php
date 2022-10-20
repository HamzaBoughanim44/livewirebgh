<x-slot name="titel"> Add Categories</x-slot>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Categories</h4>
        <p class="card-description"> Add Categories </p>
        @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{Session::get('message')}}
        </div>
        @endif
        <form class="forms-sample" wire:submit.prevent="soreCategory">
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" wire:model="name" wire:keyuo="generateslug" />
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputEmail3">Slug</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="slug" wire:model="slug" >
            @error('slug')
            <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputEmail3">Parent Category</label>
            <select class="form-control" id="exampleSelectGender" wire:model='category_id'>
              <option value="">None</option>
                  @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                                  
          </select>
          </div>
         
          <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>