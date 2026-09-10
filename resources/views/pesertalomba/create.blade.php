<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page peserta lomba</title>
</head>
<body>
    <a href="{{ route('pesertalomba.create') }}">Add New Peserta Lomba (create)</a>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pesertalomba as $index => $peserta)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $peserta->nama_peserta }}</td>
                    <td>{{ $peserta->email }}</td>
                    <td>
                        <a href="{{ route('pesertalomba.edit', $peserta->id) }}">Edit</a>
                        <form action="{{ route('pesertalomba.destroy', $peserta->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>