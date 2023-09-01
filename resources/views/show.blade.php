@extends('layouts.indexLayout')

@section('content')

<h1>Lists</h1>
<a href="/forms">Add</a>
@foreach($info as $info)
<ul>
<li>{{$info -> name}}</li>
<li>{{$info -> age}}</li>
<li>{{$info -> DOB}}</li>
<li><a href="{{'/formupdate/'.$info -> id}}"><button>Update</button></a></li>
<li><a href="{{url('/formdelete/'.$info -> id)}}"><button>Delete</button></a></li>
</ul>

@endforeach