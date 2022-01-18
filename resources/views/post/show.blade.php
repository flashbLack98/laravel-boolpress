@extends('layouts.app');

@section('content')
<div class="container">

    <h1>{{$post['title']}}</h1>
    <h5>{{$post['description']}}</h5>

    <a href="{{ route('admin.post.edit', $post->id) }}">edit</a> 
    
    <form action="{{route('admin.post.destroy', $post->id) }}" method="POST">
    
    @csrf  

    @method('delete')
    <input type="submit" value="Cancella">

    </form>

</div>
@endsection