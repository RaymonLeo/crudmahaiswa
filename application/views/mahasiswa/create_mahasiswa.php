<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <h2>Tambah Mahasiswa</h2>
    <?php echo validation_errors(); ?>
    <?php echo form_open('Mahasiswa1/create'); ?>
    <label for="nama">Nama :</label>
    <input type="text" name="nama"><br>

    <label for="nim">NIM</label>
    <input type="text" name="nim"><br>

    <input type="submit" name="submit" value="Tambah Mahasiswa">
</body>

</html>