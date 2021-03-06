@extends('layouts.administration')
@section('page','Add Product')
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
        Add product
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" name="name" value="{{old('name')}}">
                    <p class="help-error">
                      @foreach ($errors->get('name') as $message)
                        {{$message}}
                      @endforeach
                    </p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category">
                      @foreach($category as $ele)
                      <option value="{{$ele->id}}">{{$ele->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Size</label>
                    <input class="form-control" name="size" value="{{old('size')}}">
                    <p class="help-error">
                      @foreach ($errors->get('size') as $message)
                        {{$message}}
                      @endforeach
                    </p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Color</label>
                    <input class="form-control" name="color" value="{{old('color')}}">
                    <p class="help-error">
                      @foreach ($errors->get('color') as $message)
                        {{$message}}
                      @endforeach
                    </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label>Inventory</label>
                    <input class="form-control" name="inventory" value="{{old('inventory')}}">
                    <p class="help-error">
                      @foreach ($errors->get('inventory') as $message)
                        {{$message}}
                      @endforeach
                    </p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label>Price</label>
                    <input class="form-control" name="price" value="{{old('price')}}">
                    <p class="help-error">
                      @foreach ($errors->get('price') as $message)
                        {{$message}}
                      @endforeach
                    </p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label>Code</label>
                    <input class="form-control" name="code" value="{{old('code')}}">
                    <p class="help-error">
                      @foreach ($errors->get('code') as $message)
                        {{$message}}
                      @endforeach
                    </p>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Description Long</label>
                <textarea class="form-control" rows="10" name="description_long">{{old('description_long')}}</textarea>
                <p class="help-error">
                  @foreach ($errors->get('description_long') as $message)
                    {{$message}}
                  @endforeach
                </p>
              </div>
              <div class="form-group">
                <label>Description Short</label>
                <textarea class="form-control" rows="10" name="description_short">{{old('description_short')}}</textarea>
                <p class="help-error">
                  @foreach ($errors->get('description_short') as $message)
                    {{$message}}
                  @endforeach
                </p>
              </div>
              <div class="form-group">
                <label>Image product</label>
                <input type="file" name="image_product">
                <p class="help-error">
                  @foreach ($errors->get('image_product') as $message)
                    {{$message}}
                  @endforeach
                </p>
              </div>
              <div class="form-group">
                <label>Display</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="display" id="optionsRadios1" value="public">Public
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="display" id="optionsRadios2" value="private">Private
                  </label>
                </div>
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
