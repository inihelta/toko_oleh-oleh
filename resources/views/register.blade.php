<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Regis Manual</title>
</head>
<body>
    <h2>Register ke Sistem</h2>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div style="margin-bottom: 10px;">
            <label>Email:</label><br>
            <input type="email" name="email" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label>Username:</label><br>
            <input type="text" name="name" required>
        </div>
        
        <div style="margin-bottom: 10px;">
            <label>Password:</label><br>
            <input type="password" name="password" required>
        </div>
        
        <button type="submit">Register</button>
    </form>
</body>
</html>