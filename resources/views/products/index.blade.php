@extends('layouts.master')
@section('crumbs')
 <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Products</li>
@endsection

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>PRODUCTS</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
           <th>#</th>
           <th>Name</th>
          <th>Description</th>
          <th>Category</th>
          <th>Price</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
    </thead>
        @foreach ($products as $i=>$product)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->price }}</td>
            <td><img style="width: 150px; height: 90px;" class="img-responsive" src="{{asset('storage/products/'.$product->image)}}">
</td>
            <td>

                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
{{--                     <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
 --}}
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>

        </tr>

        @endforeach

    </table>
</div>
@endsection