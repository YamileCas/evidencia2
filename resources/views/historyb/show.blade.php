<h1>History Detail</h1>

<p>ID: {{ $record->id }}</p>
<p>User: {{ $record->user_id }}</p>
<p>Order: {{ $record->order_id }}</p>
<p>Date: {{ $record->purchase_date }}</p>

<a href="{{ route('historyb.index') }}">Back</a>