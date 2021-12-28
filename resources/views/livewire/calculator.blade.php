<div>
    <form action="">
       
        <div class="form-group">
            <label for="website_type">Website Type</label>
            <select name="website_type" id="website_type" class="form-control" wire:model="website">
                <option>-- Choose website --</option>
                @foreach ($websites as $key=>$data )
                    <option value="{{$key}}">{{$data['name']}} </option>
                @endforeach
            </select> 
        </div>
        <div class="form-group">
            <label for="website_type">Organization Type</label>
            <select name="organization_type" id="organization_type" class="form-control" wire:model="organization" >
                <option>-- Choose organization --</option>
                @foreach ($organizations as $key=>$data )
                    <option value="{{$key}}">{{$data['name']}} </option>
                @endforeach
            </select> 
        </div>
        <div class="form-group">
            <label for="pages">Page {{$page}}</label>
            <input type="range" class="form-range"  wire:model="page" >
        </div>
        <div class="form-group">
            <label for="pages">Email {{$email}}</label>
            <input type="range" class="form-range"  wire:model="email" >
        </div>
        <div class="form-check form-switch">
            <label class="form-check-label" for="flexSwitchCheckDefault">Blog</label>
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" wire:model="blog">
          </div>
          <div class="form-check form-switch">
              <label class="form-check-label" for="flexSwitchCheckDefault">Ecommerce</label>
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" wire:model="ecommerce">
          </div>
          <div class="form-check form-switch">
            <label class="form-check-label" for="flexSwitchCheckDefault">SSL Certificate</label>
          <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" wire:model="ssl">
        </div>
    </form>
<hr>
    <div class="bg-info rounded p-1 text-center">
        <h1 class="text-light">{{$cost}} $</h1>
    </div>
</div>
