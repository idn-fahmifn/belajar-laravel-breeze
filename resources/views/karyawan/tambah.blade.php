<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Karyawan</title>
</head>
<body>
    <h1>Halaman Tambah Data Karyawan</h1>

    <form action="{{route('karyawan.store')}}" method="post">
        @csrf 
        <div class="form-group">
            <label for="">Nama Karyawan</label>
            <input type="text" name="nama_karyawan">
        </div>
        <div class="form-group">
            <label for="">NIP</label>
            <input type="number" name="nip">
        </div>
        <div class="form-group">
            <label for="">No HP</label>
            <input type="number" name="no_hp">
        </div>
        <div class="form-group">
            <label for="">Departemen</label>
            <select name="departemen">
                <option value="HRD">HRD</option>
                <option value="General Affairs">General Affairs</option>
                <option value="Direktorat">Direktorat</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit">Tambah Siswa</button>
        </div>
    </form>
</body>
</html>