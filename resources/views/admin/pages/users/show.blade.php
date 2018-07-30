@extends('admin.layout.master')
@section('title',__('user.admin.show.title') )
@section('body')
<!-- Hover Rows -->
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="body">
        <h2 class="card-inside-title">{{ __('user.admin.show.form_title') }}</h2>
        <div class="row clearfix">
          <div class="col-sm-12">
              <div class="form-group">
                <label for="username">{{ __('user.admin.username') }}</label>
                <div class="form-line">
                  <input type="text" name="username" class="form-control" value="{{ $user->username }}" placeholder="{{ __('user.admin.create.enter_username') }}" />
                </div>
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
                  @if ($user->gender == 1)
                    <input name="gender" type="text" class="form-control" value="{{ __('user.admin.female') }}">
                  @else
                    <input name="gender" type="text" class="form-control" value="{{ __('user.admin.male') }}">
                  @endif
                </div>
              </div>
              <div class="form-group">
                <label for="phone">{{ __('user.admin.phone') }}</label>
                <div class="form-line">
                  <input type="text" name="phone" class="form-control" value="{{ $user->phone }}" placeholder="{{ __('user.admin.create.phone') }}" />
                </div>
              </div>
              <div class="form-group">
                <label for="email">{{ __('user.admin.email') }}</label>
                  <input type="text" name="email" class="form-control" value="{{ $user->email }}" placeholder="{{ __('user.admin.create.enter_email') }}" readonly="true"/>
              </div>
              <div class="form-group">
                <label for="password">{{ __('user.admin.password') }}</label>
                <div class="form-line">
                  <input type="password" name="password" class="form-control" value="{{ $user->password }}" placeholder="{{ __('user.admin.create.enter_password') }}"  readonly="true"/>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label">{{ __('user.admin.role') }}</label>
                  @if ($user->role_id == 1)
                    <input type="text" class="form-control" value="{{ __('user.admin.show.role_admin') }}">
                  @elseif ($user->role_id == 2)
                    <input type="text" value="{{ __('user.admin.show.role_shop_manager') }}">
                  @else
                    <input type="text" class="form-control" value="{{ __('user.admin.show.role_user') }}">
                  @endif
                  </select>
                </div>
              <div class="form-group">
                <div class="demo-radio-button">
                  <label for="is_active">{{ __('user.admin.active') }}</label><br>
                  @if ($user->is_active == 1)
                    <input type="text" class="form-control" value="{{ __('user.admin.actived') }}">
                  @else
                    <input type="text" class="form-control" value="{{ __('user.admin.deactived') }}">
                  @endif
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- #END# Hover Rows -->
@endsection
