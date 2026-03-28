<h1>Edit User</h1>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="number" name="user_number" value="{{ $user->user_number }}"><br>
    <input type="text" name="name" value="{{ $user->name }}"><br>
    <input type="password" name="password" placeholder="New Password"><br>

    <select name="role">
        <option value="Usuario" {{ $user->role == 'Usuario' ? 'selected' : '' }}>Usuario</option>
        <option value="Empleado" {{ $user->role == 'Empleado' ? 'selected' : '' }}>Empleado</option>
        <option value="Admin" {{ $user->role == 'Admin' ? 'selected' : '' }}>Admin</option>
    </select><br>

    <button type="submit">Update</button>
</form>