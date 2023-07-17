@extends('admin-dashboard.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('admin.categories.store') }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputtitle">Name</label>
              <input type="text" class="form-control" name="name"  id="exampleInputtitle" placeholder="title">
            </div>
            @error('name')

            <p class="text-danger">{{ $message }}</p>
            @enderror


            <div class="form-group">
              <label for="exampleInputimage">image</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="image" id="exampleInputFile">

                  <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                </div>
               @if ($errors->has('image'))

               <p class="text-danger">{{ $errors->first('image') }}</p>
               @endif

                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div>


          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create category</button>
          </div>
        </form>
      </div>
</body>
</html>
@endsection
