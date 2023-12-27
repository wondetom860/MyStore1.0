@extends('layout.mystore')
@section('title')
    Roles and Assignments
@endsection
@section('content')
    <div class="container info py-2">
        <h3>Users</h3>
        <div class="row">
            @foreach ($users as $user)
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-default m-2">
                        <h3 class="card-header">{{ $user->name }} <br><span style="font-size: 10pt;"><i>
                                    {{ $user->email }}
                                </i></span></h3>
                        <div class="card-body">
                            @if (($roles = $user->roles) !== null)
                                <legend>Has Roles: </legend>
                                <ul>
                                    @foreach ($roles as $role)
                                        <li>
                                            {{ $role->name }}
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                            @endif
                        </div>
                        <div class="card-footer">
                            <span><i>Users and roles</i></span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
