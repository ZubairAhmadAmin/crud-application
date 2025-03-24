@extends('layouts.app')

@section('content')

<h1>{{$page}}</h1>
<div class="row">
    <div class="col-md-6 mx-auto">
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
        @endif
        <div class="d-flex justify-content-end">
            <a href="{{route('admin.create')}}" class="btn btn-primary mb-3">Create Post</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>@php echo substr($post->description, 0, 100) @endphp ...</td>
                    <td>
                        <a href="{{route('admin.edit', ['admin'=>$post->id])}}"><i class="fas fa-edit"></i></a> | <a href="{{route('delete', ['id'=>$post->id])}}"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection