<?php
class pendaftaran extends Database
{
    // Menampilkan Semua Data
    public function index()
    {
        $datapendaftaran = mysqli_query($this->koneksi, "SELECT pendaftaran.*, jurusan.nama_jurusan as nama_jurusan
                                    FROM pendaftar JOIN jurusan
                                    ON pendaftar.id_jurusan = jurusan.id_jurusan ORDER BY pendaftar.nisn DESC"
        );
        return $datapendaftaran;
    }

    // Menambah Data
    public function create($nisn, $nama, $alamat, $ttl, $orangtua, $notlp, $jk, $askol, $id_jurusan)
    {
        mysqli_query(
            $this->koneksi,
            "insert into pendaftaran values(null, '$nisn', '$nama', $alamat '$ttl', '$orangtua',
             '$notlp', '$jk', '$askol', '$id_jurusan')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($nisn)
    {
        $datapendaftaran = mysqli_query(
            $this->koneksi,
            "SELECT pendaftaran.*, jurusan.nama_jurusan as nama_jurusan
            FROM pendaftar JOIN jurusan
             ON pendaftar.id_jurusan = jurusan.id_jurusan ORDER BY pendaftar.nisn"
        );
        return $datapendaftaran;
    }

    // Menampilkan data berdasarkan id
    public function edit($nisn)
    {
        $datapendaftaran = mysqli_query(
            $this->koneksi,
            "select * from pendaftar where nisn='$nisn'"
        );
        return $datapendaftaran;
    }
    // mengupdate data berdasarkan id
    public function update($nisn, $nama, $alamat, $ttl, $orangtua, $notlp, $jk, $askol, $id_jurusan)
    {
        mysqli_query(
            $this->koneksi,
            "update mahasiswa set nisn = $nisn, nama = $nama, alamat = $alamat, ttl = $ttl,orangtua = $orangtua, 
            notlp = $notlp,jk = $jk, askol = $askol, id_jurusan = $id_jurusan where nisn='$nisn'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($nisn)
    {
        mysqli_query($this->koneksi, "delete from mahasiswa where nisn='$nisn'");
    }
}
