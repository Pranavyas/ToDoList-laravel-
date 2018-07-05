<div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
       
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i><a href="/post/{{$post->id}}">  {{$post->title}}</a></h2>
       
      <div class="w3-container">

          <h5 class="w3-opacity"><b>{{$post->body}}</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{$post->user->name}} on {{$post->created_at->toFormattedDateString()}} - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <hr>
        </div>

      </div>

    <!-- End Right Column -->
    </div>  