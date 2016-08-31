@extends('layouts.main')
@section('content')


<div class="col_9">
     
    <h3>Contact TODOParrot</h3>

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
    
@if(Session::has('message'))
    <div class="notice success">
      {{Session::get('message')}}
    </div>
@endif

{!! Form::open(array('url' => 'contact/store', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('Your Name') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your E-mail Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your e-mail address')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your Message') !!}
    {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your message')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Contact Us!', 
      array('class'=>'medium green')) !!}
</div>
{!! Form::close() !!}
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
	
	<div class="col_3">
	<h4>Column</h4>
	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
	magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis</p>
	</div>
	
	<div class="col_3">
	<h4>Column</h4>
	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
	magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis</p>
	</div>
	
	<div class="col_3">
	<h4>Column</h4>
	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
	magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis</p>
	</div>
@stop