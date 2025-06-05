<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f7f7f7;
        }

        form {
            background-color: #fff;
            padding: 15px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            width: 300px;
        }

        form div {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        table {
            width: 100%;
            background-color: #fff;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
        <x-app-layout>
    
        </x-app-layout>

    book page

    <form action="{{url('add_books')}}" method="Post">
        @csrf
        <div>
            <label>Book title</label>
            <input type="text" name="book_name" required>    
        </div>
        <div>
            <label>Book quantity</label>
            <input type="text" name="book_quantity" required>    
        </div>
        <div>
            <label>Book author</label>
            <input type="text" name="book_author">    
        </div>

        <input type="submit" value="add book">

    </form>
    <div>
            @if(session()->has('message'))
            <div>
                {{session()->get('message')}}

            </div>
            @endif
    </div>

    <div>
        <table>
            <tr>
                <th>Book Name</th>
                <th>Quantity</th>
                <th>Author</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>

            @foreach($data as $data)
                <tr>
                    <td>{{$data->book_title}}</td>
                    <td>{{$data->quantity}}</td>
                    <td>{{$data->author}}</td>
                    <td><a href="{{url('book_update', $data->id)}}">update</a></td>
                    <td><a href="{{url('book_delete', $data->id)}}">delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>