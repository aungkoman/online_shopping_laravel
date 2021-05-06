@extends('layouts.master')
@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
  <div class="container">
    <h2>Category Table</h2>
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
        @foreach ($categories as $category)
            <tr>
            <th scope="row">{{ $loop->index+1 }}</th>
            <td>{{ $category->name }}</td>
            <td>
                <a class="btn btn-outline-primary " href="{{route('category.edit',['id' => $category->id])}}">
                Edit
                </a>
            </td>
            <td>
                <a class="btn btn-outline-primary " href="{{route('category.delete',['id' => $category->id])}}">
                Delete
                </a>
            </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>
    <a class="btn btn-outline-primary " href="{{route('category.edit',['id' => null ])}}">
        + Add Category
    </a>
  </div>

@endsection
