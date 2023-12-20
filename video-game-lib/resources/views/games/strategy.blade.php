@extends('layouts.master')

@section('title', 'GAMEX/strategy')

@php
$selectedCategory = 'strategy';
@endphp

@section('content')
    @include('layouts.dbselectedgames')
@endsection
