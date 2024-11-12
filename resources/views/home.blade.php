{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    @include('bootstrap');
    <title>Document</title>
</head>
<body>
    <x-user-component componentName="Users" />
<h1 id="greenId" class="heading">This is Home Page</h1>
<button onclick="makegreen()">Chang color to green</button>
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>

<button type="button" class="btn btn-link">Link</button>
<x-view-component>


    <x-slot name="Pagetitle">Home</x-slot>
</x-view-component>

</body>
</html> --}}





@extends('layout')

@section('title', 'Home page')


@section('main')

<div>
<x-view-component>

    <x-slot name="Pagetitle">Home</x-slot>
</x-view-component>
</div>

@endsection