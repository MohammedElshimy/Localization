{{csrf_field()}}

<div class="row">
 
  <div class="col-md-6">
    <div class="form-group bmd-form-group">
      <label class="bmd-label-floating">Username</label>
      <input type="text" name="name" value="{{ isset($users) ? $users->name : '' }}" class="form-control  @error('password') is-invalid @enderror">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group bmd-form-group">
      <label class="bmd-label-floating">Email address</label>
      <input type="email" name="email" value="{{ isset($users) ? $users->email : '' }}" class="form-control  @error('email') is-invalid @enderror" >
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group bmd-form-group">
      <label class="bmd-label-floating">Password</label>
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
  </div>
  
</div>
