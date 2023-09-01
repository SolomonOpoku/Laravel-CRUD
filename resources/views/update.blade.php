@extends('layouts.indexLayout')

@section('content')

<form action="{{url('/formupdate/'.$info -> id)}}" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" name="name" value="{{$info -> name}}">
    <br>
    <label>Age</label>
    <input type="text" name="age" value="{{$info -> age}}">
    <br>
    <label>Date of Birth</label>
    <input type="date" name="DOB" value="{{$info -> DOB}}">
    <br><br><br>
    <input type="submit" value="Add">
</form>