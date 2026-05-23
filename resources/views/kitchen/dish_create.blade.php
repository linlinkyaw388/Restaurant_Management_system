@extends('layouts.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kitchen Panel</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create a delicious dish</h3>
                    <a href="/dish" class="btn btn-default" style="float: right;">Back</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="/dish" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Dish Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" name="category" id="category">
                                <option value="" disabled>Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label><br>
                            <input type="file" class="" name="dish_image" id="image">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div> 
             <!-- /.col -->
        </div>
    </div>
</div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection

