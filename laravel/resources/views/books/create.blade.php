@extends('layouts.app')

@section('content')
    <h2>Create a Book</h2>
    <form method="POST" action>
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="isbn" placeholder="ISBN">
        <textarea name="description" placeholder="Description"> </textarea>
        <button type="submit">Save</button>
    </form>
@endsection
