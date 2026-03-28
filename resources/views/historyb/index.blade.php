<h1>Purchase History</h1>

<a href="{{ route('historyb.create') }}">Create Record</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>User</th>
        <th>Order</th>
        <th>Date</th>
        <th>Actions</th>
    </tr>

    @foreach ($history as $h)
    <tr>
        <td>{{ $h->id }}</td>
        <td>{{ $h->user_id }}</td>
        <td>{{ $h->order_id }}</td>
        <td>{{ $h->purchase_date }}</td>
        <td>
            <a href="{{ route('historyb.show', $h->id) }}">Show</a>
            <a href="{{ route('historyb.edit', $h->id) }}">Edit</a>

            <form action="{{ route('historyb.destroy', $h->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>