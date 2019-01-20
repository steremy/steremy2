@extends('layouts.master')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Add New Product</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>

            </div>

        </div>

    </div>


    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">

        @csrf


         <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Category:</strong>

                    <select name="category_id" class="form-control" required>
                        @php
                        $categories=\DB::table('categories')->get();
                        @endphp
                        <option value="">-- Select category--</option>
                        @forelse($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @empty
                        <option value="">No category found!</option>
                        @endforelse
                    </select>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Name:</strong>

                    <input type="text" name="name" class="form-control" placeholder="Name">

                </div>                
                <div class="form-group">

                    <strong>Description:</strong>

                    <input type="text" name="description" class="form-control" placeholder="details of the product">

                </div>                
                <div class="form-group">

                    <strong>Price:</strong>

                    <input type="number" name="price" class="form-control" placeholder="KSH.">

                </div>                
                <div class="form-group">

                    <strong>Image:</strong>

                    <input type="file" name="image" class="form-control" placeholder="Photo">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                    <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>


    </form>


@endsection