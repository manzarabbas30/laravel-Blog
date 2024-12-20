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
<style>
/* Container styles for pagination */

.w-5{
    width: 30px;
}
</style>
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
    <h1>This is a Student page</h1>
    <label for="">Search</label>
<br>
<form action="/search" method="get">
    <input type="text" name="search" placehoder="search data..." value="{{@$search}}"><Button>Search</Button><br><br>

</form>
    <div class="table-responsive">
        <form action="/delete-multiple" method="post">
            @csrf
        <button>Delete</button><br><br>
        <table class="table table-primary">
            <thead>
                <tr>    
                    <th>#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Batch</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($std as $s)
                    <tr class="">
                    <td><input type="checkbox" name="ids[]" value="{{$s->id}}"></td>
                        <td>{{$s->Name}}</td>
                        <td>{{$s->Email}}</td>
                        <td>{{$s->Batch}}</td>
                        <td><a href="{{'delete/'. $s->id}}">Delete </a>&nbsp; <a href="{{'edit/'. $s->id}}">edit</a></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </form>
        {{$std->links()}}
        <br>
        <form action="/student" method="post">
            @csrf
            <label for="">Name</label>
            <input type="text" name="name" id=""><br><br>
            <label for="">Email</label>
            <input type="text" name="email" id=""><br><br>
            <label for="">Batch</label>
            <input type="number" name="batch" id=""><br><br>

            <input type="submit" name="submit" id="">
        </form>
    </div>

</body>

</html>
