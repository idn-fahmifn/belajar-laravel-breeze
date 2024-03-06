<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Buku</title>
</head>
<body>
    
    <h1>Perpustakaan IDN Boarding School.</h1>
    <p>Input data buku</p>

    <form action="perpustakaan" method="post">
        @csrf 
        <div class="form-group">
            <label>Nama Buku</label>
            <input type="text" name="nama_buku">
        </div>
        <div class="form-group">
            <label>Penulis</label>
            <input type="text" name="penulis">
        </div>
        <div class="form-group">
            <label>Penerbit</label>
            <input type="text" name="penerbit">
        </div>
        <div class="form-group">
            <button type="submit">Tambah Buku</button>
        </div>
    </form>


</body>
</html>