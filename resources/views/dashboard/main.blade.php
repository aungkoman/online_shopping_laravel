@extends('layouts.master')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

  <div class="container">
    <h2>Dashboard</h2>
    <div class="row">
      <div class="col-md-6 mt-3">
        <div class="card">
          <div class="card-header">Goods</div>
          <div class="card-body">
            <ul>
              <li>
                <a class="b" href="{{route('goods.index')}}">
                  Goods List
                </a>
              </li>
              <li>
                <a class="" href="{{route('goods.edit')}}">
                  New Goods
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-3">
        <div class="card">
          <div class="card-header">Colors</div>
          <div class="card-body">
            <ul>
              <li>
                <a class="b" href="{{route('color.index')}}">
                  Color List
                </a>
              </li>
              <li>
                <a class="" href="{{route('color.edit')}}">
                  New Color
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-3">
        <div class="card">
          <div class="card-header">Sizes</div>
          <div class="card-body">
            <ul>
              <li>
                <a class="b" href="{{route('size.index')}}">
                  Size List
                </a>
              </li>
              <li>
                <a class="" href="{{route('size.edit')}}">
                  New Size
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-6 mt-3">
        <div class="card">
          <div class="card-header">Category</div>
          <div class="card-body">
            <ul>
              <li>
                <a class="b" href="{{route('category.index')}}">
                  Category List
                </a>
              </li>
              <li>
                <a class="" href="{{route('category.edit')}}">
                  New Category
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header">Sub Category</div>
                <div class="card-body">
                    <ul>
                        <li>
                            <a class="b" href="{{route('sub_categories.index')}}">
                                Sub Category List
                            </a>
                        </li>
                        <li>
                            <a class="" href="{{route('sub_categories.edit')}}">
                                New Sub Category
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



        <!-- order management -->
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header">Order Management</div>
                <div class="card-body">
                    <ul>
                        <li>
                            <a class="b" href="{{route('goods_order.index')}}">
                                Order List
                            </a>
                        </li>
                        <li>
                            <a class="" href="{{route('goods_order.edit')}}">
                                New Order
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



      <div class="col-md-6 mt-3">
        <div class="card">
          <div class="card-header">User</div>
          <div class="card-body">
            <ul>
              <li>
                <a class="b" href="{{route('mmuser.index')}}">
                  User List
                </a>
              </li>
              <li>
                <a class="" href="{{route('mmuser.edit')}}">
                  New User
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
