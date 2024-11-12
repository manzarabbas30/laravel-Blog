{{-- <x-user-component componentName="Users" />

<h1>This is Blog Page</h1> --}}


@extends('layout')

@section('title', 'Blog page')


@section('main')

<div>
<x-view-component>

    <x-slot name="Pagetitle">Blog</x-slot>
</x-view-component>
</div>

@endsection