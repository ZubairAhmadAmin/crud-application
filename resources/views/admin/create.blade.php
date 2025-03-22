@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-6 mx-auto">
        <h3>Create Post</h2>
        <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col-sm-10">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                    <input type="text" name="title" placeholder="Enter the post title" class="form-control" required>
                    @error('title')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-10">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Image</label>
                    <input type="file" name="image" required>
                    @error('image')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-10">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                    <textarea class="form-control" placeholder="Enter the post description" name="description" cols="20" rows="8" required></textarea>
                    @error('description')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>

@endsection