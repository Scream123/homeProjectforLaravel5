@extends ('app')

@section('content')
    <h1>Создать</h1>
    {!! Form::open(['route' => 'post.store']) !!}

    @include('post._form')

    {!! Form::close() !!}
    @endsection