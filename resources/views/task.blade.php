<html>
<body>
    
    @foreach($task as $task)
<li> {{$task->body}} </li>
    @endforeach

</body>
</html>