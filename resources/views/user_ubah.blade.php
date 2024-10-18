<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <h1>Form Ubah Data User</h1>
        <a href="/user">Kembali</a>
        <br><br>
        <form method="post" action="{{ url('/user/ubah_simpan/' . $data->user_id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <label for="Username">Username</label>
            <input type="text" name="username" placeholder="Masukkan Username" value="{{ $data->username }}">
            <br>
            <label for="Name">Name</label>
            <input type="text" name="nama" placeholder="Masukkan Nama" value="{{ $data->nama }}">
            <br>
            <label for="Password">Password</label>
            <input type="password" name="password" placeholder="Masukkan Password" value="{{ $data->password }}">
            <br>
            <label for="Level ID">Level ID</label>
            <input type="text" name="level_id" placeholder="Masukkan ID Level" value="{{ $data->level_id }}">
            <br><br>
            <input type="submit" class="btn btn-success" value="Ubah">
        </form>
    </body>
</html>