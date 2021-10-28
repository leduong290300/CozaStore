@extends('layouts.administration')
@section('page','Edit product')
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
        Edit product
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <form method="post" action="{{route('product.update',$product)}}" enctype="multipart/form-data">
              @csrf
              {{ method_field('PATCH') }}
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" name="name" value="{{$product->name}}">
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
                    <input class="form-control" name="size" value="{{$product->size}}">
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
                    <input class="form-control" name="color" value="{{$product->color}}">
                    <p class="help-error">
                      @foreach ($errors->get('color') as $message)
                        {{$message}}
                      @endforeach
                    </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Inventory</label>
                    <input class="form-control" name="inventory" value="{{$product->inventory}}">
                    <p class="help-error">
                      @foreach ($errors->get('inventory') as $message)
                        {{$message}}
                      @endforeach
                    </p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Price</label>
                    <input class="form-control" name="price" value="{{$product->price}}">
                    <p class="help-error">
                      @foreach ($errors->get('price') as $message)
                        {{$message}}
                      @endforeach
                    </p>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Description Long</label>
                <textarea class="form-control" rows="10" name="description_long">{{$product->description_long}}</textarea>
                <p class="help-error">
                  @foreach ($errors->get('description_long') as $message)
                    {{$message}}
                  @endforeach
                </p>
              </div>
              <div class="form-group">
                <label>Description Short</label>
                <textarea class="form-control" rows="10" name="description_short">{{$product->description_short}}</textarea>
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
                <i class="fa fa-upload"></i>
                Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
