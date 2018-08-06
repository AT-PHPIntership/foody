@extends('admin.layout.master')
@section('title',__('store.admin.add.title') )
@section('body')
<!-- Hover Rows -->
<div class="row clearfix">
  @include('admin.includes.message')
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <h2 class="card-inside-title">{{ __('store.admin.add.title') }}</h2>
        <div class="row clearfix">
          <div class="col-sm-12">
            <form id="demo-form2" method="POST" action="{{ route('admin.stores.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="name">{{ __('store.admin.name') }}</label>
                <div class="form-line">
                  <input type="text" name="name" class="form-control" placeholder="{{ __('store.admin.add.enter_name') }}" />
                </div>
              </div>
              <div class="form-group">
                <label for="address">{{ __('store.admin.address') }}</label>
                <div class="form-line">
                  <input type="text" name="address" class="form-control" placeholder="{{ __('store.admin.add.enter_address') }}" />
                </div>
              </div>
              <div class="form-group">
                <label for="birthday">{{ __('store.admin.birthday') }}</label>
                <div class="input-group">
                  <input type="text" name="birthday" class="form-control" placeholder="{{ __('store.admin.create.enter_birthday') }}"/>
                  <div class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="demo-radio-button">
                  <label for="gender">{{ __('store.admin.gender') }}</label><br>
                  <input name="gender" type="radio" id="radio_1" value="1">
                  <label for="radio_1">{{ __('store.admin.female') }}</label>
                  <input name="gender" type="radio" id="radio_2" value="0">
                  <label for="radio_2">{{ __('store.admin.male') }}</label>
                </div>
              </div>
              <div class="form-group">
                <label for="phone">{{ __('store.admin.phone') }}</label>
                <div class="form-line">
                  <input type="text" name="phone" class="form-control" placeholder="{{ __('store.admin.create.enter_phone') }}" />
                </div>
              </div>
              <div class="form-group">
                <label for="email">{{ __('store.admin.email') }}</label>
                <div class="form-line">
                  <input type="text" name="email" class="form-control" placeholder="{{ __('store.admin.create.enter_email') }}" />
                </div>
              </div>
              <div class="form-group">
                <label for="password">{{ __('store.admin.password') }}</label>
                <div class="form-line">
                    <input type="password" name="password" class="form-control" placeholder="{{ __('store.admin.create.enter_password') }}" />
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">{{ __('store.admin.role') }}</label>
                <select name="role_id" class="form-control">
                  <option value="1">Admin</option>
                  <option value="2">Shop Manager</option>
                  <option value="3">Customer</option>
                </select>
                </div>
              <button type="submit" id="submit" name="submit" class="btn btn-success">{{ __('store.admin.create.create_store') }}</button>&nbsp;
              <button class="btn btn-primary" type="reset">{{ __('store.admin.create.reset_store') }}</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- #END# Hover Rows -->
@endsection
