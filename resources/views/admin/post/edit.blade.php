@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.post.update', $post->id) }}" method="post">
            @csrf
            
            @method('put')

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input value='{{$post['title']}}' type="text" class="form-control" name='title' id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmai2" class="form-label">Description</label>
                <input value='{{$post['description']}}' type="text" class="form-control" name='description' id="exampleInputEmai2" aria-describedby="emailHelp">
            </div> 

            <h5>Categoria:</h5>
        <select name='category_id' class="form-select" aria-label="Default select example">
            
            @foreach ($categories as $category)
            
                <option value="{{$category->id}}" {{-- @if( $category->id === $post->category_id ) selected @endif --}}>{{ $category->name}}</option>
            @endforeach
           
          </select>

          {{-- <h5>Tags:</h5>
        <select name='tags[]' multiple class="form-select" aria-label="Default select example">
            <option selected>{{ $post->tags-> }}</option>
            
            @foreach ($tags as $tag)
                
            <option value="{{$tag->id}}">{{ $tag->name}}</option>
            @endforeach
          </select> --}}


            <button type="submit" class="btn btn-primary mx-4">Modifica</button>
            
            
        </form>

        <a href="/admin/post/{{ $post->id }}">Torna ai dettagli</a>
    </div>
@endsection