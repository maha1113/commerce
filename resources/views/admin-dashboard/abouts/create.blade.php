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
        <form action="{{ route('admin.teams.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputtitle">{{ __('app.name_en') }}</label>
                    <input type="text" class="form-control" name="name_en" id="exampleInputtitle" value="{{ old('name_en') }}"  placeholder="title" >
                </div>
                @error('name_en')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputtitle">Name_ar</label>
                        <input type="text" class="form-control" name="name_ar" id="exampleInputtitle " value="{{ old('name_ar') }}"
                            placeholder="title">
                    </div>
                    @error('name_ar')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="form-group">
                        <label for="exampleInputtitle">job_title</label>
                        <input type="text" class="form-control" name="job_title" id="exampleInputtitle" value="{{ old('job_title') }}"
                            placeholder="title">
                    </div>
                    @error('job_title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror






                    <div class="form-group">
                        <label for="exampleInputtitle">facebook_link</label>
                        <input type="text" class="form-control" name="facebook_link" id="exampleInputtitle" value="{{ old('facebook_link') }}"
                            placeholder="facebook_link">
                    </div>
                    @error('facebook_link')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror


                    <div class="form-group">
                        <label for="exampleInputtitle">twitter_link</label>
                        <input type="text" class="form-control" name="twitter_link" id="exampleInputtitle" value="{{ old('twitter_link') }}"
                            placeholder="twitter_link">
                    </div>
                    @error('twitter_link')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="form-group">
                        <label for="exampleInputtitle">instagram_link</label>
                        <input type="text" class="form-control" name="instagram_link" id="exampleInputtitle"  value="{{ old('instagram_link') }}"
                            placeholder="instagram_link">
                    </div>
                    @error('instagram_link')
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
                        <button type="submit" class="btn btn-primary">Create teams</button>
                    </div>
        </form>
    </div>





    @endsection
