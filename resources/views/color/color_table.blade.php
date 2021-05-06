@extends('layouts.master')
@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
  <div class="container">
    <h2>Color Table</h2>
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
        @foreach ($colors as $color)
            <tr>
            <th scope="row">{{ $loop->index+1 }}</th>
            <td>{{ $color->name }}</td>
            <td>
                <a class="btn btn-outline-primary " href="{{route('color.edit',['id' => $color->id])}}">
                Edit
                </a>
            </td>
            <td>
                <a class="btn btn-outline-primary " href="{{route('color.delete',['id' => $color->id])}}">
                Delete
                </a>
            </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
    <a class="btn btn-outline-primary " href="{{route('color.edit',['id' => null ])}}">
        + Add Colors
    </a>
  </div>

@endsection
