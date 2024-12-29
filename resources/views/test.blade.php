<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1><a href="{{ URL::to('test') }}">Go</a></h1>
    <table border="1px">
        <thead>
            <tr>
                <th>Sl</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($infos as $info)
                <tr>
                    <td>{{ $info->id }}</td>
                    <td>{{ $info->product }}</td>
                    <td>{{ $info->price }}</td>
                    <td>{{ $info->image }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
