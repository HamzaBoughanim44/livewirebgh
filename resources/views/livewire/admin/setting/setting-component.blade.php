<div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            @if(Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}
            </div>
            @endif
            <h4 class="card-title">Setting</h4>
           
           
            <form class="forms-sample" wire:submit.prevent="saveSettings">
              
              <div class="form-group">
                <label for="exampleInputEmail3">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" wire:model="email">
                @error('email')
                 <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

              <div class="form-group">
                <label for="exampleInputEmail3">Phone</label>
                <input  type="text" class="form-control" id="exampleInputEmail3" placeholder="phone" wire:model="phone">
                @error('phone')
                 <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

              <div class="form-group">
                <label for="exampleInputEmail3">Phone 2</label>
                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="phone2" wire:model="phone2">
                @error('phone2')
                 <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

              <div class="form-group">
                <label for="exampleInputEmail3">address</label>
                <input  type="text" class="form-control" id="exampleInputEmail3" placeholder="address" wire:model="address">
                @error('address')
                 <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
              
              <div class="form-group">
                <label for="exampleInputEmail3">Map</label>
                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="map" wire:model="map">
                @error('map')
                 <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

              <div class="form-group">
                <label for="exampleInputEmail3">Twiter</label>
                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="twiter" wire:model="twiter">
                @error('twiter')
                 <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

              <div class="form-group">
                <label for="exampleInputEmail3">Facebook</label>
                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="facebook" wire:model="facebook">
                @error('facebook')
                 <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

              <div class="form-group">
                <label for="exampleInputEmail3">Pantrest</label>
                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Pantrest" wire:model="pinterest">
                @error('pinterest')
                 <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

              <div class="form-group">
                <label for="exampleInputEmail3">Instagram</label>
                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="twiter" wire:model="instagram">
                @error('instagram')
                 <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

              <div class="form-group">
                <label for="exampleInputEmail3">Youtube</label>
                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Youtube" wire:model="youtube">
                @error('youtube')
                 <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

              


              
              <button type="submit" class="btn btn-gradient-primary me-2">Save</button>
            </form>
          </div>
        </div>
      </div>
</div>
