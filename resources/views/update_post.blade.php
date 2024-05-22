<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style type="text/css">

        .div_deg
        {
            padding: 15px;
        }
        label
        {
            display: inline-block;
            width: 100px;
        }
    </style>

    <title>Update Post</title>

</head>
<body>
<center>
    <h1>Update Post</h1>
    
    <form action="{{url('update_post', $data->id)}}" method="Post" enctype="multipart/form-data">

        @csrf

        <div class="div_deg">
            <label>Title</label>
            <input type="text" name="title" value="{{$data->title}}">
        </div>

        <div class="div_deg">
            <label>Description</label>
            <textarea name="description">{{$data->description}}</textarea>
        </div>

        <div class="div_deg">
            <label>Old Image</label>
            <img width="150" src="/post/{{$data->image}}"
        </div>

        <div class="div_deg">
            <label>Change Image</label>
            <input type="file" name="image">
        </div>

        <div class="div_deg">
            <input type="Submit" class="btn btn-secondary" value="Update Post">
        </div>
    </form>
</center>
</body>
</html>
