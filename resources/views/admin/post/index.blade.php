
@extends('layouts.app')

@section('content')

{{-- utilizzo compomnente Vue --}}
<div {{-- id="app" --}} class="container">

    
    @foreach ($posts as $post)
    <a class="text-dark" href="{{ route('admin.post.show', $post->id) }}">
        <h3>{{ $post['title']  }}</h3>
        <p>{{ $post['description']  }}</p>
        <p>scritto da: {{ $post->user->name}} </p>
        <p>Categoria: {{ $post->category->name}} </p>

        <br>
    </a>
    @endforeach  
    
    <a href="{{ route('admin.post.create') }}">create</a> 

</div>
{{-- <script src="{{ asset('js/vue.js') }}" defer></script> --}}
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection