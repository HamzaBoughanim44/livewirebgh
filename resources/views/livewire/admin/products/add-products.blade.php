<x-slot name="titel"> Add Products</x-slot>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Products</h4>
      
        @if (Session::has('message'))
        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
       @endif
        <form class="forms-sample" wire:submit.prevent="addProduct">

          <div class="form-group">
            <label for="exampleInputName1"> Product Name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" wire:model='name' wire:keyup="generateSlug" />
          </div>

          <div class="form-group">
            <label for="exampleInputEmail3">Product Slug</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Slug" wire:model='slug' />
            @error('slug')
            <p class="text-danger">{{$message}}</p>
          @enderror
          </div>
         
          <div class="form-group">
            <label for="exampleSelectGender">Category</label>
            <select class="form-control" id="exampleSelectGender" wire:model='category_id' wire:change="changeSubcategory">
                <option value="">Select Category</option>
                    @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                                    
            </select>
            @error('category_id')
            <p class="text-danger">{{$message}}</p>
           @enderror
          </div>

          <div class="form-group">
            <label for="exampleSelectGender">Sub Category</label>
            <select class="form-control" id="exampleSelectGender" wire:model='scategory_id'>
                <option value="0">Select Category</option>
                    @foreach ($scategories as $scategory)
                <option value="{{$scategory->id}}">{{$scategory->name}}</option>
                    @endforeach                       
            </select>
            @error('scategory_id')
            <p class="text-danger">{{$message}}</p>
           @enderror
          </div>

          <div class="form-group">
            <label for="exampleSelectGender">Product Attributes</label>
            <div class="col-md-4">
              <div class="input-group col-xs-12">
                <select class="form-control" id="exampleSelectGender" wire:model='attr'>
                  <option value="0">Select Attributes</option>
                      @foreach ($pattributes as $pattribute)
                  <option value="{{$pattribute->id}}">{{$pattribute->name}}</option>
                      @endforeach                       
              </select>  
              <span class="input-group-append">
                <button type="button" class="btn btn-gradient-info btn-sm" wire:click.prevent="add">Add</button>
              </span>
              </div>
            </div>
          </div>

          @foreach ($inputs as $key => $value)

          <div class="form-group">
            <label for="exampleInputEmail3">{{$pattributes->where('id',$attribute_arr[$key])->first()->name}}</label>

            <div class="col-md-4">
              <div class="input-group col-xs-12">
            <input type="text" placeholder="{{$pattributes->where('id',$attribute_arr[$key])->first()->name}}" class="form-control" id="exampleInputEmail3" wire:model="attribute_values.{{$value}}"  />
            <span class="input-group-append">
              <button type="button" class="btn btn-gradient-danger btn-sm" wire:click.prevent="remove({{$key}})"><i class="mdi mdi-close-circle"></i></button>
            </span>
          </div>
           </div>
          </div>


          @endforeach

          <div class="form-group">
            <label for="exampleInputEmail3">Short Description</label>
            <textarea type="text" class="form-control" id="exampleInputEmail3" placeholder="Short Description" wire:model='short_description'/> </textarea>
            @error('short_description')
            <p class="text-danger">{{$message}}</p>
           @enderror
           </div>

           <div class="form-group">
            <label for="exampleInputEmail3">Description</label>
           <textarea type="text" class="form-control" id="exampleInputEmail3" placeholder="Description" wire:model='description'></textarea>
           @error('description')
           <p class="text-danger">{{$message}}</p>
           @enderror
           </div>

           <div class="form-group">
            <label for="exampleInputEmail3">Regular Price</label>
            <input type="text" class="form-control" id="exampleInputEmail3" wire:model='regular_price' />
            @error('Regular Price')
            <p class="text-danger">{{$message}}</p>
          @enderror
          </div>

          <div class="form-group">
            <label for="exampleInputEmail3">Sale Price</label>
            <input type="text" class="form-control" id="exampleInputEmail3" wire:model='sale_price'  />
           
          </div>

          <div class="form-group">
            <label for="exampleInputEmail3">SKU</label>
            <input type="text" class="form-control" id="exampleInputEmail3" wire:model='SKU'  />
           
          </div>

          <div class="form-group">
            <label for="exampleSelectGender">Stocke</label>
            <select class="form-control" id="exampleSelectGender" wire:model='stock_status'>
                <option value="instock">Instock</option>
                <option value="outofstock">OutOfInstock</option>    
            </select>
            @error('stock_status')
            <p class="text-danger">{{$message}}</p>
           @enderror
          </div>
         
          <div class="form-group">
            <label for="exampleSelectGender">Featured</label>
            <select class="form-control" id="exampleSelectGender" wire:model='stock_status'>
                <option value="0">NO</option>
                <option value="1">YES</option> 
            </select>
           
          </div>

          <div class="form-group">
            <label for="exampleInputEmail3">Quantity</label>
            <input type="text" class="form-control" id="exampleInputEmail3"  wire:model='quantity' />
            @error('quantity')
             <p class="text-danger">{{$message}}</p>
            @enderror
          </div>
         
          <div class="form-group">
            <label class="col-md-4 control-label">Product Image</label>
            <div class="col-md-4">
             <input type="file"  class="input-file" wire:model='image' />
             @if ($image)
                 <img src="{{$image->temporaryUrl()}}" width="120"/>
             @endif
             @error('image')
             <p class="text-danger">{{$message}}</p>
             @enderror
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Product Gallery</label>
            <div class="col-md-4">
             <input type="file"  class="input-file" wire:model='images' multiple />
             @if ($images)
                @foreach ($images as $image)
                <img src="{{$image->temporaryUrl()}}" width="120"/>
                @endforeach
             @endif
             @error('images')
             <p class="text-danger">{{$message}}</p>
             @enderror
            </div>
          </div>



          
        
          <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
