@extends('layouts.app')
@section('content')
<div class="row">
    <br><br>
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="panel panel-default">
          @if(session ('success'))
          <div id="successMessage" class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('success') }}
        </div>
        @endif
        @if(session ('fail'))
        <div id="successMessage" class="alert alert-danger">
           <button type="button" class="btm btn-primary" data-dismiss="alert">×</button>
           {{ session('fail') }}
       </div>
       @endif
       <div class="panel-heading" style="text-align: center;background-color:lightblue;height:50px;font-size:20px;">Ziiwaka Medical Center</div>
       <div class="panel-body">
        <img style="width:100px; height:100px;display: block;
        margin-left: auto;
        margin-right: auto;vertical-align: middle;" class="center" src="{{ url('/assets/img/osclogo.png') }}">
        <br>
        <form class="form-horizontal" method="POST" 
        action="{{url('adminLogin')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
            <label for="role" class="col-md-4 control-label">Login As</label>

            <div class="col-md-6">
                <select name="role" class="form-control selectpicker">
                    @foreach($roles as $role)
                    <option value="{{ $role->id }} ">{{ $role->name }}</option>
                    @endforeach
                </select> 

            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" autocomplete="off" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>

                        <!-- <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
@endsection
