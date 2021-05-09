@extends('layouts.master')
@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                   {{$errors->first()}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
            @endif
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session()->pull('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Login Form') }}</div>

                <div class="card-body">
                  <form action="{{route('shop.login')}}" method="post">
                        @csrf
                        
                        <div class="form-group row">
                          <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                          <div class="col-md-6">
                              <input  type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                          <div class="col-md-6">
                              <input  type="password" name="password" id="password" placeholder="Password" class="form-control" required autofocus>
                          </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
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