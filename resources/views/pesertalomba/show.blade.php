<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page peserta lomba</title>
</head>
<body>
    <a href="{{ route('pesertalomba.index') }}">Kembali ke Daftar Peserta Lomba</a>
    
    <h1>Detail Peserta Lomba</h1>
    <span> nama: {{ $pesertalomba->nama_peserta }}</span>
    <br>
    <span> email: {{ $pesertalomba->email }}</span>
</body>
</html>