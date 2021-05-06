@extends('layouts.master')


@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
  <div class="container">
    <h2>Goods Table</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Stock</th>
        <th scope="col">Price</th>
        <th scope="col">Edit</th>
        <th scope="col">Detail</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($goods as $goodsObject)
        <tr>
          <th scope="row">{{ $loop->index+1 }}</th>
          <td>{{ $goodsObject->name }}</td>
          <td>{{ $goodsObject->stock }}</td>
          <td>{{ $goodsObject->price }}</td>
          <td>
            <a class="btn btn-outline-primary " href="{{route('goods.edit',['id' => $goodsObject->id])}}">
              Edit
            </a>
          </td>
          <td>
            <a class="btn btn-outline-primary " href="{{route('goods.detail',['id' => $goodsObject->id])}}">
              Detail
            </a>
          </td>
          <td>
            <a class="btn btn-outline-primary " href="{{route('goods.delete',['id' => $goodsObject->id])}}">
              Delete
            </a>
          </td>
        </tr>
      @endforeach
      
    </tbody>
  </table>
  <a class="btn btn-outline-primary " href="{{route('goods.edit',['id' => null ])}}">
    + Add Goods
  </a>
  </div>

@endsection
