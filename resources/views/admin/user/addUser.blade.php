<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

<div class="container ">
    <div class="header">
      <h1 align="center" >User Registration</h1>
    </div>
    <form method="POST" action="{{ url('admin/add-user') }}">
        @csrf
    <div class="input_area">
      <input  id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/><br><br>
      @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
  
      <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"><br><br>
      @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror
  
      <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"><br><br>
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password"><br><br>
  
    </div>
  
  
    <div class="actions mb-2">
      <button type="submit" value="Register">{{ __('Register') }}</button>
    </div>
  
  
    </form>
  </div>