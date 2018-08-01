@extends('admin.layout.master')
@section('title', __('category.admin.add.title'))
@section('body')
<div class="row clearfix">
	<!-- Advanced Validation -->
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="body">
        @if ($errors->any())
          <div class="alert bg-red alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"
              aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            @foreach ($errors->all() as $error)
            {{ $error }}
            @endforeach
          </div>
        @endif
        @if (session('message'))
          <div class="alert bg-green alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"
              aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            {{session('message')}}
          </div>
			  @endif
      </div>
    </div>
  </div>
  <div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
        <div class="header">
          <h2>
            <i class="material-icons">add</i>{{__('category.admin.add.title') }}
          </h2>
          <ul class="header-dropdown m-r--5">
            <li><a href=""
              class="btn btn-info waves-effect"
              style="margin: -14px 14px 0 0px;"> <i class="material-icons"
                style="color: white;">keyboard_backspace</i> <span>Back</span>
            </a></li>
          </ul>
        </div>
        <div class="body">
          <form id="form_advanced_validation" method="POST"
            action="{{route('admin.categories.store')}}">
            @csrf
            @method('POST')
            <div class="row clearfix">
              <div class="col-sm-6">
                <div class="form-group form-float">
                  <div class="form-line">
                    <input type="text" class="form-control" name="name"
                    minlength="3"> <label class="form-label">{{__('category.admin.table.name') }}</label>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <select class="form-control show-tick" name="parent_id" tabindex="-98">
                  <option value="0">-- Please select category --</option>
                  @foreach ($categoriesParent as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <button class="btn btn-success waves-effect" type="submit">Create</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- #END# Advanced Validation -->
</div>
@endsection
