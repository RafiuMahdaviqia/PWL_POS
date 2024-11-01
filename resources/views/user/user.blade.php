<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data user</title>
</head>
<body>
    {{-- Jobsheet 3 --}}
    {{-- <h1>Data user</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Nama</td>
            <td>ID Level pengguna</td>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td> {{$d->user_id}} </td>
                <td> {{$d->username}} </td>
                <td> {{$d->nama}} </td>
                <td> {{$d->level_id}} </td>
            </tr>
        @endforeach
    </table> --}}

    {{-- Jobsheet 4 --}}
    {{-- <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Nama</td>
            <td>ID Level pengguna</td>
        </tr>
        <tr>
            <td> {{$data->user_id}} </td>
            <td> {{$data->username}} </td>
            <td> {{$data->nama}} </td>
            <td> {{$data->level_id}} </td>
        </tr> --}}

        {{-- prak 2.3 --}}
        <h1>Data user</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>Jumlah Pengguna</th>
            </tr>
            <tr>
                <td> {{$data}} </td>
            </tr>
        </table>
</body>
</html>