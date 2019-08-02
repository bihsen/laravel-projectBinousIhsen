@extends('layouts.myTemplate')
@section('title', 'Book Page')
@section('content')


<h1>welcome to book page</h1>
<p>This is the book {{$id}}</p>

@if(!empty($authors))
<ul>

    @foreach($authors as $author)
    <li>Name: {{$author}} </li>
    @endforeach

</ul>

@endif
@endsection




