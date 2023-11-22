<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>Edit Mahasiswa</h2>
    <?php echo form_open('Mahasiswa1/update/' . $id); ?>

    <label for="nama">Nama :</label>
    <input type="text" name="nama" value="<?php echo $nama; ?>"><br>

    <label for="nim">NIM</label>
    <input type="text" name="nim" value="<?php echo $nim; ?>"><br>

    <input type="submit" name="submit" value="Update Mahasiswa">
    </form>
</body>
</html>
