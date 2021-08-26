@extends('layouts.master')


@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Goods Order Form') }}</div>

                <div class="card-body">
                  <form action="{{route('goods_order.insert', ['id' => $goods_order->id ])}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group" style="display:none">
                          <label for="id">ID</label>
                          <input type="number" name="id" class="form-control" id="id" placeholder="Goods Order ID" value="{{ $goods_order->id }}">
                        </div>
                        


                        <div class="form-group row">
                          <label for="mmuser_id" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                          <div class="col-md-6">
                              <input  type="number" name="mmuser_id" id="mmuser_id" placeholder="Username"  value="{{ $goods_order->mmuser->id }}" class="form-control" required autofocus>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="payment_address" class="col-md-4 col-form-label text-md-right">{{ __('Payment Address') }}</label>
                          <div class="col-md-6">
                              <textarea name="payment_address"  class="form-control" id="payment_address" rows="3" placeholder="Payment Address"  required autofocus>{{ $goods_order->payment_address }}</textarea>
                          </div>
                        </div>
                        


                        <div class="form-group row">
                            <label for="order_status_id" class="col-md-4 col-form-label text-md-right">{{ __('Order Status') }}</label>
                            <div class="col-md-6">    
                              <select name="order_status_id" class="form-control" id="order_status_id">
                                @foreach ($order_statuses as $order_status)
                                  <option value="{{ $order_status->id }}" 
                                      @if ($order_status->id == $goods_order->order_status_id)
                                        selected
                                      @endif
                                    >
                                    {{ $order_status->name }}
                                  </option>
                                @endforeach
                              </select>
                             </div>
                          </div>
                        


                          <!-- order item စာရင်း -->
                          <h3>Order Item List</h3>
                          <table border="1px">
                              <thead>
                                <th>goods_id</th>
                                <th>color_id</th>
                                <th>size_id</th>
                                <th>quantity</th>
                                <th>price</th>
                                <th>cost</th>
                                <th>goods_order_id</th>
                              </thead>
                              <tbody>
                                @foreach ($goods_order->order_items as $order_item)
                                    <tr>
                                        <td><input type="number" name="goods_id[]" value="{{ $order_item->goods_id }}" placeholder="goods_id" /></td>
                                        <td><input type="number" name="color_id[]" value="{{ $order_item->color_id }}" placeholder="color_id" /></td>
                                        <td><input type="number" name="size_id[]" value="{{ $order_item->size_id }}" placeholder="size_id" /></td>
                                        <td><input type="number" name="quantity[]" value="{{ $order_item->quantity }}" placeholder="quantity" /></td>
                                        <td><input type="number" name="price[]" value="{{ $order_item->price }}" placeholder="price" /></td>
                                        <td><input type="number" name="cost[]" value="{{ $order_item->cost }}" placeholder="cost" /></td>
                                        <td><input type="number" name="goods_order_id[]" value="{{ $order_item->goods_order_id }}" placeholder="goods_order_id" /></td>
                                    </tr>
                                @endforeach
                              </tbody>
                          </table>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save Goods Order') }}
                                </button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection