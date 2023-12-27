@extends('layouts.master')

@section('title', 'GAMEX/strategy')

@php
$selectedCategory = 'strategy';
@endphp

@section('content')
    @include('layouts.topbar')
    @include('layouts.categorybar')
    @include('layouts.dbselectedgames')
@endsection
