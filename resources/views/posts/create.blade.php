@extends('main')
@section('title', '| Create New Post')
@section('stylesheets')
  {!! Html::style('css/parsley.css') !!}
@endsection
@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Create New Posts</h1>
      <hr>

      {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
        {{ Form::label('title', 'Title :') }}
        {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
        <br>
        {{ Form::label('body', "Post Body :") }}
        {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}
        <br>
        {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block')) }}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
@section('scripts')
  {!! Html::script('js/parsley.min.js') !!}
@endsection
