<?php
class jurusan extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datajurusan = mysqli_query($this->koneksi, "select * from jurusan");
        // var_dump($datadosen);
        return $datajurusan;
    }

    // Menambah Data
    public function create($id_jurusan, $nama_jurusan)
    {
        mysqli_query(
            $this->koneksi,
            "insert into jurusan values(null,'$id_jurusan','$nama_jurusan')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id_jurusan)
    {
        $datajurusan = mysqli_query(
            $this->koneksi,
            "select * from jurusan where id_jurusan='$id_jurusan'"
        );
        return $datadosen;
    }

    // Menampilkan data berdasarkan id
    public function edit($id_jurusan)
    {
        $datadosen = mysqli_query(
            $this->koneksi,
            "select * from jurusan where id_jurusan='$id_jurusan'"
        );
        return $datajurussan;
    }
    // mengupdate data berdasarkan id
    public function update($id_jurusan, $nama_jurusan)
    {
        mysqli_query(
            $this->koneksi,
            "update jurusan set nama='$nama_jurusan'' where id_jurusan='$id_jurusan'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id_jurusan)
    {
        mysqli_query($this->koneksi, "delete from jurusan where id_jurusan='$id_jurusan'");
    }
}
