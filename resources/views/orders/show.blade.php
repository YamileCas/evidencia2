<h1>Order Detail</h1>

<p>ID: {{ $order->id }}</p>
<p>Order Number: {{ $order->order_number }}</p>
<p>User ID: {{ $order->user_id }}</p>
<p>Client: {{ $order->client }}</p>
<p>Date: {{ $order->date }}</p>
<p>RFC: {{ $order->rfc }}</p>
<p>Address: {{ $order->address }}</p>
<p>Status: {{ $order->status }}</p>

<a href="{{ route('orders.index') }}">Back</a>