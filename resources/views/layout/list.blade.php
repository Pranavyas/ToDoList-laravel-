@extends('lay')
@section('list')



 <div class="w3-twothird" style="margin-left:450px;height:600px;">  <!-- Right Column -->
 


   <div class="w3-container w3-card w3-white" style="height:550px;overflow:hidden">

     <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i><button style="background:white"id="btnlist"> LIST </button></h2>
       
     <hr>

    <div id="show" style="overflow:auto;width:890px;oveflow:auto;height:400px">
      
     @foreach($list as $list)
     

      <?php 

          $comp=$list->complete;
          
          $date=date('y-m-d');
         $task= json_decode($list->task);
         $date1=date_create($list->dt);
         $date2=date_create($date);
         $diff=date_diff($date1,$date2);
         $date7=date_create($list->dt);
         $dt=date_format($date7,"d F y");
         $len=count($task);
    
      ?>

     <div class="cook" style="display:inline-block;width:400px;height:400px;overflow:auto ;margin:0 2 5 20;border:2px solid red">
      
       <div class="w3-container">
       
          <div style="width:400px;">   
          <?php
          if($comp== 1){
          echo '
              <input type="checkbox" style="height:30px;width:40px;" class="check" checked onchange="check()"> 
          
          ';
          }else{
                echo '

                <input type="checkbox" style="height:30px;width:40px;" class="check"  onchange="check()"> 
                
                
                ';
          }
          ?>
            
           <h1 style="display:inline-block;width:250px; " class="w3-text-teal "><b><span>{{$list->title}}</span> </b></h1>
           
            <!-- error -->
           
           <a href="{{ url('/list/'.$list->title) }}" id="h"> <button style="margin:-50 0 0 300;position:relative" type="button" class="ram" onclick="button()" > <i class="fa fa-trash"> </i> </button> </a>

          <br>
        </div>

          <h3 class="w3-opacity" style="display:inline-block; width:70px">  <b> <strong> TASK: </strong>  </b></h3>
         
          <?php
          $i=0;

          while($i<$len){
            
          echo '<h2 class="w3-text-teal" style="display:inline-block; margin-left:100 px;width:300px">'. $task[$i].'</h2> <br><br>
          
          ';

          $i++;

          }

          ?>
          <h3 class="w3-opacity" style="display:inline-block; width:100px"><b> DEADLINE </b></h3>
         
          <?php 
         

              if(strtotime($list->dt) > strtotime($date)){
                 
                    if($comp==1){
              
                            echo ' <h3 class="w3-text-teal" style="display:inline-block; margin-left:20px;width:300px"><i class="fa fa-calendar fa-fw w3-margin-right"></i>  <b> ON TIME </b> </h3>
                            ';
                    } else{

                    echo '<h3 class="w3-text-teal" style="display:inline-block; margin-left:20px;width:300px"><i class="fa fa-calendar fa-fw w3-margin-right"></i> <b>' . $diff->format("%a days").'  LEFT </b>   </h3>
                    ';
                    }
               }else{

                if($comp==0){

                  echo ' <h3 class="w3-text-teal" style="display:inline-block; margin-left:20px;width:300px"><i class="fa fa-calendar fa-fw w3-margin-right"></i> <b style="color:red  "> OVER </b> </h3>
                  ';
                 }else{
                  echo ' 
                  <h3 class="w3-text-teal" style="display:inline-block;color:red; margin-left:20px;width:300px"><i class="fa fa-calendar fa-fw w3-margin-right"></i> <b style="color:red  "> LATE COMPLETE </b> </h3> 
                   ';
                 }


                

            
            }
          ?>
         
        
          <hr>

       </div>
    </div>
      
      
      @endforeach 
  
    </div>



          
    

</div>

 


@endsection('list')