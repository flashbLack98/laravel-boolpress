
@extends('layouts.app')

@section('content')
<div class="container">

    <form action="{{ route('admin.post.store')}}" method="post">
        @csrf
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" name='title' id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmai2" class="form-label">Description</label>
            <input type="text" class="form-control" name='description' id="exampleInputEmai2" aria-describedby="emailHelp">
        </div> 

        <h5>Categoria:</h5>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Default radio
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              Default checked radio
            </label>
          </div>    


        <button type="submit" class="btn btn-primary mx-4">Add</button>
        
        
    </form>
</div>
@endsection