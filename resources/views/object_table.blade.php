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
                    <a class="btn btn-primary" href="{{ URL::current() }}/{{ $d->id }}">Show</a>
                    <a class="btn btn-primary" href="{{ URL::current() }}/{{ $d->id }}/edit">Edit</a>

                    <form method="POST" action="{{ URL::current() }}/{{ $d->id }}" style="display:inline-block">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input class="btn btn-primary" type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{ URL::current() }}/create">Create</a>
    <a class="btn btn-secondary" href="/">Back</a>

</div>
@endsection