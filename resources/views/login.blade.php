<div>

    <h2>Login Form</h2>
    <form action="/login" method="post">
        @csrf
        <label for="">username</label><br>
        <input type="text" name="username" id=""><br><br>
        <label for="">Password</label><br>
        <input type="password" name="password" id=""><br><br>
        <input type="submit" name="submit" id=""><br>
    </form>
</div>
