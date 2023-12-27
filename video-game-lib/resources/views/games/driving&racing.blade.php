@extends('layouts.master')

@section('title', 'GAMEX/racing')

@php
$selectedCategory = 'racing';
@endphp

@section('content')
    @include('layouts.topbar')
    @include('layouts.categorybar')
    @include('layouts.dbselectedgames')
@endsection
