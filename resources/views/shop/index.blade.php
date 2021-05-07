@extends('layouts.master')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

  <div class="container">
    <h2>List Goods</h2>
    <div class="row">
        
        <div class="col-lg-4 col-md-6 mt-3">
          <div class="card">
            <div class="card-header">Goods Name</div>
            <div class="card-body">
                <img src="http://localhost/images/goods1.jpg" class="w-100" />
                <span>Price : 1200 Kyats</span>
                <a class="" href="{{route('goods.detail',['id' => 1])}}">
                  Show Detail
                </a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mt-3">
          <div class="card">
            <div class="card-header">Goods Name</div>
            <div class="card-body">
                <img src="http://localhost/images/goods2.jpg" class="w-100" />
                <span>Price : 1200 Kyats</span>
                <a class="" href="{{route('goods.detail',['id' => 1])}}">
                  Show Detail
                </a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mt-3">
          <div class="card">
            <div class="card-header">Goods Name</div>
            <div class="card-body">
                <img src="http://localhost/images/goods3.jpg" class="w-100" />
                <span>Price : 1200 Kyats</span>
                <a class="" href="{{route('goods.detail',['id' => 1])}}">
                  Show Detail
                </a>
            </div>
          </div>
        </div>
      
    </div>
  </div>
@endsection