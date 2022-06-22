<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit</h2>
    <form method="post" action="/edit/{{$data1->id}}">
    @csrf 
        <input type="text" name="fname" value="{{$data1->name}}">
        <input type="text" name="age" value="{{$data1->age}}">
        <input type="text" name="mark" value="{{$data1->mark}}">
        <input type="submit">
