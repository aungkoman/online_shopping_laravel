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
    <form action="{{route('goods.insert')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="id">ID</label>
          <input type="number" name="id" class="form-control" id="id" placeholder="Goods ID">
        </div>

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Goods Name">
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description"  class="form-control" id="description" rows="3"></textarea>
        </div>

        <div class="form-group">
          <label for="price_original">Price Original</label>
          <input type="number" name="price_original" class="form-control" id="price_original" placeholder="Goods Price Original">
        </div>

        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" name="price" class="form-control" id="price" placeholder="Goods Price">
        </div>

        <div class="form-group">
          <label for="stock">Stock</label>
          <input type="number" name="stock" class="form-control" id="stock" placeholder="Goods Stock">
        </div>

        <div class="form-group">
          <label for="colors">Available Colors</label>
          <select name="colors[]" multiple class="form-control" id="colors">
            <option value="1">Red</option>
            <option value="2">Green</option>
            <option value="3">Blue</option>
          </select>
        </div>

        <div class="form-group">
          <label for="sizes">Available Sizes</label>
          <select name="sizes[]" multiple class="form-control" id="sizes">
            <option value="1">Small</option>
            <option value="2">Medium</option>
            <option value="3">XXL</option>
          </select>
        </div>

        <div class="form-group">
          <label for="categories">Categories</label>
          <select name="categories[]" multiple class="form-control" id="categories">
            <option value="1">Category 1</option>
            <option value="2">Category 2</option>
            <option value="3">Category 3</option>
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