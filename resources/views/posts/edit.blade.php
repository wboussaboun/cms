@extends('layouts.app')

@section('content')
<h1>EDIT</h1>
<form method="post" action="/posts/{{$post->id}}">


  <input type="hidden" name="_method" value="PUT">
  <input type="text" name="title" placeholder="enter title" value="{{$post->title}}">
  {{csrf_field()}}
  <input type="submit" name="submit">

</form>

<h1>DESTROY</h1>
<form method="post" action="/posts/{{$post->id}}">


  <input type="hidden" name="_method" value="DELETE">
  {{csrf_field()}}
  <input type="submit" name="delete" value="delete">

</form>
@endsection
@section('footer')
@endsection
