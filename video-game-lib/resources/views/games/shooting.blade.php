@extends('layouts.master')

@section('title', 'GAMEX/shooting')

@php
$selectedCategory = 'shooting';
@endphp

@section('content')
    @include('layouts.topbar')
    @include('layouts.categorybar')
    @include('layouts.dbselectedgames')
@endsection
