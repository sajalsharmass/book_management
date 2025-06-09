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

    

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
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

    
    <form action="{{url('search')}}" method="get">
        @csrf
        <input type="search" name="search" placeholder="search book name">
        <input type="submit" value="search">
    </form>

    <br>

    <div>
        <table>
            <tr>
                <th>Book Name</th>
                <th>Quantity</th>
                <th>Author</th>
            
            </tr>

            @foreach($data as $data)
                <tr>
                    <td>{{$data->book_title}}</td>
                    <td>{{$data->quantity}}</td>
                    <td>{{$data->author}}</td>
                    <td></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>