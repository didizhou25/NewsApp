@extends('layouts.app')

@section('content')
   <h1> Posts </h1> 
   @if(count($posts) > 0)
    @foreach ($posts as $news)
        <div class="well">
        <div class="row">
<div class="col-md-4 col-sm-4">
<img style="width:45%" src="/storage/cover_images/{{$news->cover_image}}">
</div>
<div class="col-md-8 col-sm-8">
<h3><a href="/posts/{{$news->id}}">{{$news->title}}</a></h3>
        <p>{!!$news->body!!}</p>
        <small> Written on {{$news->created_at}} </small>
</div>  
</div>
</div>
    @endforeach
            {{$posts->links()}}
    @else   
    <p> No posts found</p>
    @endif

@endsection