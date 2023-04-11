-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Mar 2023 pada 11.30
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smpktsp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id` int(11) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `nip` int(20) NOT NULL,
  `jk_guru` enum('L','P') NOT NULL,
  `guru_status` enum('GURU AKTIF','WALI KELAS') NOT NULL,
  `status_pegawai` enum('PNS','SUKWAN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`id`, `nama_guru`, `nip`, `jk_guru`, `guru_status`, `status_pegawai`) VALUES
(11, 'M. sulton Rohad', 239873, 'P', 'WALI KELAS', 'SUKWAN'),
(12, 'Anis Wahyudi', 5432161, 'L', 'GURU AKTIF', 'PNS'),
(13, 'Endah Yulismiati', 5432161, 'P', 'GURU AKTIF', 'PNS'),
(14, 'Diana Indriasari', 5432161, 'L', 'GURU AKTIF', 'PNS'),
(15, 'Sukesi', 5432161, 'P', 'GURU AKTIF', 'PNS'),
(16, 'Agus Setyono', 543216, 'L', 'GURU AKTIF', 'PNS'),
(17, 'Yanuar Lukmani Erfan', 5432161, 'L', 'GURU AKTIF', 'PNS'),
(18, 'Nyami Endang S', 5432161, 'P', 'GURU AKTIF', 'PNS'),
(19, 'M. Rendi bagus Yahya', 5432161, 'L', 'GURU AKTIF', 'PNS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` varchar(20) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `nama_guru` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `nama_kelas`, `nama_guru`) VALUES
('11', 'KELAS X11', ''),
('8', 'KELAS 8', ''),
('9', 'KELAS 9', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id_mapel` int(20) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `kode_mapel` varchar(20) NOT NULL,
  `id_semester` enum('1','2') NOT NULL,
  `nama_guru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id_mapel`, `nama_mapel`, `kode_mapel`, `id_semester`, `nama_guru`) VALUES
(15, 'Pendidikan Agama', 'PAI', '1', 'Anis Wahyudi'),
(16, 'Pendidikan Kewarganegaraan', 'PKN', '1', 'M. sulton Rohadi'),
(17, 'Bahasa Indonesia', 'BIND', '1', 'Anis Wahyudi'),
(18, 'Bahasa Inggris', 'BING', '1', 'Endah Yulismiati'),
(19, 'Matematika', 'MTK', '1', 'Agus Setyono'),
(20, 'Ilmu Pengetahuan Alam', 'IPA', '1', 'Sukesi'),
(21, 'Ilmu Pengetahuan Sosial', 'IPS', '1', 'Yanuar Lukmani Erfan'),
(22, 'Seni Budaya', 'SB', '1', 'Diana Indriasari'),
(23, 'Pendidikan Jasmani, Olahraga dan Kesehatan', 'PJK', '1', 'Yanuar Lukmani Erfan'),
(24, 'Bahasa Jawa', 'BJ', '1', 'Muhamad Soim'),
(25, 'Teknologi Infornasi dan Komunikasi', 'TIK', '1', 'Nyami Endang S'),
(26, 'KIMIA DASAR', 'KM', '1', 'M. Rendi bagus Yahya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id` int(200) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `id_semester` enum('1','2') NOT NULL,
  `tahun_ajar` varchar(20) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `nilai_umum` varchar(100) NOT NULL,
  `nilai_huruf` enum('SB','B','KB') NOT NULL,
  `ekstra` varchar(20) NOT NULL,
  `nilai_ekstra` varchar(20) NOT NULL,
  `sakit` int(10) NOT NULL,
  `izin` int(100) NOT NULL,
  `alfa` int(10) NOT NULL,
  `akhlak` varchar(11) NOT NULL,
  `kepribadian` varchar(11) NOT NULL,
  `ket` varchar(11) NOT NULL,
  `kd_raport` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id`, `nama`, `nisn`, `nama_kelas`, `id_semester`, `tahun_ajar`, `nama_mapel`, `nilai_umum`, `nilai_huruf`, `ekstra`, `nilai_ekstra`, `sakit`, `izin`, `alfa`, `akhlak`, `kepribadian`, `ket`, `kd_raport`) VALUES
(641, 'Albert Einsten', '241', '7', '1', '2018/2019 Ganjil', '  Bahasa Indonesia', '30', 'SB', 'bagus', 'bagus', -1, 2, -2, 'bagus', 'bagus', 'bagus', '1626'),
(642, 'Albert Einsten', '241', '7', '1', '2018/2019 Ganjil', '  Bahasa Inggris', '30', 'SB', 'bagus', 'bagus', -1, 2, -2, 'bagus', 'bagus', 'bagus', '1626'),
(643, 'Albert Einsten', '241', '7', '1', '2018/2019 Ganjil', '  Bahasa Jawa', '30', 'SB', 'bagus', 'bagus', -1, 2, -2, 'bagus', 'bagus', 'bagus', '1626'),
(644, 'Albert Einsten', '241', '7', '1', '2018/2019 Ganjil', '  Ilmu Pengetahuan Alam', '30', 'SB', 'bagus', 'bagus', -1, 2, -2, 'bagus', 'bagus', 'bagus', '1626'),
(645, 'Albert Einsten', '241', '7', '1', '2018/2019 Ganjil', '  Ilmu Pengetahuan Sosial', '30', 'SB', 'bagus', 'bagus', -1, 2, -2, 'bagus', 'bagus', 'bagus', '1626'),
(646, 'Albert Einsten', '241', '7', '1', '2018/2019 Ganjil', '  KIMIA DASAR', '30', 'SB', 'bagus', 'bagus', -1, 2, -2, 'bagus', 'bagus', 'bagus', '1626'),
(647, 'Albert Einsten', '241', '7', '1', '2018/2019 Ganjil', '  Matematika', '30', 'SB', 'bagus', 'bagus', -1, 2, -2, 'bagus', 'bagus', 'bagus', '1626'),
(648, 'Albert Einsten', '241', '7', '1', '2018/2019 Ganjil', '  Pendidikan Agama', '30', 'SB', 'bagus', 'bagus', -1, 2, -2, 'bagus', 'bagus', 'bagus', '1626'),
(649, 'Albert Einsten', '241', '7', '1', '2018/2019 Ganjil', '  Pendidikan Jasmani, Olahraga dan Kesehatan', '30', 'SB', 'bagus', 'bagus', -1, 2, -2, 'bagus', 'bagus', 'bagus', '1626'),
(650, 'Albert Einsten', '241', '7', '1', '2018/2019 Ganjil', '  Pendidikan Kewarganegaraan', '30', 'SB', 'bagus', 'bagus', -1, 2, -2, 'bagus', 'bagus', 'bagus', '1626'),
(651, 'Albert Einsten', '241', '7', '1', '2018/2019 Ganjil', '  Seni Budaya', '30', 'SB', 'bagus', 'bagus', -1, 2, -2, 'bagus', 'bagus', 'bagus', '1626'),
(652, 'Albert Einsten', '241', '7', '1', '2018/2019 Ganjil', '  Teknologi Infornasi dan Komunikasi', '30', 'SB', 'bagus', 'bagus', -1, 2, -2, 'bagus', 'bagus', 'bagus', '1626'),
(653, 'Renalta Hawa Yuniar', '213456', '8', '1', '2018/2019 Ganjil', '  Bahasa Indonesia', '70', 'SB', 'bagus', 'bagus', -3, -2, -2, 'bagus', 'bagus', 'bagus', '1141'),
(654, 'Renalta Hawa Yuniar', '213456', '8', '1', '2018/2019 Ganjil', '  Bahasa Inggris', '70', 'SB', 'bagus', 'bagus', -3, -2, -2, 'bagus', 'bagus', 'bagus', '1141'),
(655, 'Renalta Hawa Yuniar', '213456', '8', '1', '2018/2019 Ganjil', '  Bahasa Jawa', '70', 'SB', 'bagus', 'bagus', -3, -2, -2, 'bagus', 'bagus', 'bagus', '1141'),
(656, 'Renalta Hawa Yuniar', '213456', '8', '1', '2018/2019 Ganjil', '  Ilmu Pengetahuan Alam', '70', 'SB', 'bagus', 'bagus', -3, -2, -2, 'bagus', 'bagus', 'bagus', '1141'),
(657, 'Renalta Hawa Yuniar', '213456', '8', '1', '2018/2019 Ganjil', '  Ilmu Pengetahuan Sosial', '70', 'SB', 'bagus', 'bagus', -3, -2, -2, 'bagus', 'bagus', 'bagus', '1141'),
(658, 'Renalta Hawa Yuniar', '213456', '8', '1', '2018/2019 Ganjil', '  KIMIA DASAR', '70', 'SB', 'bagus', 'bagus', -3, -2, -2, 'bagus', 'bagus', 'bagus', '1141'),
(659, 'Renalta Hawa Yuniar', '213456', '8', '1', '2018/2019 Ganjil', '  Matematika', '70', 'SB', 'bagus', 'bagus', -3, -2, -2, 'bagus', 'bagus', 'bagus', '1141'),
(660, 'Renalta Hawa Yuniar', '213456', '8', '1', '2018/2019 Ganjil', '  Pendidikan Agama', '70', 'SB', 'bagus', 'bagus', -3, -2, -2, 'bagus', 'bagus', 'bagus', '1141'),
(661, 'Renalta Hawa Yuniar', '213456', '8', '1', '2018/2019 Ganjil', '  Pendidikan Jasmani, Olahraga dan Kesehatan', '70', 'SB', 'bagus', 'bagus', -3, -2, -2, 'bagus', 'bagus', 'bagus', '1141'),
(662, 'Renalta Hawa Yuniar', '213456', '8', '1', '2018/2019 Ganjil', '  Pendidikan Kewarganegaraan', '70', 'SB', 'bagus', 'bagus', -3, -2, -2, 'bagus', 'bagus', 'bagus', '1141'),
(663, 'Renalta Hawa Yuniar', '213456', '8', '1', '2018/2019 Ganjil', '  Seni Budaya', '70', 'SB', 'bagus', 'bagus', -3, -2, -2, 'bagus', 'bagus', 'bagus', '1141'),
(664, 'Renalta Hawa Yuniar', '213456', '8', '1', '2018/2019 Ganjil', '  Teknologi Infornasi dan Komunikasi', '70', 'SB', 'bagus', 'bagus', -3, -2, -2, 'bagus', 'bagus', 'bagus', '1141'),
(665, 'DouglasJauharNehru', '1212', '9', '2', '2018/2019 Ganjil', '  Bahasa Indonesia', '90', 'SB', 'bagus', 'bagus', -1, 3, -2, 'bagus', 'bagus', 'wet', '1243'),
(666, 'DouglasJauharNehru', '1212', '9', '2', '2018/2019 Ganjil', '  Bahasa Inggris', '90', 'SB', 'bagus', 'bagus', -1, 3, -2, 'bagus', 'bagus', 'wet', '1243'),
(667, 'DouglasJauharNehru', '1212', '9', '2', '2018/2019 Ganjil', '  Bahasa Jawa', '90', 'SB', 'bagus', 'bagus', -1, 3, -2, 'bagus', 'bagus', 'wet', '1243'),
(668, 'DouglasJauharNehru', '1212', '9', '2', '2018/2019 Ganjil', '  Ilmu Pengetahuan Alam', '90', 'SB', 'bagus', 'bagus', -1, 3, -2, 'bagus', 'bagus', 'wet', '1243'),
(669, 'DouglasJauharNehru', '1212', '9', '2', '2018/2019 Ganjil', '  Ilmu Pengetahuan Sosial', '90', 'SB', 'bagus', 'bagus', -1, 3, -2, 'bagus', 'bagus', 'wet', '1243'),
(670, 'DouglasJauharNehru', '1212', '9', '2', '2018/2019 Ganjil', '  KIMIA DASAR', '90', 'SB', 'bagus', 'bagus', -1, 3, -2, 'bagus', 'bagus', 'wet', '1243'),
(671, 'DouglasJauharNehru', '1212', '9', '2', '2018/2019 Ganjil', '  Matematika', '90', 'SB', 'bagus', 'bagus', -1, 3, -2, 'bagus', 'bagus', 'wet', '1243'),
(672, 'DouglasJauharNehru', '1212', '9', '2', '2018/2019 Ganjil', '  Pendidikan Agama', '90', 'SB', 'bagus', 'bagus', -1, 3, -2, 'bagus', 'bagus', 'wet', '1243'),
(673, 'DouglasJauharNehru', '1212', '9', '2', '2018/2019 Ganjil', '  Pendidikan Jasmani, Olahraga dan Kesehatan', '90', 'SB', 'bagus', 'bagus', -1, 3, -2, 'bagus', 'bagus', 'wet', '1243'),
(674, 'DouglasJauharNehru', '1212', '9', '2', '2018/2019 Ganjil', '  Pendidikan Kewarganegaraan', '90', 'SB', 'bagus', 'bagus', -1, 3, -2, 'bagus', 'bagus', 'wet', '1243'),
(675, 'DouglasJauharNehru', '1212', '9', '2', '2018/2019 Ganjil', '  Seni Budaya', '90', 'SB', 'bagus', 'bagus', -1, 3, -2, 'bagus', 'bagus', 'wet', '1243'),
(676, 'DouglasJauharNehru', '1212', '9', '2', '2018/2019 Ganjil', '  Teknologi Infornasi dan Komunikasi', '90', 'SB', 'bagus', 'bagus', -1, 3, -2, 'bagus', 'bagus', 'wet', '1243');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_profil`
--

CREATE TABLE `tbl_profil` (
  `id` int(20) NOT NULL,
  `nm_sekolah` varchar(100) NOT NULL,
  `npsn` int(30) NOT NULL,
  `jenjang` varchar(20) NOT NULL,
  `akreditasi` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kepsek_nama` varchar(30) NOT NULL,
  `kepsek_nip` varchar(30) NOT NULL,
  `kepsek_pangkat` varchar(30) NOT NULL,
  `kepsek_jabatan` varchar(30) NOT NULL,
  `kepsek_alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_profil`
--

INSERT INTO `tbl_profil` (`id`, `nm_sekolah`, `npsn`, `jenjang`, `akreditasi`, `alamat`, `kepsek_nama`, `kepsek_nip`, `kepsek_pangkat`, `kepsek_jabatan`, `kepsek_alamat`) VALUES
(1, 'SMP Negeri 2 banyakan Satu Atap', 69864655, 'SLTP', 'B', ' Dusun Peso Desa Parang Kecamatan Banyakan', 'IMAM SUHODO, M.Pd', '19711030 1994101 001', 'Pembina/ IVa', 'Guru ahli madya', 'Dusun Geneng Desa Maron Kecama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id` int(200) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `namaayah` varchar(30) NOT NULL,
  `namaibu` varchar(30) NOT NULL,
  `kerjaayah` varchar(20) NOT NULL,
  `kerjaibu` varchar(20) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id`, `nis`, `nisn`, `nama`, `jk`, `tmp_lahir`, `tgl_lahir`, `agama`, `alamat`, `namaayah`, `namaibu`, `kerjaayah`, `kerjaibu`, `nama_kelas`) VALUES
(1, '213456', '2176151', 'Douglas Jauhar', '', 'kediri', '0000-00-00', 'Islam', 'Kediri', 'Ayah', 'Ibu', 'Kerja Ayah', 'Kerja Ibu', ''),
(6, '213456', '12345671', 'Renalta Hawa Yuniar', '', 'kediri', '2019-05-22', 'Islam', 'Jl Perintis Kemerdekaan 123', 'Reno', 'Retnos', 'Dokter', 'Guru', ''),
(7, '241', '12345678', 'Albert Einsten', '', 'malang', '2019-05-29', 'Islam', 'Jl Perintis Kemerdekaan 123', 'Ayahku', 'Ibvuku', 'qq', 'Guru', 'KELAS 7'),
(8, '1212', '2121', 'DouglasJauharNehru', '', 'kediri', '1998-02-09', 'Islam', 'Jl Perintis Kemerdekaan 123', 'Ayahku', 'Ibvuku', 'Dokter', 'Guru', 'KELAS 7'),
(9, '62871262', '', 'John', '', 'kediri', '2019-05-15', 'Islam', 'Jl Perintis Kemerdekaan 123', 'Ayahku', 'Ibvuku', 'Dokter', 'Guru', 'KELAS 7'),
(10, '2413', '12345678', 'DouglasJauhar', 'P', 'kediri', '0000-00-00', 'Islam', 'Jl Perintis Kemerdekaan 123', 'qq', 'Ibvuku', '', '', 'KELAS X11'),
(12, '', '', 'Any Citradewi', 'L', '', '0000-00-00', 'Islam', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tahun`
--

CREATE TABLE `tbl_tahun` (
  `id` int(11) NOT NULL,
  `tahun_ajar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tahun`
--

INSERT INTO `tbl_tahun` (`id`, `tahun_ajar`) VALUES
(1, '2018/2019 Ganjil'),
(2, '2018/2019 Genap'),
(4, '2019/2020 Genap'),
(6, '2020/2021 Ganjil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'user', 'user', '124', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(32) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `email`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin@gmail.com', 1),
(2, 'walikela', 'a1733c8fdf9ce2e12c3896f8f619035a', 'Nadela Maaherish', 'douglasjauhar@gmail.com', 2),
(6, 'a', '0cc175b9c0f1b6a831c399e269772661', 'a', 'a', 1),
(7, 'b', '92eb5ffee6ae2fec3ad71c777531578f', 'b', 'douglasjauhar@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_guru` (`nama_guru`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `nama_kelas` (`nama_kelas`),
  ADD KEY `nama_kelas_2` (`nama_kelas`);

--
-- Indeks untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `nama_guru` (`nama_guru`);

--
-- Indeks untuk tabel `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_profil`
--
ALTER TABLE `tbl_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_kelas` (`nama_kelas`),
  ADD KEY `nama_kelas_2` (`nama_kelas`);

--
-- Indeks untuk tabel `tbl_tahun`
--
ALTER TABLE `tbl_tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id_mapel` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=677;

--
-- AUTO_INCREMENT untuk tabel `tbl_profil`
--
ALTER TABLE `tbl_profil`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_tahun`
--
ALTER TABLE `tbl_tahun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
