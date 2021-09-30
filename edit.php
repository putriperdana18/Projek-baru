<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Data</title>
</head>
<?php
include '../database.php';
$jurusan = new jurusan();

$pendaftaran = new pendaftaran();
foreach ($pendaftaran->edit($_GET['nisn']) as $data) {
    $nisn = $data['nisn'];
    $nama = $data['nama']; 
    $alamat = $data['alamat'];
    $ttl = $data['ttl'];
    $orangtua = $data['orangtua']; 
    $notlp = $data['notlp'];
    $jk = $data['jk'];
    $askol = $data['askol']; 
    $id_jurusan = $data['id_jurusan'];
}
?>
<body>
    <fieldset>
        <legend>Input Data Pendaftar</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="update">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
            <tr>
                    <th>nisn</th>
                    <td><input type="number" name="nisn" required></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" rows="10" cols="30"></td>
                </tr>
                <tr>
                    <th>Tanggal lahir</th>
                    <td><input type="date" name="ttl" required></td>
                </tr>
                <tr>
                    <th>Nama Orang Tua / Wali </th>
                    <td><input type="text" name="orangtua" required></td>
                </tr>
                <tr>
                    <th>Nomor Telepon</th>
                    <td><input type="number" name="notlp" required></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><input type="radio" name="jk" value="Laki-laki" checked> Laki-laki
                    <input type="radio" name="jk" value="Perempuan"> Perempuan</td>
                </tr>
                <tr>
                    <th>Asal Sekolah</th>
                    <td><input type="number" name="askol" required></td>
                </tr>
                <tr>
                    <th>Pilih jurusan</th>
                    <td>
                        <select name="id_jurusan">
                            <?php
                                foreach ($jurusan->index() as $data) {?>
                                <option value="<?php echo $data['id_jurusan']; ?>"><?php echo $data['nama_jurusan']; ?></option>
                            <?php }?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="save" >Simpan </button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>