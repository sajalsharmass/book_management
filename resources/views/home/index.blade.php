<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 40px;
        color: #333;
    }

    h1 {
        color: #2c3e50;
        margin-bottom: 10px;
    }

    a {
        display: inline-block;
        padding: 10px 15px;
        background-color: #3498db;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        margin-top: 10px;
    }

    a:hover {
        background-color: #2980b9;
    }
    </style>
</head>
<body>

    <x-app-layout>
    
    </x-app-layout>

    <h1> User page</h1>

    <a href="{{url('book_page')}}"> View list </a>

    

</body>
</html>