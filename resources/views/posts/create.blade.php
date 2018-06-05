@extends('layouts.app')

@section('content')
<h1>CREATE</h1>

<form method="post" action="/posts">
  <input type="text" name="title" placeholder="enter title">
  {{csrf_field()}}
  <input type="submit" name="submit">

</form>
@endsection
@section('footer')
@endsection
