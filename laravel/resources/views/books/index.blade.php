@extends('layouts.app')

@section('content')
    <h2>Books Index</h2>
    <a href="{{route('books.create')}}">Add book</a>
    <ul>
        @foreach($books as $book)
            @dd($book)
            <li>{{$book->title}} - {{$book->isbn}}</li>
        @endforeach
    </ul>
@endsection
