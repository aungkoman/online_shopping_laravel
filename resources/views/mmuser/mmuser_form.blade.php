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
                <div class="card-header">{{ __('User Form') }}</div>

                <div class="card-body">
                  <form action="{{route('mmuser.insert', ['id' => $mmuser->id ])}}" method="post">
                        @csrf
                        <div class="form-group" style="display:none">
                          <label for="id">ID</label>
                          <input type="number" name="id" class="form-control" id="id" placeholder="mmuser ID" value="{{ $mmuser->id }}">
                        </div>
                        


                        <div class="form-group row">
                          <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                          <div class="col-md-6">
                              <input  type="text" name="username" id="username" placeholder="mmuser Name"  value="{{ $mmuser->username }}" class="form-control" required autofocus>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                          <div class="col-md-6">
                              <input  type="password" name="password" id="password" placeholder="password"  value="{{ $mmuser->password }}" class="form-control" required autofocus>
                          </div>
                        </div>
                        


                        <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                          <div class="col-md-6">
                              <input  type="email" name="email" id="email" placeholder="user email"  value="{{ $mmuser->email }}" class="form-control" autofocus>
                          </div>
                        </div>
                        


                        <div class="form-group row">
                          <label for="phone_no" class="col-md-4 col-form-label text-md-right">{{ __('Phone No') }}</label>
                          <div class="col-md-6">
                              <input  type="text" name="phone_no" id="phone_no" placeholder="Phone No"  value="{{ $mmuser->phone_no }}" class="form-control" autofocus>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                          <div class="col-md-6">    
                            <select name="role_id" class="form-control" id="role_id">
                              @foreach ($roles as $role)
                                <option value="{{ $role->id }}" 
                                    @if (in_array($role->id, array_column(json_decode(json_encode($roles),true), 'id')))
                                      selected
                                    @endif
                                  >
                                  {{ $role->name }}
                                </option>
                              @endforeach
                            </select>
                           </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save User') }}
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