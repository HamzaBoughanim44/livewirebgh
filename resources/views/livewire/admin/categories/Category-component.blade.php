
<x-slot name="titel">Categories</x-slot>
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Categories Table</h4>
          <div class="table-responsive">
            @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
           @endif
           <table class="table table-striped">
            <thead>
              <tr>
                <th> Id </th>
                <th> name </th>
                <th> Slug </th>
                <th>Sub Category</th>
                <th> Action </th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $category)
              <tr>
                <td class="py-1">{{$category->id}}</td>
                <td class="py-1">{{$category->name}}</td>
                <td> {{$category->slug}}</td>
                <td>
                   <ul class="sclist">
                    @foreach ($category->subCategories as $scategory)
                        <li><i class="fa fa-caret-right"></i>{{$scategory->name}} 
                          <a href="{{route('admin.editcategory',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug])}}"><i class="mdi mdi-border-color"></i></a>
                          <a href="#" onclick="confirm('Are you sure , You want to delet this SubCategory?') || event.stopImmediatePropagation()" wire:click.prevent="deleteSubcategory({{$scategory->id}})"><i class="mdi mdi-close-octagon text-danger"></i></a>
                        </li>
                        
                        
                    @endforeach
                   </ul>

                </td>
                <td> 
                  <button type="button" class="btn btn-gradient-primary btn-sm"><a href="{{route('admin.editcategory',['category_slug'=>$category->slug])}}">Edite</a></button>
                  <button type="button" class="btn btn-gradient-danger btn-sm" onclick="confirm('Are you sure , You want to delet this category?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$category->id}})">Delet</button>
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
