@extends('lay')

@section('content')


<br><br><br><br><br><br><br><br><br>

<div id="bo">
        
</div>

 <div class="container" id="i1" style="margin-left:510px;margin-top:-100px;width:600px;background:white">
 <h1 > welcome {{ Auth::user()->name }} </h1>
</div>

<div class="container" id="i2" style="margin-left:510px;margin-top:-100px;width:850px;background:white">
 <h1 > YOU CAN CREATE YOUR OWN DO TO LIST</h1>
</div>

<div class="container" id="i3" style="margin-left:510px;margin-top:-100px;width:600px;background:white">
    <h1>Let's have a look at the tutorials</h1>
</div>

<div class="container" id="i4" style="margin-left:0px;margin-top:-197px;width:300px;background:white">
<h3>Press <strong>HOME</strong> to go desktop </h3>
</div>


<div class="container" id="i5" style="margin-left:0px;color:white;opacity: 0.0;margin-top:-159px;width:500px;height:400px;background:white">
        <h3> You can register there ones you are LOGOUT from here</h3>
</div>



<div class="container" id="i6" style="margin-left:70px;margin-top:-197px;width:300px;background:white">
        <h3> <strong>EDIT </strong>  will enable you to make any changes.</h3>
</div>

<div class="container" id="i7" style="margin-left:150px;margin-top:-197px;width:300px;background:white">
        <h3> <strong>TODO L!$t </strong> will show the status of all the tasks..</h3>
</div>

<div class="container" id="i8" style="margin-left:280px;margin-top:-197px;width:300px;background:white">
        <h3> You can <strong> SEARCH </strong> inserted task.</h3>
</div>


<div class="container" id="i9" style="margin-left:1000px;margin-top:-197px;width:300px;background:white">
        <h3> You can <strong> LOGOUT </strong> from here. </h3>
</div>

<div id="bottombtn">

    <button id="btnbtm">

    <img src="{{asset('/image/avtar.png')}}" width="100" height="100" alt="ADD button">
    </button>


</div>

<div id="wrapper">

<div class="container" id= "cont" style="display:none;overflow:auto;background:white;width:750px;height:490px;">

    <form action="/insert" method="POST">
        
         {{csrf_field()}}
            
        <div class="form-group">
            <label for="title"><b>TITLE:</b></label>
            <input type="text" class="form-control" name="title"> 
        </div>

        <div class="form-group">
            <label for="task1"><b>Task:</b></label>
            <input type="text" class="form-control" name="task[]"> 
        </div>

        <div class="add">
                
        </div>


        <div class="form-group">
            
            <label for="priority"><b>PRIORITY:</b></label>
            <select name="priority" style="background:white">

            <option value="urgent"> Urgent </option>
            <option value="today"> Today </option>
            <option value="This Week"> This Week</option>
            
            <option value="next week"> Next Week </option>
            </select>
        </div>
    <br>
        <div class="form-group">
            <label for="date"> Deadline </label>
            <input type="date" name="date" class="form-control">
        </div>

        <br><br>
        <button id="add" type="button"> ADD </button>
        
        <div style="margin-left:300">

          <button class="btn btn-primary" type="submit" > INSERT </button>

        </div>

</form>
</div>

</div>


@endsection('content ')







