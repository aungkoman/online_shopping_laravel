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
                <div class="card-header">{{ __('Goods Form') }}</div>

                <div class="card-body">
                  <form action="{{route('goods.insert', ['id' => $goods->id ])}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group" style="display:none">
                          <label for="id">ID</label>
                          <input type="number" name="id" class="form-control" id="id" placeholder="Goods ID" value="{{ $goods->id }}">
                        </div>



                        <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                          <div class="col-md-6">
                              <input  type="text" name="name" id="name" placeholder="Goods Name"  value="{{ $goods->name }}" class="form-control" required autofocus>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                          <div class="col-md-6">
                              <textarea name="description"  class="form-control" id="description" rows="3" placeholder="Goods Description"  required autofocus>{{ $goods->description }}</textarea>

                          </div>
                        </div>



                        <div class="form-group row">
                          <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>
                          <div class="col-md-6">
                              <input  type="number" name="stock" id="stock" placeholder="Goods Stock"  value="{{ $goods->stock }}" class="form-control" required autofocus>
                          </div>
                        </div>



                        <div class="form-group row">
                          <label for="price_original" class="col-md-4 col-form-label text-md-right">{{ __('Normal Price') }}</label>
                          <div class="col-md-6">
                              <input  type="number" name="price_original" id="price_original" placeholder="Goods Price Original"  value="{{ $goods->price_original }}" class="form-control" required autofocus>
                          </div>
                        </div>



                        <div class="form-group row">
                          <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Discount Price') }}</label>
                          <div class="col-md-6">
                              <input  type="number" name="price" id="price" placeholder="Goods Price"  value="{{ $goods->price }}" class="form-control" required autofocus>
                          </div>
                        </div>



                        <div class="form-group row">
                          <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Available Colors') }}</label>
                          <div class="col-md-6">
                            <select name="colors[]" multiple class="form-control" id="colors">
                              @foreach ($colors as $color)
                                <option value="{{ $color->id }}"
                                    @if (in_array($color->id, array_column(json_decode(json_encode($goods->colors),true), 'id')))
                                      selected
                                    @endif
                                  >
                                  {{ $color->name }}
                                </option>
                              @endforeach
                            </select>
                           </div>
                        </div>





                        <div class="form-group row">
                          <label for="size" class="col-md-4 col-form-label text-md-right">{{ __('Available Sizes') }}</label>
                          <div class="col-md-6">
                            <select name="sizes[]" multiple class="form-control" id="size">
                              @foreach ($sizes as $size)
                                <option value="{{ $size->id }}"
                                    @if (in_array($size->id, array_column(json_decode(json_encode($goods->sizes),true), 'id')))
                                      selected
                                    @endif
                                  >
                                  {{ $size->name }}
                                </option>
                              @endforeach
                            </select>
                           </div>
                        </div>





                        <div class="form-group row">
                          <label for="categories" class="col-md-4 col-form-label text-md-right">{{ __('Categories') }}</label>
                          <div class="col-md-6">
                            <select name="category" multiple class="form-control" id="category">
                              @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    @if ( $goods->sub_category?->category->id == $category->id)
                                      selected
                                    @endif
                                  >
                                  {{ $category->name }}
                                </option>
                              @endforeach
                            </select>
                           </div>
                        </div>


                      <div class="form-group row">
                          <label for="categories" class="col-md-4 col-form-label text-md-right">{{ __('Sub Category') }}</label>
                          <div class="col-md-6">
                              <select name="sub_category_id" class="form-control" id="sub_category">
                                  @foreach ($sub_categories as $sub_category)
                                      <option value="{{ $sub_category->id }}"
                                          @if ( $sub_category->id == $goods->sub_category_id)
                                              selected
                                          @endif
                                      >
                                          {{ $sub_category->name }}
                                      </option>
                                  @endforeach
                              </select>
                          </div>
                      </div>






                      <div class="form-group row">
                          <label for="categories" class="col-md-4 col-form-label text-md-right">{{ __('Brand') }}</label>
                          <div class="col-md-6">
                            <select name="brand_id" class="form-control" id="categories">
                              @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}"
                                    @if ($brand->id == $goods->brand?->id)
                                      selected
                                    @endif
                                  >
                                  {{ $brand->name }}
                                </option>
                              @endforeach
                            </select>
                           </div>
                        </div>


                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Goods Unit') }}</label>
                          <div class="col-md-6">
                              <input  type="text" name="goods_unit" id="goods_unit" placeholder="Goods Unit"  value="{{ $goods->goods_unit }}" class="form-control" required autofocus>
                          </div>
                      </div>


                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Goods Code') }}</label>
                          <div class="col-md-6">
                              <input  type="text" name="goods_code" id="goods_unit" placeholder="Goods Code"  value="{{ $goods->goods_code }}" class="form-control" required autofocus>
                          </div>
                      </div>

                        <div class="form-group row">
                          <label for="photos" class="col-md-4 col-form-label text-md-right">{{ __('Photos') }}</label>
                          <div class="col-md-6">
                              <input  type="file" multiple name="photos[]" id="photos" placeholder="Goods Photos" class="form-control" autofocus>
                          </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save Goods') }}
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
