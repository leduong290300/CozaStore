@extends('layouts.form')
@section('page','Register')
@section('content')
  <div class="row">
    <h2>Create Account</h2>
  </div>
  @if (session('error'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      {{session('error')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
  <div class="row">
    <form class="form-group" method="post" enctype="multipart/form-data" action="{{route('submitFormRegisterUser')}}">
      @csrf
      <div class="row">
        <input type="text" name="username" id="username" class="form__input" placeholder="Username" value="{{old('username')}}">
        <small class="form-text text-danger">
          @foreach ($errors->get('username') as $message)
            {{$message}}
          @endforeach
        </small>
      </div>
      <div class="row">
        <input type="text" name="email" id="email" class="form__input" placeholder="Email" value="{{old('email')}}">
        <small  class="form-text text-danger">
          @foreach ($errors->get('email') as $message)
            {{$message}}
          @endforeach
        </small>
      </div>
      <div class="row">
        <input type="text" name="address" id="address" class="form__input" placeholder="Address" value="{{old('address')}}">
        <small  class="form-text text-danger">
          @foreach ($errors->get('address') as $message)
            {{$message}}
          @endforeach
        </small>
      </div>
      <div class="row">
        <input type="text" name="phone" id="phone" class="form__input" placeholder="Phone Number" value="{{old('phone')}}">
        <small  class="form-text text-danger">
          @foreach ($errors->get('phone') as $message)
            {{$message}}
          @endforeach
        </small>
      </div>
      <div class="row" style="display: flex;">
        <div class="col-md-12 col-xs-12 col-sm-12" style="padding:0 15px 0 0">
          <input type="password" name="password" id="password" class="form__input" placeholder="Password">
          <small id="emailHelp" class="form-text text-danger">
            @foreach ($errors->get('password') as $message)
              {{$message}}
            @endforeach
          </small>
        </div>
        <div class="col-md-12 col-xs-12 col-sm-12" style="padding:0 0 0 15px">
          <input type="password" name="password_confirmation" id="password_confirmation" class="form__input" placeholder="Password Confirm">
          <small  class="form-text text-danger">
            @foreach ($errors->get('password_confirmation') as $message)
              {{$message}}
            @endforeach
          </small>
        </div>
      </div>
      <div class="row">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </form>
  </div>
  <div class="row">
    <p>Already have an account? <a href="{{route('showFormLoginUser')}}">Login</a></p>
  </div>
@endsection
