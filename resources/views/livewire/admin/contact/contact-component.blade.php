
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
              <th> # </th>
              <th> name </th>
              <th> email </th>
              <th> Phone </th>
              <th> Message </th>
              <th> Action </th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($contacts as $contact)
            <tr>
              <td class="py-1">{{$contact->id}}</td>
              <td class="py-1">{{$contact->name}}</td>
              <td class="py-1">{{$contact->email}}</td>
              <td class="py-1">{{$contact->phone}}</td>
              <td class="py-1">{{$contact->comment}}</td>
              <td> 
                <button type="button" class="btn btn-gradient-danger btn-sm">Delet</button>
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

