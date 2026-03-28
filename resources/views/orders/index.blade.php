<h1>Orders</h1>

<a href="{{ route('orders.create') }}">Create Order</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Order Number</th>
        <th>User ID</th>
        <th>Client</th>
        <th>Date</th>
        <th>RFC</th>
        <th>Address</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>

    @foreach ($orders as $order)
    <tr>
        <td>{{ $order->id }}</td>
        <td>{{ $order->order_number }}</td>
        <td>{{ $order->user_id }}</td>
        <td>{{ $order->client }}</td>
        <td>{{ $order->date }}</td>
        <td>{{ $order->rfc }}</td>
        <td>{{ $order->address }}</td>
        <td>{{ $order->status }}</td>
        <td>
            <a href="{{ route('orders.show', $order->id) }}">Show</a>
            <a href="{{ route('orders.edit', $order->id) }}">Edit</a>

            <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>