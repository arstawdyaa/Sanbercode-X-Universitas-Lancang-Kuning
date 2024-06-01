@extends('layouts.master')

@section('title')
    Add Cast
@endsection

@section('content')
<form action="/cast" method="post">
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
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label>Age</label>
        <input type="text" class="form-control" name="age">
      </div>
      <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" id="" cols="30" rows="10" class="form-control"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection