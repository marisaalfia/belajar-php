-- membuat database
CREATE DATABASE fakultas;

-- membuat tabel
CREATE TABLE jurusan(
    id  INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);

CREATE TABLE mahasiswa(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin ENUM('laki-laki','perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(50) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
    );

-- memasukkan data pada tabel jurusan dan mahasiswa 
INSERT INTO jurusan VALUES
    (NULL,'APBL','Administrasi Publik'),
    (NULL, 'TRPL','Teknologi Rekayasa Perangkat Lunak'),
    (NULL, 'TPHT','Teknologi Pengolahan Hasil Ternak');

INSERT INTO mahasiswa VALUES
    (NULL, 1, "36401060","Marisa","perempuan","Banyuwangi","2002-03-23","Jl.Sumbing"),
    (NULL, 2, "36401061","Wahid","laki-laki","Banyuwangi","2000-08-22","Jl.Bromo"),
    (NULL, 1, "36401059","Suci","perempuan","Banyuwangi","2001-06-02","Jl.Riau");

-- mengubah data pada tabel mahasiswa
UPDATE mahasiswa SET tempat_lahir = "Bali" where id = 11;
UPDATE mahasiswa SET alamat = "Jl.Batur" where id = 12;

-- menghapus data pada tabel mahasiswa
DELETE FROM mahasiswa WHERE id = 12;