<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>

    <form action="{{ route('catalog.update', $catalog->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" name="name" value="{{ $catalog->name }}"><br><br>

        <label>Description:</label>
        <input type="text" name="description" value="{{ $catalog->description }}"><br><br>

        <label>Price:</label>
        <input type="number" step="0.01" name="price" value="{{ $catalog->price }}"><br><br>

        <label>Stock:</label>
        <input type="number" name="stock" value="{{ $catalog->stock }}"><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('catalog.index') }}">Back</a>
</body>
</html>