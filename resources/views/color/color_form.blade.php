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
                <div class="card-header">{{ __('Color Form') }}</div>

                <div class="card-body">
                  <form action="{{route('color.insert', ['id' => $color->id ])}}" method="post">
                        @csrf
                        <div class="form-group" style="display:none">
                          <label for="id">ID</label>
                          <input type="number" name="id" class="form-control" id="id" placeholder="Color ID" value="{{ $color->id }}">
                        </div>
                        
                        <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                          <div class="col-md-6">
                              <input  type="text" name="name" id="name" placeholder="Color Name"  value="{{ $color->name }}" class="form-control" required autofocus>
                          </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save Color') }}
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