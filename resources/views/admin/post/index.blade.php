
@extends('layouts.app')

@section('content')
<div id="app" class="container">

    
   {{--  @foreach ($posts as $post)
    <a href="{{ route('admin.post.show', $post->id) }}"><p>{{ $post['title']  }}</p></a>
    @endforeach   --}}
    
    
</div>
<script src="{{ asset('js/vue.js') }}" defer></script>
<script src="{{ asset('js/app.js') }}" defer></script>
@endsection