@extends('layouts.administration')
@section('page','Add slider')
@section('content')
  <div class="col-lg-12">
    @if(session('error'))
      <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{session('error')}}
      </div>
    @endif
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-plus"></i>
        Add slider
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <form method="post" action="{{route('slider.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Title</label>
                <input class="form-control" name="title" value="{{old('title')}}">
                <p class="help-block"></p>
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" name="description">{{old('description')}}</textarea>
                <p class="help-block"></p>
              </div>
              <div class="form-group">
                <label>Image slider</label>
                <input type="file" name="slider">
                <p class="help-block"></p>
              </div>
              <button type="submit" class="btn btn-primary">
                <i class="fa fa-save"></i>
                Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
