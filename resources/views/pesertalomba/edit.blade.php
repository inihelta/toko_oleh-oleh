<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('pesertalomba.update', $pesertalomba->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="">
            <label for="nama_peserta">Nama:</label>
            <input type="text" name="nama_peserta" id="nama_peserta" value="{{ $pesertalomba->nama_peserta }}" required>
        </div>

        <div class="">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $pesertalomba->email }}" required><br>
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>