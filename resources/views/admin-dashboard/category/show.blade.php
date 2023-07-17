@extends('admin-dashboard.master')

@section('content')

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Category</h3>


        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">

            <a href="{{ route('admin.categories.create') }}" class="btn btn-info" role="button">Create Category</a>
            <div class="input-group-append">

            </div>
          </div>
        </div>
      </div>



      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Image</th>
              <th>Action</th>


            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>

                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td><img width="100px" src= "{{ asset( 'storage/'. $category->image ) }}"  alt="image"></td>
                <td><a href="{{ route('admin.categories.edit', $category->id) }} "btn btn-primary btn-sm><i class="fas fa-edit "></a></i>
                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button  btn btn-danger btn-sm><i class="fas fa-trash"></i></button>
                   </td>
                    </form>
              </tr>
            @endforeach



          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>













  @endsection
