<html>
<head>
@include('admin.includes.head')
</head>
<body class="theme-green">
  @include('admin.includes.header')
  @include('admin.includes.left-bar')
  <section class="content">
    <div class="container-fluid">
      <div class="block-header">
          <div class="row clearfix">
            <div class='col-sm-3'>
              <h2>@yield('title')</h2>
            </div>
            <div class='col-sm-6'>
                <div class="row clearfix">
                  <form action="{{ route('admin.search')}}" mothod="get">
                    <div class='col-sm-6' style="padding-right: 0px">
                      <input type='text' class="form-control" id='keyword' name="keyword" value="{{ request('keyword')}}"/>
                    </div>
                    <div class='col-sm-3' style="padding-left: 0px">
                      <select name="option" class="form-control">
                        <option @if (request('option')=='user') selected @endif value="user">User</option>
                        <option @if (request('option')=='store') selected @endif value="store">Store</option>
                        <option @if (request('option')=='product') selected @endif value="product">Product</option>
                      </select>
                    </div>
                    <div class='col-sm-3' style="padding-left: 0px">
                      <button type="submit" class="btn bg-indigo waves-effect">SEARCH</button>
                    </div>
                  </form>
                </div>
            </div>
            <div class='col-sm-3'></div>
          </div>
      </div>
      @yield('body')
    </div>
  </section>
@include('admin.includes.footer')
