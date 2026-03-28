<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalog</title>
</head>
<body>
    <h1>Catalog</h1>

    <a href="{{ route('catalog.create') }}">Create Product</a>

    <br><br>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($catalogs as $catalog)
                <tr>
                    <td>{{ $catalog->id }}</td>
                    <td>{{ $catalog->name }}</td>
                    <td>{{ $catalog->description }}</td>
                    <td>{{ $catalog->price }}</td>
                    <td>{{ $catalog->stock }}</td>
                    <td>
                        <a href="{{ route('catalog.show', $catalog->id) }}">Show</a>
                        <a href="{{ route('catalog.edit', $catalog->id) }}">Edit</a>

                        <form action="{{ route('catalog.destroy', $catalog->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>