<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AllPost</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style type="text/css">
    table
    {
        border: 1px solid rgb(0, 0, 0);
    }
    th {
        padding: 20px;
        text-align: center;
        color: white;
        background-color: blue;
        font-size: 15px;
    }
    td
    {
        text-align: center;
        font-size: 13px;
        background-color: rgb(50, 50, 50);
        color: white;
    }
    img {
        border-radius: 8px;
        height: 150px;

    }

    </style>
</head>
<body>
<center>
    <h2>All Post</h2>
    <table>
        <tr>
            <th>Post Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Edit</th>
        </tr>

        @foreach ($post as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td> <img width="150" src="post/{{$post->image}}"> </td>

            <td>
                <a class="btn btn-primary" href="{{url('edit_post',$post->id )}}">Edit</a></a>
            </td>
        </tr>
        @endforeach
        
    </table>
</center>
</body>
</html>
