@extends('layouts.master')

@section('title', 'GAMEX/action')

@php
$selectedCategory = 'action';
@endphp

@section('content')
    @include('layouts.topbar')
    @include('layouts.categorybar')
    @include('layouts.dbselectedgames')
@endsection
