<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-app-layout>

        <div style="padding-left: 40%; padding-top: 10%; ">

            <form action="{{url('confirm_update',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
<div>
    <label for="">Post Description</label>
    <input type="text" name="description" id="" value="{{$data->description}}">
</div>
<br>

<div>
    <label for="">Current Image:</label>
    <img src="/post/{{$data->image}}" height="400px" width="400px" alt="">
</div>
<br>
<div>
    <label for="">Update Image:</label>
    <input type="file" name="image" id="">
</div>
<br>
<div>
    <input type="submit" value="Update Post" name="" id="" style="background-color: rgb(122, 112, 210); cursor: pointer; padding: 10px; border-radius: 10px">
</div>

            </form>
        </div>

    </x-app-layout>

</body>
</html>