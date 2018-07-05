@extends('lay')

@section('ram')
<div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
       
      <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i><a href="/post/{{$post->id}}">  {{$post->title}}</a></h2>
       
      <div class="w3-container">
          <h5 class="w3-opacity"><b>{{$post->body}}</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{$post->created_at->toFormattedDateString()}} - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <hr>
        </div>

        <ul class="comments">

          <div class="list-groups">
            @foreach($post->comment as $comment)
            <hr>
            <li class="list-group-item">
              <strong>{{$comment->created_at->diffForHumans()}} &nbsp</strong>
              {{$comment->body}}
            </li>
            @endforeach
        </ul>
        </div>

        <div class="card">
          <div class="card-block">
            <form action="/posts/{{$post->id}}/comment" method="post">
            {{csrf_field()}}

            <div class="form-group">
              <textarea name="body" id="body" class="form-control" cols="10" rows="2" placeholder="Add comments"></textarea>
            </div>

            <div class="form-group">
              <button type="submit" name="submit" class="form-group btn btn-primary"> POST</button>
            </div>
          </form>

          </div>
        </div>

      </div>
@endsection('ram')