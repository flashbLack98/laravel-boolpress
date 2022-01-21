@extends('layouts.app');

@section('content')
<div class="container">

    <h1>{{$post['title']}}</h1>
    <h5>{{$post['description']}}</h5>
    <p>categoria : {{ $post->category->name }} </p>
    <p>scritto da : {{ $post->user->name }} </p>
    

    <a  href="{{ route('admin.post.edit', $post->id) }}">edit</a> 
    
    <form action="{{route('admin.post.destroy', $post->id) }}" method="POST">
    
    @csrf  

    @method('delete')
    <input type="submit" value="Cancella">

    </form>
    <a href="/admin/post">Torna alla lista</a>


</div>
@endsection