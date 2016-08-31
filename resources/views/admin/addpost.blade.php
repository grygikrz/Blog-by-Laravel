@extends('admin.layouts.main')
@section('content')


<div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <i class="glyphicon glyphicon-wrench pull-right"></i>
                                <h4>Post Request</h4>
                            </div>
                        </div>

@if(Session::has('message'))
    <div class="alert alert-success">
      {{Session::get('message')}}
    </div>
@endif

<div class="panel-body">

{!! Form::open(array('url' => 'admin/addpost/store', 'class' => 'form form-vertical')) !!}

 <div class="control-group">
    {!! Form::label('Name') !!}
     <div class="controls">
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name')) !!}
    </div>
</div>

 <div class="control-group">
    {!! Form::label('Category') !!}
     <div class="controls">  
    {!! Form::select('category_id', $categories,'2', array('required', 'class'=>'form-control')) !!}
    </div>
</div>

 <div class="control-group">
    {!! Form::label('Message') !!}
     <div class="controls">
    {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your message')) !!}
    </div>              
</div>

 <div class="control-group">
 <label></label>
    <div class="controls">
    {!! Form::submit('Contact Us!', 
      array('class'=>'btn btn-primary')) !!}
    </div>
</div>
{!! Form::close() !!}
    </div>
</div>
@stop