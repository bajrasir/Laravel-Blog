<x-app-layout>

    <div style="padding-left: 40%; padding-top: 10%; ">

        <form action="{{url('view_post')}}" method="get">
            @csrf
            <div style="padding-bottom: 20px; padding-left: 40%">
            <input type="submit" name="" id="" style="background-color: rgb(110, 222, 153); cursor: pointer; padding: 10px; border-radius: 10px" value="View My Post">
            </div>
        </form>
<br>



        <label style="padding-left: 20%; font-size: 20px; font-weight: bold;">Add A Post</label>
        <br>
        <form action="{{url('upload_post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Description:</label>
                <input type="text" name="description">
            </div>
<br>
            <div>
                <label for="">Upload an image</label>
                <input type="file" name="image">
            </div>
<br>
            <div>
                <input type="submit" style="background-color: rgb(122, 112, 210); cursor: pointer; padding: 10px; border-radius: 10px" name="" id="">
            </div>
            
        </form>

    </div>
   
</x-app-layout>
