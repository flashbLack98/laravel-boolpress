
@extends('layouts.app')

@section('content')
<div class="container">

    <form action="{{ route('admin.post.store')}}" method="post" enctype='multipart/form-data'>
        @csrf
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" name='title' id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmai2" class="form-label">Description</label>
            <input type="text" class="form-control" name='description' id="exampleInputEmai2" aria-describedby="emailHelp">
        </div> 

        <div class="mb-3">
            <label for="exampleInputEmai2" class="form-label">Img</label>
            <input type="file" class="form-control" name='coverImg' id="exampleInputEmai2" aria-describedby="emailHelp">
        </div>

        <h5>Categoria:</h5>
        <select name='category_id' class="form-select" aria-label="Default select example">
            <option selected>Categoria</option>
            @foreach ($categories as $category)
                
            <option value="{{$category->id}}">{{ $category->name}}</option>
            @endforeach
          </select>

          <h5>Tags:</h5>
        <select name='tags[]' multiple class="form-select" aria-label="Default select example">
            <option selected>Tags</option>
            @foreach ($tags as $tag)
                
            <option value="{{$tag->id}}">{{ $tag->name}}</option>
            @endforeach
          </select>


        <button type="submit" class="btn btn-primary mx-4">Add</button>
        
        
    </form>
</div>
@endsection