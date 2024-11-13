<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @include('bootstrap')
    <title>@yield("title")</title>
</head>

<style>

</style>
<body>
    
<div>
<br>
&nbsp;
    {{-- <h2>{{URL::current()}}</h2> --}}
{{-- <a href="{{route('hm')}}">Home</a><br><br> --}}
<a href="{{URL::to('/')}}">Home</a>&nbsp;
<a href="{{URL::to('/about')}}">About</a>&nbsp;
<a href="{{URL::to('/blog')}}">Blog</a>&nbsp;
<a href="{{URL::to('/contact')}}">Contact</a>&nbsp;
<a href="{{URL::to('/users')}}">Users</a>&nbsp; <br><br>
{{-- <h3>{{URL::previous()}}</h3> --}}
{{-- <h3>{{URL::full()}}</h3> --}}

<h5>To Rollback migration please type "php artisan migrate:rollback"</h5>



</div>


@section('main')
@show()

<footer style="background-color: lightblue; text-align:center; padding:20px; width:100%;">
    <p>footer here!</p>
</footer>
</body>
</html>