<h1>User</h1>

<p>ID: {{ $user->id }}</p>
<p>User Number: {{ $user->user_number }}</p>
<p>Name: {{ $user->name }}</p>
<p>Role: {{ $user->role }}</p>

<a href="{{ route('users.index') }}">Back</a>