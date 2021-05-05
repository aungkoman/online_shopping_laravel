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
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>
              <a class="btn btn-outline-primary " href="{{route('goods.detail',['id' => 1])}}">
                >> Goods Detail
              </a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>
              <a class="btn btn-outline-primary " href="{{route('goods.detail',['id' => 2])}}">
                >> Goods Detail
              </a>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>
              <a class="btn btn-outline-primary " href="{{route('goods.detail',['id' => 3])}}">
                >> Goods Detail
              </a>
            </td>
          </tr>
        </tbody>
      </table>
      <a class="btn btn-outline-primary " href="{{route('goods.edit',['id' => 0])}}">
        + Add Goods
      </a>
      <script src="{{url('js/app.js')}}"></script>
  </body>
  </html>