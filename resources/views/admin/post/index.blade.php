
@extends('layouts.app')

@section('content')

{{-- utilizzo compomnente Vue --}}
<div class="container">

    
    @foreach ($posts as $post)
    <a class="text-dark" href="{{ route('admin.post.show', $post->id) }}">
        <h3>{{ $post['title']  }}</h3>
        <p>{{ $post['description']  }}</p>
        <p>scritto da: {{ $post['user']['name']}} </p>
        <p>Categoria: {{ $post->category->name}} </p>

        <br>
    </a>
    @endforeach  
    
    <a href="{{ route('admin.post.create') }}">create</a>

    <div class="d-flex justify-content-center py-4">
        {!! $posts->links() !!}
      </div>

</div>

@endsection