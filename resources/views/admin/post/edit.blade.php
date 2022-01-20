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
            <button type="submit" class="btn btn-primary mx-4">Add</button>
            
            
        </form>
    </div>
@endsection