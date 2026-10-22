<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Manual</title>
</head>
<body>
    <h2>Login ke Sistem</h2>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div style="margin-bottom: 10px;">
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>
        
        <div style="margin-bottom: 10px;">
            <label>Password:</label><br>
            <input type="password" name="password" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label>
                <input type="checkbox" name="remember" value="1">
                Ingat saya
            </label>
        </div>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>