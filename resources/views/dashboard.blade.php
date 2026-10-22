<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat Datang di Dashboard, {{ Auth::user()->name ?? 'Pengguna' }}!</h2>

    <p>Halo, <strong>{{ Auth::user()->name ?? 'Pengguna' }}</strong> ({{ Auth::user()->email ?? '' }}). Anda berhasil login ke sistem.</p>

    <div style="margin-top: 20px;">
        <a href="{{ route('logout') }}">Logout</a>
    </div>
</body>
</html>