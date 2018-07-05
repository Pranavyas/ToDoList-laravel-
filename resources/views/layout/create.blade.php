@extends('lay')
@section('form')


<div class="container">
  <form action="/form" method="POST" >
        {{csrf_field()}}
   <div class="form-group">
       <label for="title">Title:</label>
       <input type="text" name="title" class="form-control" id="title">
   </div>

   <div class="form-group">
       <label for="body">Title:</label>
        <textarea name="body" id="body" class="form-control" cols="10" rows="2"> </textarea>
       </div>
       <hr> 
    <button type="submit" class="btn btn-primary"> Submit </button>
  </form>

 @include('layout.error')
 
</div>

@endsection('form')