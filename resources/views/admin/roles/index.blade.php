@extends('layout.mystore')
@section('title')
    Roles and Assignments
@endsection
@section('content')
    <div class="container info py-2">
        <h3>Roles</h3>
        <div class="row">
            @foreach ($roles as $role)
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-default m-2">
                        <h3 class="card-header">{{ $role->name }} <br><span style="font-size: 10pt;"><i>
                                    {{ $role->description }}
                                </i></span></h3>
                        <div class="card-body">
                            @if (($users = $role->users) !== null)
                                @foreach ($users as $user)
                                    <h4 class="bg-primary">{{ $user->id }}.{{ $user->email }}</h4>
                                    <p class="float-right">${{ $user->balance }}</p>
                                    CheckForRole: <?= $user->hasRole($role->name) ?>
                                    <hr>
                                @endforeach
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
