@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Nova categoria</h3>
        @include('errors._check')
        {{Form::open(['route' => 'admin.categories.store'])}}

        @include('admin.categories._form')

        {{Form::close()}}

    </div>

@endsection