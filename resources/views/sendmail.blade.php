<h3>Send Main from here </h3><br>

<form action="/sendmail" method="post">
    @csrf
    <label for="">To</label>
    <input type="text" name="to" id=""><br><br>
    <label for="">Subject</label>
    <input type="text" name="subject" id=""><br><br>
    <label for="">Message</label>
    <input type="text" name="msg" id=""><br><br>

    <input type="submit" name="submit" id="">
</form>