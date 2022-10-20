<x-slot name="titel">Slider</x-slot>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h1 class="card-title">Slider Table</h1>
       
        </p>
        @if (Session::has('message'))
        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
       @endif
        <table class="table table-striped">
          <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">titel</th>
                <th scope="col">subtitel</th>
                <th scope="col">Price</th>
                <th scope="col">link</th>
                <th scope="col">Image</th>
                <th scope="col">status</th>
                <th scope="col">Action</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($sliders as $slider)
            <tr>
                <td>{{$slider->id}}</td>
                <td>{{$slider->titel}}</td>
                <td>{{$slider->subtitle}}</td>
                <td>${{$slider->price}}</td>
                <td> <a href="{{$slider->link}}">this link</a> </td>
                <td><img src="{{asset('assets/images/product/default/home-1')}}/{{$slider->image}}" height="100" width="100"></td>
                <td>{{$slider->status ==1 ?'Active': 'Inactive'}}</td>
                <td> 
                  <button type="button" class="btn btn-gradient-primary btn-sm"><a href="{{route('admin.edithomeslider',['slider_id'=>$slider->id])}}">Edite</a></button>
                  <button type="button" class="btn btn-gradient-danger btn-sm" onclick="confirm('Are you sure , You want to delet this Slider?') || event.stopImmediatePropagation()" wire:click.prevent="deleteSlider({{$slider->id}})">Delet</button>
                </td>
            </tr>
            @endforeach
             
           
             
            
          </tbody>
        </table>
       
      </div>
    
    </div>
  </div>

