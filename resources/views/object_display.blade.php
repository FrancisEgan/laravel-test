@extends('layouts.app')
@section('title', $title)

@section('content')
<div class="container">
    <h2 class="page-title">{{ $title }}</h2>
    <table class="table table-striped">
        <tbody>
        @foreach ($fields as $key => $value)
            <tr>
                <td>{{ $value }}</td>
                <td>{{ $object[$key] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-secondary" href="{{ URL::previous() }}">Back</a>
</div>
@endsection