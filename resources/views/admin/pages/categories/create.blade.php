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
                            minlength="3" required> <label class="form-label">{{__('category.admin.table.name') }}</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="btn-group bootstrap-select form-control show-tick">
                      <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="-- Please select --" aria-expanded="false">
                        <span class="filter-option pull-left">-- Please select --</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
                      </button>
                      <div class="dropdown-menu open" style="max-height: 599px; overflow: hidden; min-height: 92px;">
                        <ul class="dropdown-menu inner" role="menu" style="max-height: 589px; overflow-y: auto; min-height: 82px;">
                          <li data-original-index="0" class="selected">
                            <a tabindex="0" class="" style="" data-tokens="null">
                              <span class="text">-- Please select --</span><span class="glyphicon glyphicon-ok check-mark"></span>
                            </a>
                          </li>
                          <li data-original-index="1">
                            <a tabindex="0" class="" style="" data-tokens="null">
                              <span class="text">10</span><span class="glyphicon glyphicon-ok check-mark"></span>
                            </a>
                          </li>
                          <li data-original-index="2">
                            <a tabindex="0" class="" style="" data-tokens="null">
                              <span class="text">20</span><span class="glyphicon glyphicon-ok check-mark"></span>
                            </a>
                          </li>
                          <li data-original-index="3">
                            <a tabindex="0" class="" style="" data-tokens="null">
                              <span class="text">30</span><span class="glyphicon glyphicon-ok check-mark"></span>
                            </a>
                          </li>
                          <li data-original-index="4">
                            <a tabindex="0" class="" style="" data-tokens="null">
                              <span class="text">40</span><span class="glyphicon glyphicon-ok check-mark"></span>
                            </a>
                          </li>
                          <li data-original-index="5">
                            <a tabindex="0" class="" style="" data-tokens="null">
                              <span class="text">50</span><span class="glyphicon glyphicon-ok check-mark"></span>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <select name="parent_id"  class="form-control show-tick" tabindex="-98">
                        <option value="0">-- Please select --</option>
                        @foreach ($categoriesParent as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select></div>
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
