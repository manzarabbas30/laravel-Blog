<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main></main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    {{-- <h1>This is a user page {{$user}}</h1> --}}
    <h1>This is a user page</h1>
    @include('blog')
    {{-- <h1>Hi, {{$myName}}</h1> --}}
    {{-- if practice with blade --}}
    {{-- @if ($myName == 'manzar')
<h1>Hi, {{$myName}}</h1>
@elseif ($myName=='Fatima')
<h1>Hi, {{$myName}}</h1>
@else
<h1>Who are you?</h1>
@endif --}}
    {{-- for practice with blade --}}

    {{-- @for ($i = 0; $i < count($myName); $i++)
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

    <style>
        .error-input {
            border: 1px solid red;
        }
    </style>
    <form action="users" method="POST">
        @csrf
        <label for="">Username: </label>
        <input type="text" name="username" id="" value="{{ old('username') }}"
            class="{{ $errors->first('username') ? 'error-input' : '' }}">
        <span style="color:red">
            @error('username')
                {{ $message }}
            @enderror
        </span>
        <br><br>
        <label for="">Password: </label>
        <input type="password" name="password" id="">
        <span style="color:red">
            @error('password')
                {{ $message }}
            @enderror
        </span>
        <br><br>
        <input type="submit" value="Submit">
    </form>


    <br>

    {{-- <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="">
                        <td scope="row">{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div> --}}
    <br>

    {{-- <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">username</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($apiusers as $apiuser)
                    <tr class="">
                        <td scope="row">{{ $apiuser->id}}</td>
                        <td>{{ $apiuser->name }}</td>
                        <td>{{ $apiuser->username }}</td>
                        <td>{{ $apiuser->email }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div> --}}
   {{-- {{ print_r($apiusers);}}

                        <li scope="row">{{ $apiusers->id}}</li>
                        <li>{{ $apiusers->name }}</li>
                        <li>{{ $apiusers->username }}</li>
                        <li>{{ $apiusers->email }}</li> --}}




        <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">password</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="">
                        <td scope="row">{{ $user->id}}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>
