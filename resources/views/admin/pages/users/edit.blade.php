@extends('admin.layout.master')
@section('title',__('user.admin.edit.title') )
@section('body')
<!-- Hover Rows -->
<div class="row clearfix">
  @include('admin.includes.message')
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <h2 class="card-inside-title">{{ __('user.admin.edit.form_title') }}</h2>
        <div class="row clearfix">
          <div class="col-sm-12">
            <form id="demo-form2" method="POST" action="{{ route('admin.users.update', $user->id) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                <div class="form-group">
                  <label for="username">{{ __('user.admin.username') }}</label>
                    <input type="text" name="username" class="form-control" value="{{ $user->username }}" readonly="true" placeholder="{{ __('user.admin.create.enter_username') }}" />
                </div>
                <div class="form-group">
                  <label for="full_name">{{ __('user.admin.fullname') }}</label>
                  <div class="form-line">
                    <input type="text" name="full_name" class="form-control" value="{{ $user->full_name }}" placeholder="{{ __('user.admin.create.enter_fullname') }}" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="birthday">{{ __('user.admin.birthday') }}</label>
                  <div class="input-group">
                    <input type="text" name="birthday" class="form-control" value="{{ $user->birthday }}" placeholder="{{ __('user.admin.create.enter_birthday') }}"/>
                    <div class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="demo-radio-button">
                    <label for="gender">{{ __('user.admin.gender') }}</label><br>
                    @if ($user->gender ==1)
                      <input name="gender" type="radio" id="radio_1" value="1" checked>
                      <label for="radio_1">{{ __('user.admin.female') }}</label>
                      <input name="gender" type="radio" id="radio_2" value="0">
                      <label for="radio_2">{{ __('user.admin.male') }}</label>
                    @else
                      <input name="gender" type="radio" id="radio_1" value="1">
                      <label for="radio_1">{{ __('user.admin.female') }}</label>
                      <input name="gender" type="radio" id="radio_2" value="0" checked>
                      <label for="radio_2">{{ __('user.admin.male') }}</label>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <label for="phone">{{ __('user.admin.phone') }}</label>
                  <div class="form-line">
                    <input type="text" name="phone" class="form-control" value="{{ $user->phone }}" placeholder="{{ __('user.admin.create.enter_phone') }}" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="email">{{ __('user.admin.email') }}</label>
                    <input type="text" name="email" class="form-control" value="{{ $user->email }}" readonly="true" placeholder="{{ __('user.admin.create.enter_email') }}" />
                </div>
                <div class="form-group">
                  <div class="form-line">
                    <label class="control-label">{{ __('user.admin.role') }}</label>
                    <select name="role_id" class="form-control">
                      @foreach ($users as $userInfo)
                      <option @if ($userInfo->role_id == $user->role_id) selected @endif
                          value="{{ $userInfo->role_id }}"
                      >{{ $userInfo->nameRole() }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="demo-radio-button">
                    <label for="is_active">{{ __('user.admin.active') }}</label><br>
                    @if ($user->is_active ==1)
                      <input name="is_active" type="radio" class="with-gap" id="radio_3" value="1" checked>
                      <label for="radio_3">{{ __('user.admin.actived') }}</label>
                      <input name="is_active" type="radio" class="with-gap" id="radio_4" value="0">
                      <label for="radio_4">{{ __('user.admin.deactived') }}</label>
                    @else
                      <input name="is_active" type="radio" class="with-gap" id="radio_3" value="1">
                      <label for="radio_3">{{ __('user.admin.actived') }}</label>
                      <input name="is_active" type="radio" class="with-gap" id="radio_4" value="0" checked>
                      <label for="radio_4">{{ __('user.admin.deactived') }}</label>
                    @endif
                  </div>
                </div>
              <button type="submit" id="submit" name="submit" class="btn btn-success">{{ __('user.admin.edit.update_user') }}</button>&nbsp;
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- #END# Hover Rows -->
@endsection
