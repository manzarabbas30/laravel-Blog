<div>
    
    <form action="/edit-student/{{$data->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <label for="">Name</label>
        <input type="text" name="name" value="{{$data->Name}}" id=""><br><br>
        <label for="">Email</label>
        <input type="text" name="email" id="" value="{{$data->Email}}"><br><br>
        <label for="">Batch</label>
        <input type="number" name="batch" id="" value="{{$data->Batch}}"><br><br>

        <input type="submit" name="submit" id=""> <a href="\liststudent">Cancel</a>
    </form>
</div>
