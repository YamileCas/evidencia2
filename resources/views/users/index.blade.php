<h1>Users</h1>

<a href="{{ route('users.create') }}">Create User</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>User Number</th>
        <th>Name</th>
        <th>Role</th>
        <th>Actions</th>
    </tr>

    @foreach ($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->user_number }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->role }}</td>
        <td>
            <a href="{{ route('users.show', $user->id) }}">Show</a>
            <a href="{{ route('users.edit', $user->id) }}">Edit</a>

            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>