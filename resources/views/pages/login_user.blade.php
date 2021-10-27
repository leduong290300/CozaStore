@extends('layouts.form')
@section('page','Login')
@section('content')
  <div class="row">
    <h2>Log In</h2>
    @if (session('success'))
      <div class="alert alert-success alert-dismissable fade show" role="alert">
        {{session('success')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
  </div>
  <div class="row">
    <form class="form-group" method="post" action="{{route('submitFormLoginUser')}}" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <input type="text" name="email" id="email" class="form__input" placeholder="Email">
        <small class="form-text text-danger"></small>
      </div>
      <div class="row">
        <!-- <span class="fa fa-lock"></span> -->
        <input type="password" name="password" id="password" class="form__input" placeholder="Password">
        <small  class="form-text text-danger"></small>
      </div>
      <div class="row" style="display: flex;justify-content: space-between;margin:1.5em auto">
        <div class="col-md-12 col-xs-12 col-sm-12">
          <input type="checkbox" name="remember_me" id="remember_me" class="">
          <label for="remember_me">Remember Me!</label>
        </div>
        <div class="col-md-12 col-xs-12 col-sm-12">
          <a href="{{route('showFormForgotPasswordUser')}}">Forgot Password?</a>
        </div>
      </div>
      <div class="row">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <div class="row">
    <p>Don't have an account? <a href="{{route('showFormRegisterUser')}}">Create Here</a></p>
  </div>
@endsection