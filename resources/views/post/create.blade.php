@extends('layouts.main')
@section('content')
    <form action="{{route('posts.store')}}" method="post" class="container">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input placeholder="Введите название" value="{{old('title')}}" type="text" name="title" class="form-control"
                   id="title"
                   aria-describedby="emailHelp">
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea placeholder="Введите описание" name="content" class="form-control" id="content"
                      aria-describedby="emailHelp">{{old('content')}}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input value="{{old('image')}}" type="text" name="image" class="form-control" id="image"
                   placeholder="Вставьте URL изображения"
                   aria-describedby="emailHelp">
            @error('image')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <label style="margin-bottom:0.5rem" for="category">Category</label>
        <select name="category_id" id="category" class="form-select form-select-sm"
                aria-label=".form-select-sm example">
            @foreach($categories as $category)
                <option
                    {{old('category_id') == $category->id ? 'selected' : ''}}
                    value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
        <label style="margin-bottom:0.5rem" for="tags">Tags</label>
        <select class="form-select" multiple aria-label="multiple select example" id="tags" name="tags[]">
            @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->title}}</option>
            @endforeach
        </select>


        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection

