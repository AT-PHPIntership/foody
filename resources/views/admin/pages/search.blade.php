@extends('admin.layout.master')
@section('title',__('product.admin.show.title') )
@section('body')
<!-- Hover Rows -->
<div class="row clearfix">
  @include('admin.includes.message')
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <div class="header">
            <h2>{{__('product.admin.show.form_title')}}</h2>
            <a href="{{ route('admin.products.create') }}"
              class="btn bg-green waves-effect" style="margin-top: 30px;"> <i
              class="material-icons">playlist_add</i><span>{{ __('product.admin.show.create_product') }}</span>
            </a>
        </div>
        <div class="body table-responsive">
          @if (isset($products))
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>@sortablelink('id', 'ID')</th>
                <th>{{__('product.admin.show.image')}}</th>
                <th>@sortablelink('name', __('product.admin.show.name'))</th>
                <th>@sortablelink('price', __('product.admin.show.price'))</th>
                <th>@sortablelink('store_id', __('product.admin.show.store'))</th>
                <th>{{__('product.admin.show.details')}}</th>
                <th>{{__('product.admin.show.edit')}}</th>
                <th>{{__('product.admin.show.delete')}}</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
              <tr>
                <th>{{ $product->id }}</th>
                @if (count($product->images))
                  <th style="width: 35%;"><img class="img-responsive thumbnail" src="images/products/{{ $product->images[0]->path }}" style="object-fit: contain;"></th>
                @else
                  <th><img class="img-responsive thumbnail" src="images/products/no-image.jpg"></th>
                @endif
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }} VND</td>
                <td><a href="{{route('admin.stores.showProducts', $product->store->id)}}">{{ $product->store->name }}</a></td>
                <td><a id="details" class="btn bg-light-blue btn-circle waves-effect waves-circle waves-float"
                    href="{{route('admin.products.show', $product->id)}}"><i class="material-icons">remove_red_eye</i></a></td>
                <td><a
                  href="{{route('admin.products.edit', $product->id)}}"
                  class="btn bg-yellow btn-circle waves-effect waves-circle waves-float">
                    <i class="material-icons">border_color</i>
                </a></td>
                <td><form onsubmit="return confirm('{{__('product.admin.show.delete_confirm')}}');" 
                          class="col-md-4" id="deleteProduct-{{ $product->id }}" 
                          action="{{ route('admin.products.destroy', $product->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-circle waves-effect waves-circle waves-float" type="submit">
                    <i class="material-icons">delete_sweep</i>
                  </button>
                </form></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $products->appends(\Request::except('page'))->links() }}
          @endif
          @if (isset($stores))
          <table class="table table-hover">
            <thead>
              <tr>
                <th>@sortablelink('id', __('store.admin.id'))</th>
                <th>@sortablelink('name', __('store.admin.name'))</th>
                <th>{{ __('store.admin.address') }}</th>
                <th>{{ __('store.admin.products') }}</th>
                <th>{{ __('store.admin.table.show') }}</th>
                <th>{{ __('store.admin.table.edit') }}</th>
                <th>{{ __('store.admin.table.delete') }}</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($stores as $store)
                <tr>
                  <th scope="row">{{ $store->id }}</th>
                  <td><a href="{{ route('admin.stores.show', $store->id) }}">{{ $store->name }}</a></td>
                  <td>{{ $store->address }}</td>
                  <td><a id="details" class="btn bg-light-blue btn-circle waves-effect waves-circle waves-float"
                    href="{{route('admin.stores.showProducts', $store->id)}}"><i class="material-icons">remove_red_eye</i></a></td>
                  <td><a id="details" class="btn bg-light-blue btn-circle waves-effect waves-circle waves-float"
                      href="{{ route('admin.stores.show', $store->id) }}"><i class="material-icons">remove_red_eye</i></a></td>
                  <td><a
                      href="{{route('admin.stores.edit', $store->id)}}"
                      class="btn bg-yellow btn-circle waves-effect waves-circle waves-float">
                    <i class="material-icons">border_color</i>
                    </a>
                  </td>
                  <td class="js-sweetalert">
                    <form class="del-form" action="{{ route('admin.stores.destroy', $store->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button id="delete-{{$store->id}}" class="btn btn-danger btn-circle waves-effect waves-circle waves-float"  onclick="return confirm('@lang('store.admin.message.msg_del')')" type="submit">
                        <i class="material-icons">delete_sweep</i>
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          {!! $stores->appends(\Request::except('page'))->links() !!}
          @endif
          @if (isset($users))
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>@sortablelink('username', __('user.admin.username'))</th>
                <th>{{__('user.admin.fullname')}}</th>
                <th>{{__('user.admin.email')}}</th>
                <th>{{__('user.admin.birthday')}}</th>
                <th>{{__('user.admin.gender')}}</th>
                <th>{{__('user.admin.phone')}}</th>
                <th>{{__('user.admin.role')}}</th>
                <th>{{__('user.admin.show.edit')}}</th>
                <th>{{__('user.admin.show.delete')}}</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $userInfo)
              <tr>
                <th>{{ $userInfo->id }}</th>
                <td>{{ $userInfo->username }}</td>
                <td>{{ $userInfo->full_name }}</td>
                <td>{{ $userInfo->email }}</td>
                <td>{{ $userInfo->birthday }}</td>
                @if ($userInfo->gender == 1)
                  <td>{{__('user.admin.female')}}</td>
                @else
                  <td>{{__('user.admin.male')}}</td>
                @endif
                <td>{{ $userInfo->phone }}</td>
                <td>
                  {{ $userInfo->nameRole() }}
                  @if ($userInfo->role_id == 2)
                    <br><a href="{{route('admin.users.showStores', $userInfo->id)}}">Show list stores</a>
                  @endif
                </td>
                <td><a
                  href="{{route('admin.users.edit', $userInfo->id)}}"
                  class="btn bg-yellow btn-circle waves-effect waves-circle waves-float">
                    <i class="material-icons">border_color</i>
                </a></td>
              <td><form onsubmit="return confirm('{{__('user.admin.show.delete_confirm')}}');" class="col-md-4" id="deleteUser-{{ $userInfo->id }}" action="{{ route('admin.users.destroy', $userInfo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-circle waves-effect waves-circle waves-float" type="submit">
                      <i class="material-icons">delete_sweep</i>
                    </button>
                  </form></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $users->render() }}
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
<!-- #END# Hover Rows -->
@endsection
