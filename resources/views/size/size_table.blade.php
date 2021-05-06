@extends('layouts.master')
@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
  <div class="container">
    <h2>Size Table</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($sizes as $size)
            <tr>
            <th scope="row">{{ $loop->index+1 }}</th>
            <td>{{ $size->name }}</td>
            <td>
                <a class="btn btn-outline-primary " href="{{route('size.edit',['id' => $size->id])}}">
                Edit
                </a>
            </td>
            <td>
                <a class="btn btn-outline-primary " href="{{route('size.delete',['id' => $size->id])}}">
                Delete
                </a>
            </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
    <a class="btn btn-outline-primary " href="{{route('size.edit',['id' => null ])}}">
        + Add Size
    </a>
  </div>

@endsection
