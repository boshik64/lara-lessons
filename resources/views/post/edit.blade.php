@extends('layouts.main')
@section('content')
    <form action="{{route('posts.update',$post->id)}}" method="post" class="container">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp"
                   value="{{$post->title}}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="content"
                      aria-describedby="emailHelp">{{$post->content}}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" aria-describedby="emailHelp"
                   value="{{$post->image}}">
        </div>

        <label style="margin-bottom:0.5rem" for="category">Category</label>
        <select name="category_id" id="category" class="form-select form-select-sm"
                aria-label=".form-select-sm example">
            @foreach($categories as $category)
                <option
                    {{$category->id===$post->category->id ? 'selected' : ''}}
                    value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
        <label style="margin-bottom:0.5rem" for="tags">Tags</label>
        <select class="form-select" multiple aria-label="multiple select example" id="tags" name="tags[]">
            @foreach($tags as $tag)
                <option
                    @foreach($post->tags as $postTag)
                        {{$tag->id===$postTag->id ? 'selected' : ''}}
                    @endforeach
                    value="{{$tag->id}}">{{$tag->title}}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

