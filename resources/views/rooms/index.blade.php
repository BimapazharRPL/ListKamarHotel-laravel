

<h2>Formulir Input Kamar Hotel</h2>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
@include('layouts.separate.navbar')
    
<div class="ab">
<h2>Formulir Input Kamar Hotel</h2>
<a href="{{ route('rooms.create') }}" class="btn btn-primary mb-3">+ Create New Rooms</a>
<table class="table table-head-fixed text-nowrap">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Kamar</th>
            <th>Type Kamar</th>
            <th>Harga</th>
            <th>Fasilitas</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($rooms as $key => $room)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $room->no_kamar }}</td>
            <td>{{ $room->type_kamar }}</td>
            <td>{{ $room->harga }} Ribu Rp</td>
            <td>{{ $room->fasilitas }}</td>
            <td>
                <a href="{{ route('rooms.show', $room->id) }}" class="btn btn-sm btn-info">Show</a>
                <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="8" style="text-align: center;" >Data Masih Kosong</td>
        </tr>
        @endforelse
    </tbody>
</table>
</div>
    <style>
        *,
        html {
            top: 0;
            right: 0;
            left: 0;
        }
        body {
            background-color: #d1d1d1;
        }
        .ab {
            max-width: 800px;
            margin: 6rem auto;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 3rem;
            /* text-align: center; */
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            margin-bottom: 10px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
        }

        .table th, .table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid peru;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #ffff;
        }

        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }

        .btn-info {
            background-color: #17a2b8;
        }

        .btn-warning {
            background-color: #ffc107;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-info, .btn-warning, .btn-danger {
            color: #fff;
            padding: 5px 10px;
            border-radius: 3px;
        }

        .btn-info:hover, .btn-warning:hover, .btn-danger:hover {
            opacity: 0.8;
        }
        tr td {
            text-align: center;
        }

        td {
            vertical-align: middle;
            
        }

        tr:nth-child(even) {
            /* background-color: #f2f2f2; */
        }

        
    </style>
</body>
</html>

    