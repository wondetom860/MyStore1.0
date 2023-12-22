@extends('layout.mystore')
@section('title', $viewData['title'])
@section('content')
    <div class="container-fluid d-flix align-items-center flex-column">
        <h3>{{ $viewData['title'] }}</h3>
    </div>
@endsection
