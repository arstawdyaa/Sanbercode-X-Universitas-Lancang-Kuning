@extends('layouts.master')

@section('title')
    Detail Cast
@endsection

@section('content')
    <p>Name : {{$cast->name}}</p>
    <p>Age : {{$cast->age}}</p>
    <p>Bio : {{$cast->bio}}</p>

    <a href="/cast" class="btn btn-sm btn-secondary">Previous</a>
@endsection