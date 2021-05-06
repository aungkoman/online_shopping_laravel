@extends('layouts.master')


@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
  <div class="container">
    <h2>Users Table</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Role</th>
        <th scope="col">Edit</th>
        <th scope="col">Detail</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($mmusers as $mmuser)
        <tr>
          <th scope="row">{{ $loop->index+1 }}</th>
          <td>{{ $mmuser->username }}</td>
          <td>{{ ($mmuser->role == null ) ? null : $mmuser->role->name }}</td>
          <td>
            <a class="btn btn-outline-primary " href="{{route('mmuser.edit',['id' => $mmuser->id])}}">
              Edit
            </a>
          </td>
          <td>
            <a class="btn btn-outline-primary " href="{{route('mmuser.detail',['id' => $mmuser->id])}}">
              Detail
            </a>
          </td>
          <td>
            <a class="btn btn-outline-primary " href="{{route('mmuser.delete',['id' => $mmuser->id])}}">
              Delete
            </a>
          </td>
        </tr>
      @endforeach
      
    </tbody>
  </table>
  <a class="btn btn-outline-primary " href="{{route('mmuser.edit',['id' => null ])}}">
    + Add User
  </a>
  </div>

@endsection
