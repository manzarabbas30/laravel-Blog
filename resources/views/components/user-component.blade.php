<div>
    <h1>
        This is a header Component for {{$title}} page
    </h1>
    <h2>{{URL::current()}}</h2>
{{-- <a href="{{route('hm')}}">Home</a><br><br> --}}
<a href="{{URL::to('/')}}">Home</a><br><br>
<a href="{{URL::to('/about')}}">About</a><br><br>
<a href="{{URL::to('/blog')}}">Blog</a><br><br>
<a href="{{URL::to('/contact')}}">Contact</a><br><br>
<a href="{{URL::to('/users')}}">Users</a><br><br>
{{-- <h3>{{URL::previous()}}</h3> --}}
{{-- <h3>{{URL::full()}}</h3> --}}



</div>