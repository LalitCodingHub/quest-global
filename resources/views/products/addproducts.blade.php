@extends('admin.layouts.default')

@section('content')


<div class="container-fluid">
    <div class="row">
          <!-- left column -->
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    @if(session('success'))
                    <div class="alert alert-success">
                       {{ session('success') }}
                    </div> 
                  @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                    <h3 class="card-title">ADD PRODUCT</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
    <form id="formContainer" href="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
            <label for="productname">Name</label>
            <input type="text" name="name" id="productname" class="form-control" placeholder="Enter product name">
            </div>
            <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" placeholder="Description" name="description">
            </div>
            <div class="col-sm-6">
                <!-- select -->
                <div class="form-group">
                <label>Category</label>
                <select name="category" class="form-control">
                    <option disabled selected>select category</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="form-group">
                <label for="units">Stock Units</label>
                <input type="number" class="form-control" name="units" id="units" placeholder="Unit of stock">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="Price of product">
            </div>
            <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
                <div class="input-group-append">
                    <input type="file" name="fileToUpload[]" id="fileToUpload">
                </div>
            </div>
            </div>
        </div>
            <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
        </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

@endsection
