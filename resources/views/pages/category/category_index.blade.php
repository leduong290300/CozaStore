@extends('layouts.administration')
@section('page','Manage Category')
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
      Category List
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
          @if($categories)
            @foreach($categories as $element)
              <tr>
                <td>{{$element->id}}</td>
                <td width="30%">
                  <img src="{{asset('storage/upload/categories/'.$element->image)}}" alt="" class="img-fluid img-thumbnail">
                </td>
                <td>{{$element->name}}</td>
                <td>{{$element->description}}</td>
                <td>
                  <a href="{{route('category.edit',$element->id)}}">
                    <button class="btn btn-success">
                      <i class="fa fa-edit"></i>
                      Edit
                    </button>
                  </a>
                  <button class="btn btn-danger btn-delete"
                          data-toggle="modal"
                          data-target="#myDelete"
                          data-url="{{route('category.destroy',$element->id)}}"
                  >
                    <i class="fa fa-trash"></i>
                    Delete
                  </button>
                  <a href="{{route('category.show',$element->id)}}">
                    <button class="btn btn-primary">
                      <i class="fa fa-folder"></i>
                      All product
                    </button>
                  </a>
                </td>
              </tr>
            @endforeach
          @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <a href="{{route('category.create')}}">
    <button class="btn btn-primary">
      <i class="fa fa-plus"></i>
      Add Category
    </button>
  </a>
@endsection
