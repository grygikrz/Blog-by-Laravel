@extends('layouts.main')
@section('content')


<div class="col_9">
    
	<h3>{{$post->title}}</h3>
	<img class="align-left" src="{{ $post->image }}" width="180" height="150" />
    {{$post->content}}

    <h3>Comments</h3>
    @foreach($comments as $comment)

    <div class="col_6 visible column" style="padding:10px">
    <p>Author: {{$comment->author}}</p>
    <hr style="margin: 0 0 30px 0" /> 
    {{$comment->comment}}</div>
    @endforeach
	</div>

	<div class="col_3">
	<h5>Icon List</h5>
	<ul class="icons">
	<li><i class="fa fa-li fa-check"></i> Apple</li>
	<li><i class="fa fa-li fa-check"></i> Banana</li>
	<li><i class="fa fa-li fa-check"></i> Orange</li>
	<li><i class="fa fa-li fa-check"></i> Pear</li>
	</ul>
	
	<h5>Sample Icons</h5>
	<i class="fa fa-twitter-square fa-3x"></i> 
	<i class="fa fa-facebook-square fa-3x"></i>
	<i class="fa fa-linkedin-square fa-3x"></i>
	<i class="fa fa-github-square fa-3x"></i>
	
	<h5>Button w/Icon</h5>
	<a class="button orange small" href="#"><i class="fa fa-rss"></i> RSS</a>
	</div>
	
	<hr />

	<div class="col_3">
	<h4>Column</h4>
	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
	magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis</p>
	</div>


@stop