@extends('layouts.master')

@section('content')
    <h1>Admin - Categories</h1>
    @foreach ($categories as $category)
        <p>{{ $category->name }}</p>
    @endforeach
    <a href="{{ route('admin.addCategory') }}">Add New Category</a>
@endsection
