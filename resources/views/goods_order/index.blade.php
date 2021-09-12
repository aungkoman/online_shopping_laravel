@extends('layouts.master')


@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
  <div class="container">
    <h2>Goods Order Table</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">User</th>
        <th scope="col">Order Datetime</th>
        <th scope="col">Order Status</th>
        <th scope="col">Number of Items</th>
        <th scope="col">Edit</th>
        <th scope="col">Detail</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($goods_orders as $goods_order)
        <tr>
          <th scope="row">{{ $loop->index+1 }}</th>
          <td>{{ $goods_order->mmuser->username }}</td>
          <td>{{ $goods_order->created_at }}</td>
          <td>{{ $goods_order->order_status->name }}</td> <!-- ဒီနေရာမှာ စုစုပေါင်းကို လိုချင်တာ , array တစ်ခုပေးလိုက်ပြီး သတ်မှတ်တဲ့ key တန်ဖိုးတွေ အကုန်ပေါင်းပေးတာမျိုး -->
          <td>{{ count($goods_order->order_items) }}</td>
          <td>
            <a class="btn btn-outline-primary " href="{{route('goods_order.edit',['id' => $goods_order->id])}}">
              Edit
            </a>
          </td>
          <td>
            <a class="btn btn-outline-primary " href="{{route('goods_order.detail',['id' => $goods_order->id])}}">
              Detail
            </a>
          </td>
          <td>
            <a class="btn btn-outline-primary " href="{{route('goods_order.delete',['id' => $goods_order->id])}}">
              Delete
            </a>
          </td>
        </tr>
      @endforeach

    </tbody>
  </table>
{{--  <a class="btn btn-outline-primary " href="{{route('goods_order.edit',['id' => null ])}}">--}}
{{--    + Add Goods Order--}}
{{--  </a>--}}
  </div>

@endsection
