
@extends('layouts.app')

@section('content')
<div class="container">

    
    @foreach ($posts as $post)
    <a href="{{ route('admin.post.show', $post->id) }}"><p>{{ $post['title']  }}</p></a>
    @endforeach  
    
    
</div>
@endsection