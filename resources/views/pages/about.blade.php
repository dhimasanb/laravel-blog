@extends('main')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>About Me</h1>
        <p>{{ $data['fullname'] }}</p>
        <p>email : {{ $data['email'] }}</p>
      </div>
  </div>
@endsection
