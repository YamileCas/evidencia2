<h1>Create User</h1>

<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <input type="number" name="user_number" placeholder="User Number"><br>
    <input type="text" name="name" placeholder="Name"><br>
    <input type="password" name="password" placeholder="Password"><br>

    <select name="role">
        <option value="Usuario">Usuario</option>
        <option value="Empleado">Empleado</option>
        <option value="Admin">Admin</option>
    </select><br>

    <button type="submit">Save</button>
</form>