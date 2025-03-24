@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-6 mx-auto">
        <img src="{{asset('upload/'. $post->image)}}" alt={{$post->title}} width='80%'>
        <h2 class="mt-2 text-bold mb-3">{{$post->title}} :</h2>
        <p class="ps-5">{{$post->description}}</p>
    </div>
</div>

@endsection

