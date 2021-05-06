@extends('layouts.master')
@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
  <div class="container">
    <h2>Requested data not found!</h2>
    <a href="javascript:history.go(-1)">Go Back</a>
  </div>

@endsection
