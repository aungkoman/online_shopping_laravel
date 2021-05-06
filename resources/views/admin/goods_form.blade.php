<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}"/> 

  </head>
  <body>
    <h2>Goods Form</h2>
    <form action="{{route('goods.insert', ['id' => $goods->id ])}}" method="post">
        @csrf
        <div class="form-group">
          <label for="id">ID</label>
          <input type="number" name="id" class="form-control" id="id" placeholder="Goods ID" value="{{ $goods->id }}">
        </div>

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Goods Name"  value="{{ $goods->name }}">
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description"  class="form-control" id="description" rows="3">{{ $goods->description }}</textarea>
        </div>

        <div class="form-group">
          <label for="price_original">Price Original</label>
          <input type="number" name="price_original" class="form-control" id="price_original" placeholder="Goods Price Original"  value="{{ $goods->price_original }}">
        </div>

        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" name="price" class="form-control" id="price" placeholder="Goods Price"  value="{{ $goods->price }}">
        </div>

        <div class="form-group">
          <label for="stock">Stock</label>
          <input type="number" name="stock" class="form-control" id="stock" placeholder="Goods Stock"  value="{{ $goods->stock }}">
        </div>

        <div class="form-group">
          <label for="colors">Available Colors</label>
          

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
            <!--option value="1">Red</option-->
          </select>
        </div>

        <div class="form-group">
          <label for="sizes">Available Sizes</label>
          <select name="sizes[]" multiple class="form-control" id="sizes">
            @foreach ($sizes as $size)
              <option value="{{ $size->id }}" 
                  @if (in_array($size->id, array_column(json_decode(json_encode($goods->sizes),true), 'id')))
                    selected
                  @endif
                >
                {{ $size->name }}
              </option>
            @endforeach
            <!--option value="1">Small</option-->
          </select>
        </div>

        <div class="form-group">
          <label for="categories">Categories</label>
          <select name="categories[]" multiple class="form-control" id="categories">
            @foreach ($categories as $category)
              <option value="{{ $category->id }}" 
                  @if (in_array($category->id, array_column(json_decode(json_encode($goods->categories),true), 'id')))
                    selected
                  @endif
                >
                {{ $category->name }}
              </option>
            @endforeach
            <!--option value="1">Category 1</option-->
          </select>
        </div>

        <div class="form-group">
          <label for="photos">Photos</label>
          <input type="file" multiple name="photos[]" class="form-control" id="photos" placeholder="Goods Photos">
        </div>

      <input type="submit" class="btn btn-outline-primary" value="+ Save Goods" />
        
      
    </form>
      <script src="{{url('js/app.js')}}"></script>
  </body>
  </html>