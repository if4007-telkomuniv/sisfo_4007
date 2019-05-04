-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2019 pada 19.59
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dspweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `idPengeluaran` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `unit` int(5) NOT NULL,
  `harga` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`idPengeluaran`, `nama`, `unit`, `harga`) VALUES
(101, 'Printer', 20, 20000000),
(102, 'Kertas HVS / Rim', 100, 500000),
(103, 'Air Conditioner', 30, 10000000),
(104, 'Stempel', 500, 100000),
(105, 'Komputer', 15, 30000000),
(106, 'Tinta Printer', 50, 250000),
(107, 'Map', 1000, 50000),
(108, 'Buku', 1000, 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `skp`
--

CREATE TABLE `skp` (
  `idSKP` int(11) NOT NULL,
  `NamaKaryawan` varchar(20) NOT NULL,
  `NIP` int(10) NOT NULL,
  `Jabatan` varchar(10) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `perintah` varchar(200) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skp`
--

INSERT INTO `skp` (`idSKP`, `NamaKaryawan`, `NIP`, `Jabatan`, `alamat`, `perintah`, `start`, `end`) VALUES
(1, 'haifa salsabila', 1301160170, 'ceo', 'pergi ke london', '', '2019-04-24', '2019-04-30'),
(2, 'Diniyal Kurnia Dewi', 1301160083, 'sekretaris', 'menikuti rapat di Padang', '', '2019-04-30', '2019-04-30'),
(3, 'Diniyal Kurnia Dewi', 1301160083, 'Sekbend', 'sukabirus', 'mengikuti rapat di Padang', '2019-04-30', '2019-04-30'),
(4, 'Puspita', 1301174326, 'Bendahara', 'sukabirus', 'pergi ke london', '2019-04-30', '2019-05-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagihan`
--

CREATE TABLE `tagihan` (
  `idTagihan` varchar(5) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `Tagihan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tagihan`
--

INSERT INTO `tagihan` (`idTagihan`, `Nama`, `bulan`, `Tagihan`) VALUES
('01', 'Fakhira Zahra', 'January', 120000),
('02', 'Haifa Salsa', 'February', 250000),
('03', 'Monica Dessy', 'March', 150000),
('04', 'Karina Aulia', 'April', 330000),
('05', 'Fauzan Firdaus', 'May', 90000),
('06', 'Irani Kurnia', 'June', 400000),
('07', 'Jamal Akbar', 'July', 100000),
('08', 'Ade Naufal', 'August', 110000),
('09', 'Ary Kamaludin', 'September', 80000),
('10', 'Xabiru Hakim', 'October', 70000),
('11', 'Nana Layla', 'November', 50000),
('12', 'Rizky Skyes', 'Desember', 60000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `test`
--

CREATE TABLE `test` (
  `id_sdm` varchar(5) NOT NULL,
  `nama_divisi` varchar(10) NOT NULL,
  `jumlah_karyawan` int(11) NOT NULL,
  `Aktivitas` int(11) NOT NULL,
  `Solidaritas` int(11) NOT NULL,
  `Output` int(11) NOT NULL,
  `Performansi` int(11) NOT NULL,
  `lainnya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `test`
--

INSERT INTO `test` (`id_sdm`, `nama_divisi`, `jumlah_karyawan`, `Aktivitas`, `Solidaritas`, `Output`, `Performansi`, `lainnya`) VALUES
('01', 'IT', 15, 80, 60, 90, 70, 20),
('02', 'Finance', 10, 90, 80, 90, 60, 10),
('03', 'Marketing', 5, 90, 90, 60, 80, 9),
('04', 'HRD', 16, 60, 70, 80, 60, 5),
('05', 'CSM', 20, 100, 50, 90, 60, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `test1`
--

CREATE TABLE `test1` (
  `id_absen` varchar(5) NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `tanggal` varchar(11) NOT NULL,
  `persentase` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `test1`
--

INSERT INTO `test1` (`id_absen`, `jabatan`, `tanggal`, `persentase`) VALUES
('01', 'Karyawan', '1', 80),
('02', 'Manager', '1', 90),
('03', 'Vice', '1', 80),
('04', 'Karyawan', '2', 100),
('05', 'Manager', '2', 70),
('06', 'Vice', '2', 90),
('07', 'Karyawan', '3', 90),
('08', 'Manager', '3', 100),
('09', 'Vice', '3', 80),
('10', 'Karyawan', '4', 60),
('11', 'Manager', '4', 60),
('12', 'Vice', '4', 100),
('13', 'Karyawan', '5', 100),
('14', 'Manager', '5', 70),
('15', 'Vice', '5', 90);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`idPengeluaran`);

--
-- Indeks untuk tabel `skp`
--
ALTER TABLE `skp`
  ADD PRIMARY KEY (`idSKP`);

--
-- Indeks untuk tabel `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`idTagihan`);

--
-- Indeks untuk tabel `test1`
--
ALTER TABLE `test1`
  ADD PRIMARY KEY (`id_absen`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `skp`
--
ALTER TABLE `skp`
  MODIFY `idSKP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
