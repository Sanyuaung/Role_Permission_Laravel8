@extends('layouts.adminpanel')
@include('sweetalert::alert')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users Management</h2>
            </div>
            @can('UserCreate')
                <div class="pull-right mt-3 mb-2">
                    <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
                </div>
            @endcan
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="float-right alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered mt-3">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Roles</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if (!empty($user->getRoleNames()))
                        @foreach ($user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                </td>
                <td>
                    <a class="btn btn-info" href="{{ route('users.show', $user->id) }}">Show</a>
                    @can('UserEdit')
                        <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Reset Password</a>
                    @endcan
                    @can('UserEdit')
                        <a class="btn btn-primary mt-2" href="{{ route('userroleedit', $user->id) }}">Update Role</a>
                    @endcan
                    @can('UserDelete')
                        {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['users.destroy', $user->id],
                            'onclick' => "return confirm('Are you sure you want to Delete?')",
                            'style' => 'display:inline',
                        ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger mt-2']) !!}
                        {!! Form::close() !!}
                    @endcan
                </td>
            </tr>
        @endforeach
    </table>


    {!! $data->render() !!}
@endsection
