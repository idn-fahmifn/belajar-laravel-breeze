<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hi, nama saya sedang belajar Laravel</h1>

    <form action="kirim" method="post">
        <!-- csrf security untuk keamanan setiap data -->
        <!-- ini digunakan untuk setiap form -->
        @csrf
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="first_name">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="last_name">
        </div>
        <div class="form-group">
            <button type="submit">Tambahkan Data</button>
        </div>
    </form>

</body>

</html>
