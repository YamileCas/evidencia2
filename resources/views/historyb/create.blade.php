<h1>Create History</h1>

<form action="{{ route('historyb.store') }}" method="POST">
    @csrf

    <label>User:</label>
    <select name="user_id">
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select><br><br>

    <label>Order:</label>
    <select name="order_id">
        @foreach ($orders as $order)
            <option value="{{ $order->id }}">{{ $order->id }}</option>
        @endforeach
    </select><br><br>

    <label>Date:</label>
    <input type="date" name="purchase_date"><br><br>

    <button type="submit">Save</button>
</form>