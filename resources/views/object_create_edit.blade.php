@extends('layouts.app')
@section('title', $title)

@section('content')
<div class="container">
    <h2 class="page-title">{{ $title }}</h2>
    <div class="row">
        <div class="col-6">
            {!! Form::model($object, array('method' => $method, 'route' => array($save_url, $object->id))) !!}
            @foreach ($fields as $key => $value)
            <div class="form-group">
                <?= Form::label($key, $value) ?>
                <?= Form::text($key, null, ['class' => 'form-control']) ?>
            </div>
            @endforeach
            <?= Form::submit(null, ['class' => 'btn btn-primary']) ?>
            <a class="btn btn-secondary" href="{{ URL::previous() }}">Back</a>
            <?= Form::close() ?>
        </div>
    </div>
</div>
@endsection