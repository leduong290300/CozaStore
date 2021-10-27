@extends('layouts.administration')
@section('page','Edit slider')
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
      <i class="fa fa-edit"></i>
      Edit slider
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-6">
          <form role="form" method="post" enctype="multipart/form-data" action="{{route('slider.update',$sliderOfId)}}">
            @csrf
            {{ method_field('PATCH') }}
            <div class="form-group">
              <label>Title</label>
              <input type="text" name="title" class="form-control" value="{{old('title')}}">
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" type="text" name="description" rows="3">{{old('description')}}</textarea>
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label>Image slider</label>
              <input type="file" name="slider">
              <p class="help-block"></p>
            </div>
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-upload"></i>
              Update
            </button>
          </form>
        </div>
        <!-- /.col-lg-6 (nested) -->
        <div class="col-lg-6">
          <form role="form">
            <fieldset disabled>
              <div class="form-group">
                <label>Title</label>
                <input class="form-control" type="text" value="{{$sliderOfId->name}}" disabled>
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" type="text" name="description" rows="3">{{$sliderOfId->description}}</textarea>
              </div>
              <div class="form-group">
                <img src="{{asset('storage/upload/sliders/'.$sliderOfId->image)}}" alt="{{$sliderOfId->image}}" class="img-fluid img-thumbnail">
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
