<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="{{URL::asset('js/home.js')}}"  type="text/javascript"></script>

  <link href="{{URL::asset('css/home.css')}}" rel="stylesheet" type="text/css">

  </head>
<body>
    
@include('layout.header')
@include('layout.navbar')

<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
  
    <!-- Right Column -->

 
    
    @yield('ram')
    @yield('form')
    @yield('regform')
    @yield('content')
    @yield('logform')
    @yield('list')
    @yield('edit')
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>






<!--    
<script>
  $("#btn").click(function(){

    alert("clicked");

});


</script> -->
<script src="{{URL::asset('js/home.js')}}"  type="text/javascript"></script>

</body>
</html>