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
    <p>
      {{ json_encode($goods) }}
    </p>
    <ul>
      @foreach ($goods as $goodsObject)
          <li>{{ $goodsObject->Colors }}</li>
      @endforeach
    </ul> 
    <h2>Goods Table</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Stock</th>
            <th scope="col">Price</th>
            <th scope="col">Edit</th>
            <th scope="col">Detail</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($goods as $goodsObject)
            <tr>
              <th scope="row">{{ $loop->index+1 }}</th>
              <td>{{ $goodsObject->name }}</td>
              <td>{{ $goodsObject->stock }}</td>
              <td>{{ $goodsObject->price }}</td>
              <td>
                <a class="btn btn-outline-primary " href="{{route('goods.edit',['id' => $goodsObject->id])}}">
                  Edit
                </a>
              </td>
              <td>
                <a class="btn btn-outline-primary " href="{{route('goods.detail',['id' => $goodsObject->id])}}">
                  Detail
                </a>
              </td>
            </tr>
          @endforeach
          <tr>
            <th scope="row">1</th>
            <td>Name</td>
            <td>Quantity</td>
            <td>Price</td>
            <td>
              <a class="btn btn-outline-primary " href="{{route('goods.edit',['id' => 0])}}">
                Edit
              </a>
            </td>
            <td>
              <a class="btn btn-outline-primary " href="{{route('goods.detail',['id' => 1])}}">
                Detail
              </a>
            </td>
          </tr>
        </tbody>
      </table>
      <a class="btn btn-outline-primary " href="{{route('goods.edit',['id' => null ])}}">
        + Add Goods
      </a>
      <script src="{{url('js/app.js')}}"></script>
  </body>
  </html>