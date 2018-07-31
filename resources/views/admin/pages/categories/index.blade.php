@extends('admin.layout.master')
@section('title', __('category.admin.title'))
@section('body')
<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="body">
    @if ($errors->any())
      <div class="alert bg-green alert-dismissible" role="alert">
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
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
      <div class="header">
        <h2>{{__('category.admin.title')}}</h2>
        <a href="{{ route('admin.categories.create') }}"
            class="btn bg-green waves-effect" style="margin-top: 30px;"> <i
            class="material-icons">add</i><span>{{ __('category.admin.add.create') }}</span>
        </a>
      </div>
        <div class="body table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>{{ __('category.admin.table.id') }}</th>
                <th>{{ __('category.admin.table.name') }}</th>
                <th>{{ __('category.admin.table.view_children') }}</th>
                <th>{{ __('category.admin.table.edit') }}</th>
                <th>{{ __('category.admin.table.delete') }}</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categoriesParent as $category)
                <tr>
                  <th scope="row">{{ $category->id }}</th>
                  <td>{{ $category->name }}</td>
                  <td>
                    @if ($category->countChild($category->id)>0)
                      <a href="{{ route('admin.categories.showChild', $category->id) }}">{{ __('category.admin.table.show') }}</a>
                    @endif
                  </td>
                  <td><a
                      href="{{route('admin.categories.edit', $category->id)}}"
                      class="btn bg-yellow btn-circle waves-effect waves-circle waves-float">
                    <i class="material-icons">border_color</i>
                    </a>
                  </td>
                  <td>
                    <form class="del-form" action="{{route('admin.categories.destroy', $category->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-circle waves-effect waves-circle waves-float"  type="submit">
                          <i class="material-icons">delete_sweep</i>
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          {{ $categoriesParent->links() }}
				</div>
			</div>
	</div>
</div>
@endsection
