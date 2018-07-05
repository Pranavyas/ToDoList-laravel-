@extends('lay')

@section('edit')


  <div id="left-edit" style="width:600px;height:600px;overflow:hidden ;background:white;position:fixed;">
      
          <!--  EDIT FORM -->

  <div class="form" style="margin:50 10 0 30; width:600;height:500px;overflow:auto;">

@foreach($edit as $edit)

    <?php 
             $task= json_decode($edit->task);

             $len=count($task);

    ?>


<form action="/modify" method="POST"> 
        
         {{csrf_field()}}
         
            <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title"  class="form-control" value="{{$edit->title}}"> <br><br>
            </div>
           
          @foreach ($task as $task)
          
            
            <div class='form-group'>
            <label for='taks'> Task: </label>
            <input type='text' name='task[]' value="{{$task}}"> <br> <br>
            </div>
            <br>

          @endforeach 
            

            <div class="form-group">
            <label for="dt">Deadline:</label>
            <input type="date" name="dt" class="form-control" value="{{$edit->dt}}"> <br><br>
            </div>
            <div class="form-group"> 
            <label for="priority"> Priority: </label>
            <input type="text" name="priority" class="form-control" value="{{$edit->priority}}"> <br>
            </div>
          <input type="submit" value='EDIT'>

            dasds
    </form>



   

@endforeach

</div> <!-- end of forms-->

</div>



  


 <div style="background:white;overflow:auto;position:fixed;margin:0 0 0 700 ;width:600px;height:500px;background:white;display:inline-block">

 <h1  class="w3-text-teal "><b><button id="btn" style="width: 600px; height: 50px">TASK EDIT</button> </b></h1><br><br><br>
 <hr>

@foreach($list as $list)

  <a href="{{ url('/edit/'.$list->title)}}"> <button class="btn1" value="{{ $list->title }}" class="btn1" style="margin-bottom:10px"> <h1 class="  w3-text-teal "><b></b>  {{$list->title}} </b>  </h1> </button> </a> <br><br> <br>  <br>

@endforeach
 
</div>

 </div>  <!-- End Left Column -->




   


@endsection('edit')