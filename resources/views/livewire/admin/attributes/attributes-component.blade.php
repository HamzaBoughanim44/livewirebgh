
<x-slot name="titel">Categories</x-slot>
<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Attributes Table</h4>
        <div class="table-responsive">
          @if (Session::has('message'))
          <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
         @endif
         <table class="table table-striped">
          <thead>
            <tr>
              <th> Id </th>
              <th> name </th>
              <th>Created At</th>
              <th> Action </th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($pattributes as $pattribute)
            <tr>
              <td class="py-1">{{$pattribute->id}}</td>
              <td class="py-1">{{$pattribute->name}}</td>
              <td> {{$pattribute->created_at}}</td>
             
              <td> 
                <button type="button" class="btn btn-gradient-primary btn-sm"><a href="{{route('admin.editattribut',['attribut_id'=>$pattribute->id])}}">Edite</a></button>
                <button type="button" class="btn btn-gradient-danger btn-sm" onclick="confirm('Are you sure , You want to delet this attribut?') || event.stopImmediatePropagation()" wire:click.prevent="deletAttribut({{$pattribute->id}})">Delet</button>
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
