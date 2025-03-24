@extends('layouts.app')

@section('content')

<h1>{{$page}}</h1>
<div class="row">
    <div class="col-md-6 mx-auto">
        @foreach($posts as $post)
        <div class="card mb-5">
            <img src="{{asset('upload/' . $post->image)}}" class="card-img-top" alt={{$post->title}}>
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}:</h5>
                <p class="card-text">@php echo substr($post->description, 0, 100) @endphp ...</p>
                <a href="{{route('post.show', ['slug'=>$post->slug])}}" class="btn btn-primary">Show</a>
            </div>
        </div>
        @endforeach
        {{$posts->links()}}
    </div>
</div>
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero optio fugiat debitis voluptatibus a. Labore officiis porro nesciunt tenetur, odio magnam facere temporibus, dolor quidem eos accusamus iure. Magni, laudantium?
@endsection 