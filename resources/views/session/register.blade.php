@extends('lay')
@section('regform')
<div class="container" style="overflow:hidden;width:500px;height:550px;margin-left:520px; ">
<h1>Registration form</h1>
    <form action="/register" method="post">
        
        {{csrf_field()}}

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" value=' ' name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Password Confirm </label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email">
        </div>


        <div class="form-group">
            <button class="btn btn-primary"> Register </button>
        </div>
    </form>
      @include('layout.error')
</div>
@endsection('regform')