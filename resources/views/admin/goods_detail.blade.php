@extends('layouts.master')

<style>
  span.span-block{
    display: inline-block;
    margin: 5px;
    padding: 5px;
    border : 1px solid green;
    border-radius: 10px;
  }
  </style>

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

  <div class="container">
    <h2>Goods Detail</h2>
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
            <td>{{ $goods->name }}</td>
          </tr>
          <tr>
            <th scope="row">Description</th>
            <td>{{ $goods->description }}</td>
          </tr>
          <tr>
            <th scope="row">Stock</th>
            <td>{{ $goods->stock }}</td>
          </tr>
          <tr>
            <th scope="row">Price Original</th>
            <td>{{ $goods->price_original }}</td>
          </tr>
          <tr>
            <th scope="row">Price</th>
            <td>{{ $goods->price }}</td>
          </tr>
          <tr>
            <th scope="row">Available Colors</th>
            <td>
              @foreach ($goods->colors as $color)
                  <span class="span-block">{{$color->name}}</span>
              @endforeach  
            </td>
          </tr>
          <tr>
            <th scope="row">Available Sizes</th>
            <td>
              @foreach ($goods->sizes as $sizes)
                  <span class="span-block">{{$sizes->name}}</span>
              @endforeach  
            </td>
          </tr>
          <tr>
            <th scope="row">Category</th>
            <td>
              @foreach ($goods->categories as $category)
                  <span class="span-block">{{$category->name}}</span>
              @endforeach  
            </td>
          </tr>
          <tr>
            <th scope="row">Photos</th>
            <td>
              @foreach ($goods->photos as $photo)
                  <span class="span-block">
                    <img src="{{$photo->name}}" /></span>
              @endforeach  
            </td>
          </tr>

        </tbody>
      </table>
      <a class="btn btn-outline-primary " href="{{route('goods.edit',[ 'id' => $goods->id ])}}">
         Edit Goods
      </a>

      <a class="btn btn-outline-primary " href="{{route('goods.delete',[ 'id' => $goods->id ])}}">
         Delete Goods
      </a>

      <a class="btn btn-outline-primary " href="{{route('goods.index')}}">
        >> Goods List
      </a>
  </div>
@endsection
