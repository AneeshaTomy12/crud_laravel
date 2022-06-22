<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Stuent Details</h2>
    <a href="create/">Register</a>
    <table>
        <tr>
            <td>Name</td>
            <td>Age</td>
            <td>Mark</td>
        </tr>
        @foreach($data1 as $i)
            <tr><td>{{$i->name}}</td>
                <td>{{$i->age}}</td>
                <td>{{$i->mark}}</td>
                <td><a href="edit/{{$i->id}}">Edit</a></td>
                <td><a href="delete/{{$i->id}}" onclick="confirm('are you sure??')">Delete</a></td></tr>
        @endforeach
</table>

    
</body>
</html>