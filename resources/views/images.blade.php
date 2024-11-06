<div>
    <h3>Add new Image</h3>
        <form action="/addimage" method="post" enctype="multipart/form-data">
            @csrf

            <label for="">Select Image</label>
            <input type="file" name="image" id=""><br><br>

            <input type="submit" name="submit" id="">
        </form>

        <div>
            @foreach ($images as $img)
            <img src="/storage/{{$img->path}}" alt="" style="width: 300px; margin-right:20px; margin-bottom:20px;">
                
            @endforeach
        </div>

</div>
