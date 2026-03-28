<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Product</title>
</head>
<body>
    <h1>Product Details</h1>

    <p><strong>ID:</strong> {{ $catalog->id }}</p>
    <p><strong>Name:</strong> {{ $catalog->name }}</p>
    <p><strong>Description:</strong> {{ $catalog->description }}</p>
    <p><strong>Price:</strong> {{ $catalog->price }}</p>
    <p><strong>Stock:</strong> {{ $catalog->stock }}</p>

    <a href="{{ route('catalog.index') }}">Back</a>
</body>
</html>