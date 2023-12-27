@extends('layouts.master')

@section('content')
    <h1>Add New Category</h1>
    <form action="{{ route('admin.addCategory') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <button type="submit">Add Category</button>
    </form>
@endsection
