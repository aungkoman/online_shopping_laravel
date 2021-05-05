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
    <h2>Goods Detail</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
          </tr>
        </tbody>
      </table>
      <a class="btn btn-outline-primary " href="{{url('goods/form')}}">
         Edit Goods
      </a>

      <a class="btn btn-outline-primary " href="{{url('admin')}}">
        >> Goods List
      </a>
      <script src="{{url('js/app.js')}}"></script>
  </body>
  </html>