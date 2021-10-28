@extends('layouts.administration')
@section('page','Manage Product')
@section('content')
  <div class="col-lg-12">
    @if(session('success'))
      <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{session('success')}}
      </div>
    @endif
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-table"></i>
        Product List
      </div>
      <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
          <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Size</th>
            <th>Color</th>
            <th>Inventory</th>
            <th>Price</th>
            <th>Image</th>
            <th>Category</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          @if($products)
            @foreach($products as $product)
              <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->size}}</td>
                <td>{{$product->color}}</td>
                <td>{{$product->inventory}}</td>
                <td>{{$product->price}}</td>
                <td width="20%">
                  <img src="{{asset('storage/upload/products/'.$product->image)}}" alt="{{$product->image}}" class="img-fluid img-thumbnail">
                </td>
                <td>{{$product->inventory <= 0 ? "Out of stock":"Stocking"}}</td>
                <td>
                  <a href="{{route('product.edit',$product->id)}}">
                    <button class="btn btn-success">
                      <i class="fa fa-edit"></i>
                      Edit
                    </button>
                  </a>
                  <button class="btn btn-danger btn-delete"
                          data-toggle="modal"
                          data-target="#myDelete"
                          data-url="{{route('product.destroy',$product->id)}}"
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
    </div>
  </div>
@endsection
