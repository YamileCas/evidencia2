<h1>Edit History</h1>

<form action="{{ route('historyb.update', $record->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>User:</label>
    <select name="user_id">
        @foreach ($users as $user)
            <option value="{{ $user->id }}" {{ $record->user_id == $user->id ? 'selected' : '' }}>
                {{ $user->name }}
            </option>
        @endforeach
    </select><br><br>

    <label>Order:</label>
    <select name="order_id">
        @foreach ($orders as $order)
            <option value="{{ $order->id }}" {{ $record->order_id == $order->id ? 'selected' : '' }}>
                {{ $order->id }}
            </option>
        @endforeach
    </select><br><br>

    <label>Date:</label>
    <input type="date" name="purchase_date" value="{{ $record->purchase_date }}"><br><br>

    <button type="submit">Update</button>
</form>