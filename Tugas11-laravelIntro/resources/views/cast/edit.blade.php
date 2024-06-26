@extends('layouts.master')

@section('title')
    Edit Cast
@endsection

@section('content')
<form action="/cast/{{$cast->id}}" method="post">
    {{-- validation --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- form input --}}
    @csrf
    @method('put')
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="name" value="{{$cast-> name}}">
    </div>
    <div class="form-group">
        <label>Age</label>
        <input type="text" class="form-control" name="age" value="{{$cast-> age}}">
      </div>
      <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" id="" cols="30" rows="10" class="form-control">{{$cast-> bio}}</textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection