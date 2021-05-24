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
    <h2>Goods Order Detail</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">User</th>
            <td>{{ $goods_order->mmuser->name }}</td>
          </tr>
          <tr>
            <th scope="row">Order Datetime</th>
            <td>{{ $goods_order->created_at }}</td>
          </tr>
          <tr>
            <th scope="row">Order Item List</th>
            <td>
              @foreach ($goods_order->order_items as $order_item)
                  <span class="span-block">{{$order_item->goods->name}} , {{$order_item->quantity}}</span>
              @endforeach  
            </td>
          </tr>

        </tbody>
      </table>
      <a class="btn btn-outline-primary " href="{{route('goods_order.edit',[ 'id' => $goods_order->id ])}}">
         Edit Goods
      </a>

      <a class="btn btn-outline-primary " href="{{route('goods_order.delete',[ 'id' => $goods_order->id ])}}">
         Delete Goods
      </a>

      <a class="btn btn-outline-primary " href="{{route('goods_order.index')}}">
        >> Goods Order List
      </a>
  </div>
@endsection
