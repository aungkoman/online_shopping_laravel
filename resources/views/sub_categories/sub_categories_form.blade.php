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
                <div class="card-header">{{ __('Sub Category Form') }}</div>

                <div class="card-body">
                  <form action="{{route('sub_categories.insert', ['id' => $sub_categories->id ])}}" method="post">
                        @csrf
                        <div class="form-group" style="display:none">
                          <label for="id">ID</label>
                          <input type="number" name="id" class="form-control" id="id" placeholder="category ID" value="{{ $sub_categories->id }}">
                        </div>

                        <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                          <div class="col-md-6">
                              <input  type="text" name="name" id="name" placeholder="Category Name"  value="{{ $sub_categories->name }}" class="form-control" required autofocus>
                          </div>
                        </div>

                      <div class="form-group row">
                          <label for="categories" class="col-md-4 col-form-label text-md-right">{{ __('Categories') }}</label>
                          <div class="col-md-6">
                              <select name="category_id" class="form-control" id="category">
                                  @foreach ($categories as $category)
                                      <option value="{{ $category->id }}"
                                              @if ( $sub_categories->category?->id == $category->id)
                                              selected
                                          @endif
                                      >
                                          {{ $category->name }}
                                      </option>
                                  @endforeach
                              </select>
                          </div>
                      </div>



                      <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save Category') }}
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
