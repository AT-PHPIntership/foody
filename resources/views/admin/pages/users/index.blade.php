@extends('admin.layout.master')
@section('title',__('user.admin.show.title') )
@section('body')
<!-- Hover Rows -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <div class="header">
                    <h2>{{__('user.admin.show.form_title')}}</h2>
                    <a href="{{ route('admin.users.create') }}"
                      class="btn bg-green waves-effect" style="margin-top: 30px;"> <i
                      class="material-icons">add</i> <span>{{ __('user.admin.show.create_user') }}</span>
                    </a>
                </div>
                <div class="body table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>{{__('user.admin.show.username')}}</th>
                        <th>{{__('user.admin.show.fullname')}}</th>
                        <th>{{__('user.admin.show.email')}}</th>
                        <th>{{__('user.admin.show.birthday')}}</th>
                        <th>{{__('user.admin.show.gender')}}</th>
                        <th>{{__('user.admin.show.phone')}}</th>
                        <th>{{__('user.admin.show.role')}}</th>
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
                        <td>{{ $userInfo->gender }}</td>
                        <td>{{ $userInfo->phone }}</td>
                        <td>{{ $userInfo->role_id }}</td>
                        <td><a
                          href="{{route('admin.users.edit', $userInfo->id)}}"
                          class="btn bg-yellow btn-circle waves-effect waves-circle waves-float">
                            <i class="material-icons">border_color</i>
                        </a></td>
                        <td><form class="col-md-4" id="deleted{{ $userInfo->id }}" action="{{ route('admin.users.destroy', ['id' => $userInfo['id']]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-circle waves-effect waves-circle waves-float"  type="submit">
                              <i class="material-icons">delete_sweep</i>
                            </button>
                          </form></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Hover Rows -->
@endsection
