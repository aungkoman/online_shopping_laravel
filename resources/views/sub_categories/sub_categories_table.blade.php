@extends('layouts.master')
@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
  <div class="container">
    <h2>Sub Category Table</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($sub_categories as $sub_cat)
            <tr>
            <th scope="row">{{ $loop->index+1 }}</th>
            <td>{{ $sub_cat->name }}</td>
             <td>{{ $sub_cat->category->name }}</td>
            <td>
                <a class="btn btn-outline-primary " href="{{route('sub_categories.edit',['id' => $sub_cat->id])}}">
                Edit
                </a>
            </td>
            <td>
                <a class="btn btn-outline-primary " href="{{route('sub_categories.delete',['id' => $sub_cat->id])}}">
                Delete
                </a>
            </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    <a class="btn btn-outline-primary " href="{{route('sub_categories.edit',['id' => null ])}}">
        + Add Sub Category
    </a>
  </div>

@endsection
