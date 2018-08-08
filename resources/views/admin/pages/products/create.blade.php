@extends('admin.layout.master')
@section('title',__('product.admin.create.title') )
@section('body')
<!-- Hover Rows -->
<div class="row clearfix">
  @include('admin.includes.message')
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <h2 class="card-inside-title">{{ __('product.admin.create.form_title') }}</h2>
        <div class="row clearfix">
          <div class="col-sm-12">
            <form id="demo-form2" method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>{{ __('product.admin.show.name') }}</label>
                <div class="form-line">
                  <input type="text" name="name" class="form-control" placeholder="{{ __('product.admin.create.enter_name') }}" />
                </div>
              </div>
              <div class="form-group">
                  <label>{{ __('product.admin.show.images') }}</label>
                  <div class="form-line">
                    <input type="file" name="path[]" class="form-control" multiple/>
                  </div>
                </div>
              <div class="form-group">
                <label>{{ __('product.admin.show.describe') }}</label>
                <div class="form-line">
                  <textarea name="describe" class="form-control" placeholder="{{ __('product.admin.create.enter_describe') }}"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label>{{ __('product.admin.show.price') }}</label>
                <div class="form-line">
                  <input type="text" name="price" class="form-control" placeholder="{{ __('product.admin.create.enter_price') }}" />
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">{{ __('product.admin.show.store') }}</label>
                <select name="store_id" class="form-control">
                  <option value="">--- Choose a store ---</option>
                  @foreach ($stores as $store)
                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label class="control-label">{{ __('product.admin.show.category') }}</label>
                <select name="category_id" class="form-control">
                  <option value="">--- Choose a category ---</option>
                  @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                  @endforeach
                </select>
              </div>
              <button type="submit" id="submit" name="submit" class="btn btn-success">{{ __('product.admin.create.create_product') }}</button>&nbsp;
              <button class="btn btn-primary" type="reset">{{ __('product.admin.create.reset_product') }}</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- #END# Hover Rows -->
@endsection
