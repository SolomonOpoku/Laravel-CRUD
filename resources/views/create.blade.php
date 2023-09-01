@extends('layouts.indexLayout')

@section('content')

<form action="/forms" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" name="name">
    <br>
    <label>Age</label>
    <input type="text" name="age">
    <br>
    <label>Date of Birth</label>
    <input type="date" name="DOB">
    <br>
    <input type="file" name="profile_picture">
    <br><br><br>
    <input type="submit" value="Add">
</form>