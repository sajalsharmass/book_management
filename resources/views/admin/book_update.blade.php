<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
    
    </x-app-layout>

    <h1>update book </h1><br>
    <form action="{{url('update_book', $data->id)}}" method="post">
        @csrf
        <label>book name</label>
        <input type="text" name="book_name" value="{{$data->book_title}}">

        <label>quantity</label>
        <input type="text" name="quantity" value="{{$data->quantity}}">

        <label>author</label>
        <input type="text" name="author" value="{{$data->author}}">

        <input type="submit" value="Update">
    </form>
</body>
</html>