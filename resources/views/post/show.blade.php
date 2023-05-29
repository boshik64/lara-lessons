@extends('layouts.main')
@section('content')
    <div>
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

        <a class="btn btn-primary mb-3 w-25" href="{{route('posts.edit',$post->id)}}">Edit</a>

        <form action="{{route('posts.destroy',$post->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger mb-3 w-25">
        </form>
    </div>
    <div>
        <a class="btn btn-primary mb-3 w-25" href="{{route('posts.index')}}">Back</a>
    </div>
@endsection

