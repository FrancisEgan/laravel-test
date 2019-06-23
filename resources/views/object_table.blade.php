@extends('layouts.app')
@section('title', $title)

@section('content')
<div class="container">
    <h2 class="page-title">{{ $title }}</h2>
    <table class="table table-striped">
        <thead>
            <tr>
            @foreach ($display_fields as $key => $value)
                <th scope="col">{{ $value }}</th>
            @endforeach
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $d)
            <tr>
            @foreach ($display_fields as $key => $value)
                <td>{{ $d[$key] }}</td>
            @endforeach
                <td>
                    <a class="btn btn-primary" href="{{ URL::current() }}/show/{{ $d->id }}">Show</a>
                    <a class="btn btn-primary" href="{{ URL::current() }}/edit/{{ $d->id }}">Edit</a>
                    <a class="btn btn-primary" href="{{ URL::current() }}/delete/{{ $d->id }}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{ URL::current() }}/create">Create</a>

</div>
@endsection