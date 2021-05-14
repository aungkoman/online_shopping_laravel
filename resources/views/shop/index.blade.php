@extends('layouts.master')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

  <div class="container">
    @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
            @endif
            
    <h2>List Goods</h2>
    <div class="row">
        @foreach ($goods as $goodsObject)
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card">
              <div class="card-header">{{ $goodsObject->name }}</div>
              <div class="card-body">
                @if (count($goodsObject->photos) == 0)
                  <img src="http://localhost/images/goods1.jpg" class="w-100" />
                @else
                  <img src="{{ url('uploads/').'/'.$goodsObject->photos[0]->name }}" class="w-100 mb-3" />
                @endif
                  <span>Price : <span class="text-primary">{{$goodsObject->price}}</span> Kyats</span>
                  <a class="float-right" href="{{route('goods.detail',['id' => $goodsObject->id])}}">
                    Show Detail
                  </a>
              </div>
            </div>
          </div>
        @endforeach
        
      
    </div>
  </div>
@endsection
