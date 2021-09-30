<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <nav>
            <a href="jurusan">jurusan</a> |
            <a href="index.php">Pendafataran</a>
        </nav>
    </center>
    <center>Data Pendaftar</center>
    <fieldset>
        <legend>Data Pendaftar</legend>
        <a href="create.php">Tambah Data Pendaftar</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nisn</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Orang Tua / Wali</th>
                <th>no telepon</th>
                <th>Jenis kelamin</th>
                <th>Asal Sekolah</th>
                <th>Jurusan</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
include '../database.php';
$pendaftaran = new pendaftaran();
$no = 1;
// var_dump($mahasiswa->index());
foreach ($pendaftaran->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nisn']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['ttl']; ?></td>
                    <td><?php echo $data['orangtua']; ?></td>
                    <td><?php echo $data['notlp']; ?></td>
                    <td><?php echo $data['jk']; ?></td>
                    <td><?php echo $data['askol']; ?></td>
                    <td><?php echo $data['nama_jurusan']; ?></td>

                    <td>
                        <a href="show.php?id=<?php echo $data['nisn']; ?>">Show</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['nisn']; ?>">Edit</a>
                    </td>
                    <td>
                        <form action="proses.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $data['nisn']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php
}
?>
    </fieldset>
</body>

</html>