@extends('admin.layout.master')
@section('title',__('product.admin.edit.title') )
@section('body')
<!-- Hover Rows -->
<div class="row clearfix">
  @include('admin.includes.message')
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <h2 class="card-inside-title">{{ __('product.admin.edit.form_title') }}</h2>
        <div class="row clearfix">
          <div class="col-sm-12">
            <form id="demo-form2" method="POST" action="{{ route('admin.products.update', $product->id) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label>{{ __('product.admin.show.name') }}</label>
                  <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}" placeholder="{{ __('product.admin.create.enter_name') }}" />
              </div>
              <div class="form-group">
                <label>{{ __('product.admin.show.describe') }}</label>
                <div class="form-line">
                  <textarea name="describe" class="form-control" rows='4' placeholder="{{ __('product.admin.create.enter_describe') }}">{{ old('describe', $product->describe) }}</textarea>
                </div>
              </div>
              <div class="form-group">
                <label>{{ __('product.admin.show.price') }}</label>
                <div class="form-line">
                <input type="text" name="price" class="form-control" value="{{ old('price', $product->price) }}" placeholder="{{ __('product.admin.create.enter_price') }}"/>
                </div>
              </div>
              <div class="form-group">
              <div class="form-line">
                <label class="control-label">{{ __('product.admin.show.store') }}</label>
                <select name="store_id" class="form-control">
                  @foreach ($stores as $id => $name)
                    <option {{ $id == $product->store_id ? 'selected' : '' }} value="{{ $id }}">{{ old('name', $name) }}</option>
                  @endforeach
                </select>
              </div>
              </div>
              <div class="form-group">
                <div class="form-line">
                  <label class="control-label">{{ __('product.admin.show.category') }}</label>
                  <select name="category_id" class="form-control">
                    @foreach ($categories as $id => $name)
                      <option {{ $id == $product->category_id ? 'selected' : '' }} value="{{ $id }}">{{ old('name', $name) }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label>{{ __('product.admin.show.images') }}</label>
                <div class="form-line">
                  <input type="file" name="image[]" class="form-control" multiple/>
                </div>
              </div>
              <div class="form-group row" hidden>
                <div class="col-md-8">
                  <input class="form-control col-md-8 active" name="imageDel" id="imageDel">
                </div>
              </div>
              <div class="form-group">
                <table >
                  <tbody>
                    @foreach ($images as $image)
                    <tr id="tr-{{ $image->id }}">
                      <td style="width: 50%;"><img width="100px" height="75px" src="images/products/{{ $image->path }}" alt="product-image" class="rounded"></td>
                      <td style="width: 25%;"><a style="font-size:24px" class="remove" id="remove-{{ $image->id }}" >
                      <i class="fa fa-remove img-remove" style="font-size:25px;color:red;cursor: pointer;" image-id="{{ $image->id }}" data-confirm="{{ __('product.admin.edit.comfirm') }}" ></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <button type="submit" id="submit" name="submit" class="btn btn-success">{{ __('product.admin.edit.update_product') }}</button>&nbsp;
              <a href="{{ route('admin.products.index') }}" name="submit" class="btn btn-info waves-effect">{{ __('product.admin.edit.cancel') }}</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- #END# Hover Rows -->
@endsection
@section('js')
  <script src="/js/admin/updateProduct.js"></script>
@endsection
