{{-- <h1>This is a user page {{$user}}</h1> --}}
<h1>This is a user page</h1>
@include('blog')
{{-- <h1>Hi, {{$myName}}</h1> --}}
{{-- if practice with blade --}}
{{-- @if($myName=='manzar')
<h1>Hi, {{$myName}}</h1>
@elseif ($myName=='Fatima')
<h1>Hi, {{$myName}}</h1>
@else
<h1>Who are you?</h1>
@endif --}}
{{-- for practice with blade --}}

{{-- @for ($i=0; $i < count($myName); $i++)
<h2>Hi, {{$myName[$i]}}</h2>
@endfor --}}

{{-- foreach practice with blade --}}

{{-- @foreach ($myName as $i)
<h2>Hi, {{$i}}</h2>
@endforeach --}}

{{-- <script>
    var user= @json($myName);
    console.log(user);
    console.log(user[0]);
    </script> --}}


    {{-- print_r($errors); --}}

    
    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
    <div style="color:red">
        {{$error}}
    </div>
        @endforeach

    @endif --}}
    <form action="users" method="POST">
    @csrf
        <label for="">Username: </label>
        <input type="text" name="username" id="">
        <span style="color:red">@error('username')
            {{$message}}
        @enderror</span>
        <br><br>
        <label for="">Password: </label>
        <input type="password" name="password" id="">
        <span style="color:red">@error('username')
            {{$message}}
        @enderror</span>
        <br><br>
        <input type="submit" value="Submit">
    </form>




