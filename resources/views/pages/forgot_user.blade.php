@extends('layouts.form')
@section('page','Forgot Password')
@section('content')
  <div class="row">
    <h2>Password Recovery</h2>
    <p>Enter your email address and we will send you a link to reset your password.</p>
  </div>
  <div class="row">
    <form class="form-group">
      <div class="row">
        <input type="text" name="email" id="email" class="form__input" placeholder="Email">
        <small class="form-text text-danger"></small>
      </div>
      <div class="row" style="display: flex;justify-content: space-between;align-items: center">
        <div class="col-md-12 col-xs-12 col-sm-12 ">
          <a href="{{route('showFormLoginUser')}}">Return Login</a>
        </div>
        <div class="col-md-12 col-xs-12 col-sm-12 ">
          <button type="submit" class="btn btn-primary">Send link to email</button>
        </div>
      </div>
    </form>
  </div>
@endsection