@extends('main')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Contact Me</h1>
      <hr>
      <form class="" action="index.html" method="post">
        <div class="form-group">
          <label for="email" name="email">Email :</label>
          <input id="email" type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="subject" name="subject">Subject :</label>
          <input id="subject" type="text" name="subject" class="form-control">
        </div>
        <div class="form-group">
          <label for="message" name="message">Message :</label>
          <textarea name="message" class="form-control"></textarea>
        </div>

        <input type="submit" name="" value="Send Message" class="btn btn-success">
      </form>
    </div>
</div>
@endsection
