
<div class="topnav">

<a href="/post "><i class="fa fa-home" style="font-size:40px"></a></i>


@if(Auth::check())

<a href="/edit" style="font-size:20px">EDIT</a>

  <a  href="/list" style="font-size:20px;">ToDo L!$T</a>
  
 
  <button id="search" style="margin:10 0 0 10"> <i class="fa fa-search"> SEARCH </i> </button>  

 


  <div style="display:block; margin-left: 1000px">
  
  <a href="/log" style="font-size:20px">LOGOUT</a>
  
  </div>

  
  <div style="display:block; margin-left: 1100px">
 
  <a href="#about" class="ml-auto" style="font-size:20px">{{ Auth::user()->name }}</a>
  
  </div>

<div><img src="{{asset('/image/avtar.png')}}" height="50" width="100" alt=""></div>

  @endif
</div>

<div>




