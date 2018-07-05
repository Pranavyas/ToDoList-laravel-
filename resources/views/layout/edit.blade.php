@extends('lay')

@section('edit')





  <div id="left-edit" style="width:600px;height:500px;background:white;position:fixed;display:none">
  
          <!--  EDIT FORM -->

  <div class="form" style="margin:10 10 0 30; width:400; background:white">

    <form action="/insert" method="POST"> 
        
         {{csrf_field()}}
            
        <div class="form-group">
            <label for="title"><b>TITLE:</b></label>
            <input type="text" class="form-control" name="title"> 
        </div>

        <div class="form-group">
            <label for="task1"><b>Task:</b></label>
            <input type="text" class="form-control" name="task1"> 
        </div>

        <div class="add">
                
        </div>


        <div class="form-group">
            
            <label for="priority"><b>TITLE:</b></label>
            <select name="priority" style="background:white">

            <option value="urgent"> Urgent </option>
            <option value="today"> Today </option>
            <option value="This Week"> This Week</option>
            
            <option value="next week"> Next Week </option>
            </select>
        </div>

        <div class="form-group">
            <label for="date"> Deadline </label>
            <input type="date" name="date">
        </div>
        
        <button id="add" type="button"> ADD </button>
        
        <div style="margin-left:300">

          <button class="btn btn-primary" type="submit" > EDIT </button>

        </div>

</form>
</div> <!-- end of forms-->

</div>


 <div style="background:white;overflow:auto;position:fixed;margin:0 0 0 700 ;width:600px;height:500px;background:white;display:inline-block">

 <h1  class="w3-text-teal "><b><button id="btn" style="width: 600px; height: 50px">title 1</button> </b></h1><br><br><br>
 <hr>

@foreach($list as $list)

  <a href="{{url('/edit/'.$list->title)}}" > <button class="btn1" value="{{$list->title}}" class="btn1" style="margin-bottom:10px"> <h1 class="  w3-text-teal "><b></b>{{$list->title}} </b>  </h1> </button> </a> <br><br> <br>  <br>

@endforeach
 
</div>

 </div>  <!-- End Left Column -->




   


@endsection('edit')