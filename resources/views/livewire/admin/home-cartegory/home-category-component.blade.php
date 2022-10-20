<x-slot name="titel">HomeCategories</x-slot>

<div>
<div class="content-wrapper" >
    <!-- Content Header (Page header) -->
 
    
      @if (Session::has('message'))
      <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
     @endif
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
        <form wire:submit.prevent="updateHomeCategory">
          <div class="card-body">
           <div class="row">            
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Choose Categories</label>
                  <div class="select2-purple">
                    <select class="select2 select2-hidden-accessible" multiple=""  data-dropdown-css-class="select2-purple" style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true" wire:model="selected_categories">
                     @foreach ($categories as $category)
                     <option value="{{$category->id}}">{{$category->name}}</option>
                     @endforeach
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">        
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>No Of Products</label>
                   <div class="select2-purple">
                    <input type="text" class="form-control" wire:model="numberofproducts" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">            
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <div class="col-md-6">            
                    <button type="submit" class="btn btn-primary">Submit</button>         
                </div>
                </div>
              </div>
            </div>

          </div>
        </form> 
        </div>
      </div>
  
  </div>
</div>

@push('scripts')
     <script>
      $(document).ready(function(){
           $('.select2').select2();
           $('.select2').on('change',function(e){
              
              var data = $('.select2').select2();
              @this.set('selected_categories',data);
             });
      });
     </script>
@endpush


  