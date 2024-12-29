<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('testp') }}" method="POST" enctype="multipart/form-data">
        @csrf
        </br>
        </br>
        @if (session('success'))
            <h1>{{ session('success') }}</h1>
        @endif
        <input type="text" name="product" value="{{ old('product') }}" /><br />
        @error('product')
            <p>{{ $message }}</p>
        @enderror
        <input type="number" name="price" /><br />
        @error('price')
            <p>{{ $message }}</p>
        @enderror
        <input type="file" name="image" /><br />
        @error('image')
            <p>{{ $message }}</p>
        @enderror
        <button type="submit">Submit</button>
    </form>
</body>

</html>
