<x-slot name="titel">Add Slider</x-slot>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Slider</h4>
        <p class="card-description"> Edit Categories </p>
        @if(Session::has('message'))
        <div class="alert alert-success" role="alert">{{Session::get('message')}}
        </div>
        @endif
        <form class="forms-sample" wire:submit.prevent="updateSlider" >
          <div class="form-group">
            <label for="exampleInputName1">Titel</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" wire:model='titel' />
            @error('titel')
            <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputName1">SubTitel</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"  wire:model='subtitel'  />
            @error('subtitel')
            <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Slider Price</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"  wire:model='price' />
            @error('price')
            <p class="text-danger">{{$message}}</p>
            @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputEmail3">Slider Link</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Slider Link" wire:model='link' >
           
          </div>

          <div class="form-group">
            <label for="exampleSelectGender">Status</label>
            <select class="form-control" id="exampleSelectGender" wire:model='status'>
                <option value="0">InActive</option>
                <option value="1">Active</option>                 
            </select>
          </div>


          <div class="form-group">
            <label class="col-md-4 control-label">Slider Image</label>
            <div class="col-md-4">
             <input type="file"  class="input-file" wire:model='newimage' />
             @if ($newimage)
                 <img src="{{$newimage->temporaryUrl()}}" width="120"/>
             @else 
             <img src="{{asset('assets/images/product/default/home-1')}}/{{$image}}" height="100" width="100">

             @endif
            </div>
          </div>


         
          <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>