@extends('layouts.master')
@section('content')
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Your Personal Infromation
                </h1>
            </div>
        </div>
    </div>
</section>
<br>
<section class="team-area">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
     <form class="form-horizontal" method="post" action="{{url('patient/create') }}" enctype="multipart/form-data">
       {{ csrf_field() }}
       <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" >{{ __('Name') }}</label>
        <input id="name" type="name" class="form-control " name="name" value="{{ old('name') }}" autocomplete="name" placeholder="Name">

        @if ($errors->has('name'))            
        <span class="help-block">
          <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif    
      </div>

      <div class="form-group">
       <label class="radio-inline">
        <input type="radio" value="Male" name="gender" checked>Male
      </label>
      <label class="radio-inline">
        <input type="radio" value="Female" name="gender">Female
      </label>
    </div>
    <div class="form-group  {{ $errors->has('age') ? ' has-error' : '' }}">
    <label for="age" >{{ __('Age') }}</label>
    <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" placeholder="Age" nu autocomplete="age">

    @if ($errors->has('age'))            
    <span class="help-block">
      <strong>{{ $errors->first('age') }}</strong>
    </span>
    @endif  
  </div>
    <div class="form-group  {{ $errors->has('email') ? ' has-error' : '' }}">
      <label for="email" >{{ __('Email') }}</label>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="email">

      @if ($errors->has('email'))            
      <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
      </span>
      @endif  
    </div>

    <div class="form-group  {{ $errors->has('password') ? ' has-error' : '' }}">
      <label for="password" >{{ __('Password') }}</label>
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Password" autocomplete="password">

      @if ($errors->has('password'))            
      <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif  
    </div>
    <div class="form-group">

     <label for="password-confirm" >{{ __('Confrim Password') }}</label>

     <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
     
   </div>

   <div class="form-group  {{ $errors->has('phone_number') ? ' has-error' : '' }}">
    <label for="phone_number" >{{ __('Phone Number') }}</label>
    <input id="phone_number" type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone Number" nu autocomplete="phone_number">

    @if ($errors->has('phone_number'))            
    <span class="help-block">
      <strong>{{ $errors->first('phone_number') }}</strong>
    </span>
    @endif  
  </div>

  <div class="form-group  {{ $errors->has('address') ? ' has-error' : '' }}">
    <label for="address" >{{ __('Address') }}</label>
    <textarea id="address"  class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Address" autocomplete="address">
    </textarea>

    @if ($errors->has('address'))            
    <span class="help-block">
      <strong>{{ $errors->first('address') }}</strong>
    </span>
    @endif  
  </div>

     

  <button type="submit" align ="center" class="btn btn-primary">Register</button>
  <a href="{{url('/home')}}" align ="center" class="btn btn-primary">Cancel</a>
</form>
  
        </div>
    </div>
</div>
</div>
</section>
@endsection

@section('js')

@endsection