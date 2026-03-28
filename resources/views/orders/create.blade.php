<h1>Create Order</h1>

<form action="{{ route('orders.store') }}" method="POST">
    @csrf

    <label>Order Number:</label>
    <input type="number" name="order_number"><br>

    <label>User:</label>
    <select name="user_id">
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select><br>

    <label>Client:</label>
    <input type="text" name="client"><br>

    <label>Date:</label>
    <input type="date" name="date"><br>

    <label>RFC:</label>
    <input type="text" name="rfc"><br>

    <label>Address:</label>
    <input type="text" name="address"><br>

    <label>Status:</label>
    <select name="status">
        <option value="Process">Process</option>
        <option value="Completed">Completed</option>
        <option value="Cancelled">Cancelled</option>
    </select><br>

    <button type="submit">Save</button>
</form>