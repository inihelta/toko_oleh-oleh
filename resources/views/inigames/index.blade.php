<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('games.create') }}">Tambah Game</a>
    <table>
        <thead>
        <tr>
            <th>nama game</th>
            <th>developer</th>
            <th>genre</th>
            <th>platform</th>
            <th>harga</th>
            <th>tanggal rilis</th>
            <th>deskripsi</th>
        </tr>
        </thead>
        <tbody>
            @foreach ( $games as $game )
            <tr>
                <td>{{ $game->nama_game }}</td>
                <td>{{ $game->developer }}</td>
                <td>{{ $game->genre }}</td>
                <td>{{ $game->platform }}</td>
                <td>{{ $game->harga }}</td>
                <td>{{ $game->tanggal_rilis }}</td>
                <td>{{ $game->deskripsi }}</td>
                <td>
                    <a href="{{ route('games.edit', $game->id) }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>