@extends('admin-dashboard.master')

@section('content')
{{-- @dd(session('flashMessage')) --}}
@if (session('flashMessage'))
<div class="alert alert-success">{{ session('flashMessage') }}</div>
@endif

    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Team</h3>
        </div>

        <!-- /.card-header -->
        <!-- form start -->


        <form action="{{ route('admin.teams.update', $team->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputtitle">Name_en</label>
              <input type="text" class="form-control" name="name_en"  id="exampleInputtitle" placeholder="title" value="{{ $team->name_en }}">
            </div>
            @error('name')

            <p class="text-danger">{{ $message }}</p>
            @enderror

            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputtitle">Name_ar</label>
                    <input type="text" class="form-control" name="name_ar" id="exampleInputtitle"
                        placeholder="title"
                        value="{{ $team->name_ar}}">
                </div>
                @error('name_ar')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

            <div class="form-group">
                <label for="exampleInputtitle">job_title</label>
                <input type="text" class="form-control" name="job_title"  id="exampleInputtitle" placeholder="title"  value="{{ $team->job_title }}">
              </div>
              @error('job_title')

              <p class="text-danger">{{ $message }}</p>
              @enderror


              <div class="form-group">
                <label for="exampleInputtitle">facebook_link</label>
                <input type="text" class="form-control" name="facebook_link" id="exampleInputtitle"
                    placeholder="facebook_link"  value="{{ $team->facebook_link }}">
            </div>
            @error('facebook_link')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <div class="form-group">
                <label for="exampleInputtitle">twitter_link</label>
                <input type="text" class="form-control" name="twitter_link" id="exampleInputtitle"
                    placeholder="twitter_link"  value="{{ $team->twitter_link }}">
            </div>
            @error('twitter_link')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <div class="form-group">
                <label for="exampleInputtitle">instagram_link</label>
                <input type="text" class="form-control" name="instagram_link" id="exampleInputtitle"
                    placeholder="instagram_link"  value="{{ $team->instagram_link }}">
            </div>
            @error('instagram_link')
                <p class="text-danger">{{ $message }}</p>
            @enderror


            <div class="form-group">
              <label for="exampleInputimage">image</label>
              <div class="input-group">
                  <img src="{{ asset('storage/'. $team->image) }}" width="100px" alt="">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="image" id="exampleInputFile">

                  <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                </div>


                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div>


          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create teams</button>
          </div>
        </form>
      </div>
   @endsection
