<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        Username
        <input type="text" name="username" value="{{ old('username') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        ID Number
        <input type="text" name="id_number">
    </div>

    <div>
        Name
        <input type="text" name="name">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>