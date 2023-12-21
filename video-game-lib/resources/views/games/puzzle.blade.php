@extends('layouts.master')

@section('title', 'GAMEX/puzzle')

@php
$selectedCategory = 'puzzle';
@endphp

@section('content')
    @include('layouts.categorybar')
    @include('layouts.dbselectedgames')
@endsection