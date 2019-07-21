@extends('layouts.app')

@section('content')
<di>
<div class="signupContainer" style="background-color: white;border-radius:10px;">
  <div class="row">
  @if(session ('success'))
  <div id="successMessage" class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    {{ session('success') }}
  </div>
  @endif
  @if(session ('fail'))
  <div id="successMessage" class="alert alert-danger">
   <button type="button" class="close" data-dismiss="alert">×</button>
   {{ session('fail') }}
 </div>
 @endif
</div>
  <h1 align="center" style="font-weight: bold;">Ziiwaka Clinic</h1>
  <form class="form-horizontal" method="POST" action="{{ url('loginpatient') }}">
    {{ csrf_field() }}

    <div align="center" class="{{ $errors->has('email') ? ' has-error' : '' }}">
      <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
      @if ($errors->has('email'))
      <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
      </span>
      @endif
    </div>
    <div align="center" class="{{ $errors->has('password') ? ' has-error' : '' }}">
      <input id="password" type="password"  name="password" placeholder="Password">
      @if ($errors->has('password'))
      <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif
    </div>
    <br>
    <div align="center" >
    <label align="center"> 
      Don't have an account yet? <a href="{{ url('register') }}">Create an account</a>
    </label>
  </div>

    <button type="submit" class="register2">
      Log in
    </button>  <br><br>

  </form>
</div>
</div>
@endsection
