<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>
<body>
   
    <img src="{{ public_path('logo.jpg') }}" alt="logo" width="100" style="margin-left:300px; margin-bottom:20px;">
<table border="1" style="background-color: rgb(48, 70, 14);">
   
    <tr>
        <th style="width: 10%">Id</th>
        <th>Name</th>
        <th>Email</th>
        <th style="width: 10%">Price</th>
    </tr>
    @if ($orders->isNotEmpty())
    @foreach ($orders as $order)
        
   
    <tr>
        <td>{{ $order->id }}</td>
        <td>{{ $order->name }}</td>
        <td>{{ $order->email }}</td>
        <td>${{ $order->total }}</td>   
    </tr>
    @endforeach
        
    @endif
</table>
</body>
</html>