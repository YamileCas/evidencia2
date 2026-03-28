<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>

    <form action="{{ route('catalog.store') }}" method="POST">
        @csrf

        <label>Name:</label>
        <input type="text" name="name"><br><br>

        <label>Description:</label>
        <input type="text" name="description"><br><br>

        <label>Price:</label>
        <input type="number" step="0.01" name="price"><br><br>

        <label>Stock:</label>
        <input type="number" name="stock"><br><br>

        <button type="submit">Save</button>
    </form>

    <br>
    <a href="{{ route('catalog.index') }}">Back</a>
</body>
</html>