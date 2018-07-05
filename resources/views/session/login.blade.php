@extends('lay')
@section('logform')

    <div class="container" style="overflow:hidden;margin-left:550px;height:450px;">

        <h1>Sign IN</h1>
        <hr>

        <form action="/login" method="post">

            {{csrf_field()}}

            <div class="form-group">
                <label for="email"> Email </label>
                <input type="email" value=" " class="form-control" name="email">
            </div>
<br>
          <div class="form-group">
            <label for="password"> Password </label>
            <input type="password" name="password" class="form-control">
          </div>
          <br>
            <div class="form-group">
                <button class="btn btn-primary" type="submit"> Login </button>
            </div>
        </form>
        <br><br>
        
        @include('layout.error')
    

    </div>

    
@endsection('logform')