@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Novo cliente</h3>
        @include('errors._check')
        {{Form::open(['route' => 'admin.clients.store'])}}

        @include('admin.clients._form')

        {{Form::close()}}

    </div>

@endsection