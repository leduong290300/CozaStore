@extends('layouts.administration')
@section('page','Manage Slider')
@section('content')
@if(session('success'))
  <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{session('success')}}
  </div>
@endif
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-table"></i>
        Slider List
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if($slider)
                  @foreach($slider as $element)
                    <tr>
                      <td>{{$element->id}}</td>
                      <td width="30%">
                        <img src="{{asset('storage/upload/sliders/'.$element->image)}}" alt="{{$element->image}}" class="img-fluid img-thumbnail">
                      </td>
                      <td>{{$element->name}}</td>
                      <td>{{$element->description}}</td>
                      <td>
                        <a href="{{route('slider.edit',$element->id)}}">
                          <button class="btn btn-success">
                            <i class="fa fa-edit"></i>
                            Edit
                          </button>
                        </a>
                        <button class="btn btn-danger btn-delete"
                                data-toggle="modal"
                                data-target="#myDelete"
                                data-url="{{route('slider.destroy',$element->id)}}"
                        >
                          <i class="fa fa-trash"></i>
                          Delete
                        </button>
                      </td>
                    </tr>
                  @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
</div>
<a href="{{route('slider.create')}}">
<button class="btn btn-primary">
    <i class="fa fa-plus"></i>
    Add Slider
</button>
</a>
@endsection
