@extends('layouts.app')

@section('content')
<div class="container">

    <h1>HOME DELL'ADMIN</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    <a href="{{ route('admin.post.create') }}">create</a> 
    <a href="{{ route('admin.post.index') }}">vedi post</a> 


   
</div>
@endsection