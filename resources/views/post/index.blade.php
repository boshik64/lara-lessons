@extends('layouts.main')
@section('content')
    <div style="display: flex">
        @foreach($posts as $post)
            <div style="margin: 0 10px 10px 0;" class="toast show">
                <a style="text-decoration: none;text-align:center" href="{{route('posts.show',$post->id)}}">
                    <div class="toast-header" style="text-align:center">
                        {{$post->title}}
                    </div>
                    <div class="toast-body">
                        <img src="{{$post->image}}" style="width:100px">
                    </div>
                    <div class="toast-body">
                        {{$post->content}}
                    </div>
                </a>

            </div>
        @endforeach
    </div>
    <a class="btn btn-primary mb-3" href="{{route('posts.create')}}">Add post</a>
@endsection

