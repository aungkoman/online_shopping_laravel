@extends('layouts.master')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

  <div class="container">
    <h2>User Detail</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Name</th>
            <td>{{ $mmuser->username }}</td>
          </tr>
          <tr>
            <th scope="row">Role</th>
            <td>{{ $mmuser->role->name }}</td>
          </tr>
          <tr>
            <th scope="row">Email</th>
            <td>{{ $mmuser->email }}</td>
          </tr>
          <tr>
            <th scope="row">Phone No</th>
            <td>{{ $mmuser->phone_no }}</td>
          </tr>
          <tr>
            <th scope="row">Created Date</th>
            <td>{{ $mmuser->created_at }}</td>
          </tr>
          <tr>
            <th scope="row">Updated Date</th>
            <td>{{ $mmuser->updated_at }}</td>
          </tr>
        </tbody>
      </table>
      <a class="btn btn-outline-primary " href="{{route('mmuser.edit',[ 'id' => $mmuser->id ])}}">
         Edit User
      </a>

      <a class="btn btn-outline-primary " href="{{route('mmuser.delete',[ 'id' => $mmuser->id ])}}">
         Delete User
      </a>

      <a class="btn btn-outline-primary " href="{{route('mmuser.index')}}">
        >> User List
      </a>
  </div>
@endsection
