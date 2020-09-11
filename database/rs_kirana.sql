-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2020 at 07:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rs_kirana`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id`, `jenis`) VALUES
(1, 'Akreditasi'),
(52, 'Keuangan'),
(54, 'Sumberdaya Manusia'),
(56, 'Pembangunan Gedung');

-- --------------------------------------------------------

--
-- Table structure for table `dataobat`
--

CREATE TABLE `dataobat` (
  `id_obat` int(11) NOT NULL,
  `kode_obt` varchar(30) NOT NULL,
  `nama_obt` varchar(155) NOT NULL,
  `jenis_obt` varchar(100) NOT NULL,
  `satuan_obt` varchar(50) NOT NULL,
  `harga_obt` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataobat`
--

INSERT INTO `dataobat` (`id_obat`, `kode_obt`, `nama_obt`, `jenis_obt`, `satuan_obt`, `harga_obt`, `stok`) VALUES
(1, 'OBT000001', 'Vitamin C', 'Vitamin', 'Tablet', '200', 52),
(2, 'OBT000002', 'Vitamin A', 'Vitamin', 'Tablet', '500', 151),
(3, 'OBT000003', 'Betadine', 'Obat Luka', 'Botol', '7500', 30),
(4, 'OBT000004', 'Paracetamol', 'Obat Demam', 'Tablet', '2000', 94),
(5, 'OBT000005', 'Biogesic', 'Vitamin', 'Tablet', '4000', 180),
(6, 'OBT000006', 'Neosep Forte', 'Obat Nyeri', 'Tablet', '12000', 200),
(7, 'OBT000007', 'Entro Stop', 'Obat Umum', 'Botol', '25000', 100),
(8, 'OBT000008', 'Vitamin B', 'Vitamin', 'Tablet', '2500', 50);

-- --------------------------------------------------------

--
-- Table structure for table `dataobatpasien`
--

CREATE TABLE `dataobatpasien` (
  `id` int(11) NOT NULL,
  `no_rekamedis` varchar(50) NOT NULL,
  `id_registrasi` int(11) NOT NULL,
  `dataobat` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataobatpasien`
--

INSERT INTO `dataobatpasien` (`id`, `no_rekamedis`, `id_registrasi`, `dataobat`) VALUES
(63, '100001', 1001, 'Vitamin A'),
(64, '100001', 1001, 'Paracetamol'),
(65, '100001', 1001, NULL),
(66, '00001', 1, 'Neosep Forte'),
(67, '00001', 1, 'Vitamin A'),
(68, '00001', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `data_file`
--

CREATE TABLE `data_file` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_file`
--

INSERT INTO `data_file` (`id`, `judul`, `nama_file`, `tanggal`) VALUES
(47, 'Akreditasi', 'coba', '2020-08-12'),
(48, 'Keuangan', '123', '2020-08-26'),
(53, 'Keuangan', 'TUGAS SUMMER BAHASA INDONESIA', '2020-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `data_icd`
--

CREATE TABLE `data_icd` (
  `id_icd` int(11) NOT NULL,
  `kode_icd` varchar(22) NOT NULL,
  `keterangan_icd` varchar(100) NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_icd`
--

INSERT INTO `data_icd` (`id_icd`, `kode_icd`, `keterangan_icd`, `user`) VALUES
(6, 'A01', '\r\nTyphoid and paratyphoid fevers', 'admin'),
(2, 'O81.0', 'Pregnancy', 'admin'),
(4, 'S06.3', 'Focal brain injury', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_ruangan`
--

CREATE TABLE `data_ruangan` (
  `id_data` int(11) NOT NULL,
  `jumlah_ruangan` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `jmasuk` time(6) NOT NULL,
  `jkeluar` time(6) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_ruangan`
--

INSERT INTO `data_ruangan` (`id_data`, `jumlah_ruangan`, `keterangan`, `jmasuk`, `jkeluar`, `harga`) VALUES
(1, '10', 'Ruang Bedah', '00:00:00.000000', '00:00:00.000000', '250000'),
(2, '15', 'Ruang ICU', '00:00:00.000000', '00:00:00.000000', '450000'),
(3, '10', 'Ruang Rawat Jalan', '00:00:00.000000', '00:00:00.000000', '125000'),
(4, '12', 'Ruang VIP', '00:00:00.000000', '00:00:00.000000', '250000'),
(5, '14', 'Ruang Kelas 1', '00:00:00.000000', '00:00:00.000000', '350000'),
(6, '20', 'Ruang Kelas 2', '00:00:00.000000', '00:00:00.000000', '100000'),
(7, '25', 'Ruang Kelas 3', '00:00:00.000000', '00:00:00.000000', '85000'),
(8, '15', 'Ruang UGD', '00:00:00.000000', '00:00:00.000000', '125000');

-- --------------------------------------------------------

--
-- Table structure for table `history_backup`
--

CREATE TABLE `history_backup` (
  `id_backup` int(15) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `tanggal_backup` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_backup`
--

INSERT INTO `history_backup` (`id_backup`, `nama_file`, `tanggal_backup`) VALUES
(39, 'Wed15Dec2010_backup_data_1292387890.sql', '2010-12-15 11:38:10');

-- --------------------------------------------------------

--
-- Table structure for table `history_tutup_buku`
--

CREATE TABLE `history_tutup_buku` (
  `id_backup` int(15) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `tanggal_backup` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_tutup_buku`
--

INSERT INTO `history_tutup_buku` (`id_backup`, `nama_file`, `tanggal_backup`) VALUES
(35, 'Wed29Dec2010_tutup_buku_1293557507.sql', '2010-12-29 00:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `inputdak`
--

CREATE TABLE `inputdak` (
  `id` int(11) NOT NULL,
  `kode_dak` varchar(11) NOT NULL,
  `jenis_dak` varchar(100) NOT NULL,
  `jumlah_dak` varchar(50) NOT NULL,
  `tanggal_dak` date NOT NULL,
  `tahun_dak` year(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inputdak`
--

INSERT INTO `inputdak` (`id`, `kode_dak`, `jenis_dak`, `jumlah_dak`, `tanggal_dak`, `tahun_dak`) VALUES
(1, '1.01.01', 'Peralatan dan Mesin', '500000000', '2020-04-21', 2019),
(2, '1.01.02', 'Aktivasi Pembiayaan', '550000000', '2020-04-20', 2019),
(3, '1.01.03', 'Belanja Pegawai', '250000000', '2020-04-21', 2019),
(5, '1.01.04', 'Jasa', '250000000', '2020-04-22', 2019),
(7, '1.01.05', 'Dokter', '300000000', '2020-01-24', 2020),
(8, '1.01.06', 'Pemeliharaan Aset', '400000000', '2020-02-15', 2020),
(9, '1.01.07', 'Operasional', '750000000', '2020-01-01', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `inputdau`
--

CREATE TABLE `inputdau` (
  `id` int(11) NOT NULL,
  `kode_dau` varchar(11) NOT NULL,
  `jenis_dau` varchar(100) NOT NULL,
  `jumlah_dau` varchar(50) NOT NULL,
  `tanggal_dau` date NOT NULL,
  `tahun_dau` year(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inputdau`
--

INSERT INTO `inputdau` (`id`, `kode_dau`, `jenis_dau`, `jumlah_dau`, `tanggal_dau`, `tahun_dau`) VALUES
(1, '1.02.01', 'Peralatan Kebersihan', '300000000', '2020-04-21', 2019),
(2, '1.02.02', 'Alat Tulis Kantor', '350000000', '2020-04-20', 2019),
(3, '1.02.03', 'Percetakan ', '250000000', '2020-04-21', 2019),
(5, '1.02.04', 'Bahan Pemeliharaan Alat Kedokteran ', '250000000', '2020-04-22', 2019),
(7, '1.02.01', 'Alat - alat Kesehatan', '800000000', '2020-01-15', 2020),
(8, '1.02.06', 'Kendaraan Operasional', '500000000', '2020-02-01', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `inputdpa`
--

CREATE TABLE `inputdpa` (
  `id_dpa` int(11) NOT NULL,
  `kode_dpa` varchar(11) NOT NULL,
  `uraian_dpa` varchar(100) NOT NULL,
  `jumlah_dpa` varchar(50) NOT NULL,
  `tanggal_dpa` date NOT NULL,
  `tahun_dpa` year(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inputdpa`
--

INSERT INTO `inputdpa` (`id_dpa`, `kode_dpa`, `uraian_dpa`, `jumlah_dpa`, `tanggal_dpa`, `tahun_dpa`) VALUES
(1, '1.01.01', 'Program Pelayanan Administrasi', '500000000', '2020-04-21', 2019),
(2, '1.01.02', 'Pengadaan Alat Kesehatan Tahap 1', '550000000', '2020-04-20', 2019),
(3, '1.01.03', 'Sosialisasi Kesehatan RS', '250000000', '2020-04-21', 2019),
(5, '1.01.04', 'Pengadaan Alat Kesehatan Tahap 2', '250000000', '2020-04-22', 2019),
(10, '1.01.05', 'Biaya Pemeliharaan Aset', '350000000', '2020-03-10', 2020),
(9, '1.01.06', 'Biaya Dokter', '300000000', '2020-01-20', 2020),
(11, '1.01.07', 'Biaya Operasional', '700000000', '2020-02-14', 2020),
(12, '1.01.08', 'Pengadaan Kendaraan Operasional Ambulance', '750000000', '2020-05-20', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `inputpad`
--

CREATE TABLE `inputpad` (
  `id_pad` int(11) NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `target` varchar(100) NOT NULL,
  `realisasi` varchar(50) NOT NULL,
  `persentase` int(11) NOT NULL,
  `tanggal_pad` date NOT NULL,
  `tahun_pad` year(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inputpad`
--

INSERT INTO `inputpad` (`id_pad`, `uraian`, `target`, `realisasi`, `persentase`, `tanggal_pad`, `tahun_pad`) VALUES
(1, 'Pengadaan Alat Kesehatan 1', '550000000', '550000000', 0, '2020-04-21', 2019),
(3, 'Sosialisasi Kesehatan RS', '250000000', '250000000', 0, '2020-04-21', 2019),
(5, 'Pengadaan Alat Kesehatan Tahap 2', '100000000', '250000000', 0, '2020-04-22', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_keluar`
--

CREATE TABLE `jurnal_keluar` (
  `id` int(15) NOT NULL,
  `nomor_kredit` int(50) NOT NULL,
  `jenis_kredit` varchar(100) NOT NULL,
  `jumlah_kredit` int(50) NOT NULL,
  `kode_kredit` varchar(15) NOT NULL,
  `tanggal_kredit` date NOT NULL,
  `bulan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal_keluar`
--

INSERT INTO `jurnal_keluar` (`id`, `nomor_kredit`, `jenis_kredit`, `jumlah_kredit`, `kode_kredit`, `tanggal_kredit`, `bulan`) VALUES
(1, 20001, 'Pengadaan Komputer', 1570000, 'k20001', '2020-01-30', 'Januari'),
(2, 20002, 'Pembayaran Gaji Pegawai ', 275000, 'k20002', '2020-02-13', 'Februari'),
(10, 20003, 'Pembayaran Dana', 550000, 'K20003', '2020-03-10', 'Maret'),
(17, 20004, 'Pengeluaran', 1200000, 'K20004', '2020-01-12', 'Januari'),
(18, 20005, 'Pengeluaran', 2300000, 'K20005', '2020-02-02', 'Februari'),
(19, 20006, 'Pengeluaran', 3140000, 'K20006', '2020-03-02', 'Maret'),
(20, 20007, 'Pengeluaran', 7500000, 'K20007', '2020-04-02', 'April'),
(21, 20008, 'Pengeluaran', 4300000, 'K20008', '2020-04-05', 'April'),
(22, 20009, 'Pengeluaran', 2700000, 'K20009', '2020-05-02', 'Mei'),
(23, 20010, 'Pengeluaran', 3500000, 'K20010', '2020-05-05', 'Mei'),
(24, 20011, 'Pengeluaran', 2900000, 'K20011', '2020-06-02', 'Juni'),
(25, 20012, 'Pengeluaran', 4200000, 'K20012', '2020-06-05', 'Juni'),
(26, 20013, 'Pengeluaran', 5250000, 'K20013', '2020-07-02', 'Juli'),
(27, 20014, 'Pengeluaran', 6300000, 'K20014', '2020-07-05', 'Juli'),
(28, 20015, 'Pengeluaran', 5750000, 'K20015', '2020-08-02', 'Agustus'),
(29, 20016, 'Pengeluaran', 4150000, 'K20016', '2020-08-05', 'Agustus'),
(30, 20017, 'Pengeluaran', 1900000, 'K20017', '2020-09-02', 'September'),
(31, 20018, 'Pengeluaran', 6800000, 'K20018', '2020-09-05', 'September'),
(32, 20019, 'Pengeluaran', 2800000, 'K20019', '2020-10-02', 'Oktober'),
(33, 20020, 'Pengeluaran', 5450000, 'K20020', '2020-10-05', 'Oktober'),
(34, 20021, 'Pengeluaran', 8400000, 'K20021', '2020-11-02', 'November'),
(35, 20022, 'Pengeluaran', 5900000, 'K20022', '2020-11-05', 'November'),
(36, 20023, 'Pengeluaran', 1500000, 'K20023', '2020-12-02', 'Desember'),
(46, 20024, 'Pengeluaran', 2400000, 'K20024', '2020-12-05', 'Desember'),
(47, 20025, 'Pengeluaran', 1800000, 'K20025', '2020-01-02', 'Januari'),
(48, 20026, 'Pengeluaran', 3200000, 'K20026', '2020-01-05', 'Januari'),
(49, 20026, 'Pengeluaran', 4900000, 'K20026', '2020-02-06', 'Februari');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_masuk`
--

CREATE TABLE `jurnal_masuk` (
  `id` int(11) NOT NULL,
  `nomor_jurnal` int(15) NOT NULL,
  `jenis` varchar(155) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `kode_transaksi` varchar(15) NOT NULL,
  `tanggal_masuk` varchar(50) NOT NULL,
  `bulan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal_masuk`
--

INSERT INTO `jurnal_masuk` (`id`, `nomor_jurnal`, `jenis`, `jumlah`, `kode_transaksi`, `tanggal_masuk`, `bulan`) VALUES
(1, 10001, 'Pemasukkan DPA', 5450000, 'm10001', '2020-01-01', 'Januari'),
(8, 10004, 'Pemasukkan Loket', 520000, 'M10004', '2020-04-21', 'April'),
(10, 10005, 'Pemasukkan Loket 1', 2500000, 'M10005', '2020-04-23', 'April'),
(18, 10006, 'Pemasukkan', 4000000, 'MI0006', '2020-02-15', 'Februari'),
(20, 10008, 'Pemasukkan', 5000000, 'MI0008', '2020-03-31', 'Maret'),
(21, 10009, 'Pemasukan', 2300000, 'MI0009', '2020-05-12', 'Mei'),
(23, 10011, 'Pemasukkan', 5100000, 'MI0011', '2020-06-11', 'Juni'),
(26, 10014, 'Pemasukkan', 6000000, 'MI0014', '2020-07-23', 'Juli'),
(27, 10015, 'Pemasukkan', 6800000, 'MI0015', '2020-08-25', 'Agustus'),
(29, 10017, 'Pemasukkan', 7200000, 'MI0017', '2020-09-12', 'September'),
(31, 10019, 'Pemasukkan', 5900000, 'MI0019', '2020-10-10', 'Oktober'),
(32, 10020, 'Pemasukkan', 6400000, 'MI0020', '2020-10-18', 'Oktober'),
(34, 10022, 'Pemasukkan', 8800000, 'MI0022', '2020-11-28', 'November'),
(35, 10023, 'Pemasukkan', 9100000, 'MI0023', '2020-12-08', 'Desember'),
(36, 10024, 'Pemasukkan', 9500000, 'MI0024', '2020-12-18', 'Desember'),
(37, 10025, 'Pemasukkan', 9250000, 'MI0025', '2020-01-23', 'Januari'),
(39, 10027, 'Pemasukkan', 1500000, 'MI0027', '2020-02-01', 'Februari'),
(40, 10028, 'Pemasukkan', 1275000, 'MI0028', '2020-02-03', 'Februari'),
(41, 10029, 'Pemasukkan', 1480000, 'MI0029', '2020-03-01', 'Maret'),
(42, 10030, 'Pemasukkan', 2000000, 'MI0030', '2020-03-02', 'Maret'),
(43, 10031, 'Pemasukkan', 2500000, 'MI0031', '2020-04-01', 'April'),
(111, 1001, 'Pembayaran Pasien', 1000100, '100001', '2020-08-12', '08'),
(162, 22001, 'Penjualan Obat Biogesic', 80000, 'MO10', '02-September-2020', 'September'),
(164, 22001, 'Penjualan Obat Betadine', 75000, 'MO11', '02-September-2020', 'September'),
(168, 1001, 'Pembayaran Pasien', 435000, '00001', '2020-09-03 22:54:14', '09');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_umum`
--

CREATE TABLE `jurnal_umum` (
  `id` int(15) NOT NULL,
  `keterangan` varchar(15) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal_umum`
--

INSERT INTO `jurnal_umum` (`id`, `keterangan`, `tanggal`) VALUES
(1, 'Laporan', '2020-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `ket1`
--

CREATE TABLE `ket1` (
  `id` int(11) NOT NULL,
  `kompetensi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ket1`
--

INSERT INTO `ket1` (`id`, `kompetensi`, `tanggal`) VALUES
(1, 'Dokter Umum', '2020-05-08'),
(2, 'Dokter Gigi', '2020-05-01'),
(3, 'Spesialis', '2020-05-01'),
(4, 'Sub Spesialis', '0000-00-00'),
(5, 'Manajemen kesehatan', '2020-05-01'),
(6, 'Manajemen Rumah Sakit', '2020-05-01'),
(7, 'Fungsional Umum', '2020-05-01'),
(8, 'Pejabat Administrator', '2020-05-01'),
(9, 'Pejabat Pengawas', '2020-05-01'),
(10, 'Pimpinan Tinggi Pratama', '2020-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `ket2`
--

CREATE TABLE `ket2` (
  `id` int(11) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ket2`
--

INSERT INTO `ket2` (`id`, `pendidikan`, `tanggal`) VALUES
(1, 'S1', '2020-05-01'),
(2, 'S2', '2020-05-01'),
(3, 'S3', '2020-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `ket3`
--

CREATE TABLE `ket3` (
  `id` int(11) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ket4`
--

CREATE TABLE `ket4` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ket5`
--

CREATE TABLE `ket5` (
  `id` int(11) NOT NULL,
  `diklat` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ket5`
--

INSERT INTO `ket5` (`id`, `diklat`, `keterangan`, `tanggal`) VALUES
(1, 'Pra Jabatan', '', '2020-05-01'),
(2, 'Dalam Jabatan', '', '2020-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `level`) VALUES
(2, 'adm', 'adm', 'adm', 'admin'),
(4, 'pimpinan', 'pim', 'pim', 'pimpinan'),
(7, 'rawat', 'rawat', 'rawat', 'perawat'),
(8, 'dok', 'dok', 'dok', 'dokter'),
(9, 'medis', 'medis', 'medis', 'admrekamedis'),
(10, 'spv', 'spv', 'spv', 'spvkasir'),
(11, 'apt', 'apt', 'apt', 'apotik');

-- --------------------------------------------------------

--
-- Table structure for table `obat_apotik`
--

CREATE TABLE `obat_apotik` (
  `id` int(11) NOT NULL,
  `nama_obt` varchar(50) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `tgl_keluar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat_apotik`
--

INSERT INTO `obat_apotik` (`id`, `nama_obt`, `jumlah`, `harga`, `tgl_keluar`) VALUES
(36, 'Biogesic', '20', '80000', '02-September-2020'),
(37, 'Betadine', '10', '75000', '02-September-2020'),
(38, 'Vitamin A', '30', '15000', '02-September-2020');

-- --------------------------------------------------------

--
-- Table structure for table `obat_apotik1`
--

CREATE TABLE `obat_apotik1` (
  `id` int(11) NOT NULL,
  `id_obat` varchar(11) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `tgl_masuk` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat_apotik1`
--

INSERT INTO `obat_apotik1` (`id`, `id_obat`, `jumlah`, `tgl_masuk`) VALUES
(11, '2', '6', '0000-00-00 00:00:00'),
(12, '5', '8', '2020-08-10 06:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `jam_datang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama_pasien`, `alamat`, `ttl`, `jenis_kelamin`, `jam_datang`) VALUES
(55, 'Henri', 'Manibang', 'Manado, 25 Mei 1961', 'Laki-laki', 'Monday, 10-08-2020  05:50:36 pm');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi_ruangan`
--

CREATE TABLE `reservasi_ruangan` (
  `id` int(11) NOT NULL,
  `pesan_ruangan` varchar(50) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi_ruangan`
--

INSERT INTO `reservasi_ruangan` (`id`, `pesan_ruangan`, `nama_pasien`) VALUES
(1, 'ruang bedah', ''),
(2, 'ruang bedah', ''),
(3, 'ruang icu', ''),
(4, 'ruang icu', ''),
(5, 'ruang bedah', ''),
(6, 'ruang bedah', ''),
(7, 'ruang icu', '');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `nama`, `id_data`) VALUES
(1, 'Ruang Bedah', 1),
(2, 'Ruang ICU', 2),
(3, 'Ruang Rawat Jalan', 3),
(4, 'Ruang VIP', 4),
(5, 'Ruang Kelas 1', 5),
(6, 'Ruang Kelas 2', 6),
(7, 'Ruang Kelas 3', 7),
(8, 'Ruang UGD', 8);

-- --------------------------------------------------------

--
-- Table structure for table `stafsdm`
--

CREATE TABLE `stafsdm` (
  `id` int(11) NOT NULL,
  `nis` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `kompetensi` varchar(255) NOT NULL,
  `jenjang_karir` varchar(100) NOT NULL,
  `masa_kerja` varchar(50) NOT NULL,
  `diklat` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `alamat` text DEFAULT NULL,
  `wnegara` varchar(50) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `gambar_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stafsdm`
--

INSERT INTO `stafsdm` (`id`, `nis`, `nama`, `pendidikan`, `kompetensi`, `jenjang_karir`, `masa_kerja`, `diklat`, `status`, `alamat`, `wnegara`, `gambar`, `gambar_code`) VALUES
(1, 'SM110001', 'Agus Kuncoro', 'S1', 'Dokter Umum', '', '5 tahun', 'Pra Jabatan', 'Aktif', 'Manado\r\n', 'Warga Negara Indonesia (WNI)', 'dokter.png', ''),
(2, 'SM110002', 'Rio Syahputra', 'S1', 'Dokter Gigi', '', '6 tahun', 'Dalam Jabatan', 'Aktif', 'Manado\r\n', 'Warga Negara Indonesia (WNI)', 'dokter.png', ''),
(27, 'SM110003', 'Ridho', 'S3', 'Spesialis', '', '7 tahun', 'Pra Jabatan', 'Aktif', 'Malalayang I', 'Warga Negara Indonesia (WNI)', 'dokter.png', ''),
(33, 'SM110005', 'Friska Toliu', 'S2', 'Sub Spesialis', '', '3', 'Dalam Jabatan', 'ASN', 'Manibang', 'Warga Negara Indonesia (WNI)', 'dokter.png', ''),
(35, 'SM110007', 'Maureen Angelica', 'S3', 'Fungsional Umum', '', '4 tahun', 'Dalam Jabatan', 'THL', 'Paniki', 'Warga Negara Indonesia (WNI)', 'dokter.png', ''),
(36, 'SM110008', 'Daniel Worotitjan', 'S3', 'Fungsional Umum', '', '3', 'Dalam Jabatan', 'THL', 'Jalan sea', 'Warga Negara Indonesia (WNI)', 'dokter.png', ''),
(37, 'SM110010', 'Morren mamondol', 'S1', 'Pejabat Pengawas', '', '2', 'Dalam Jabatan', 'ASN', 'mogandi', 'Warga Negara Indonesia (WNI)', 'dokter.png', ''),
(38, 'SM110009', 'Jerrend Sondakh', 'S1', 'Pejabat Pengawas', '', '2 tahun', 'Dalam Jabatan', 'ASN', 'Koka', 'Warga Negara Indonesia (WNI)', 'dokter.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pesan`
--

CREATE TABLE `tabel_pesan` (
  `nomor` int(10) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `dari` varchar(50) NOT NULL,
  `kepada` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `sudahbaca` varchar(10) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pesan`
--

INSERT INTO `tabel_pesan` (`nomor`, `waktu`, `dari`, `kepada`, `pesan`, `sudahbaca`, `jumlah`, `keterangan`) VALUES
(10, '02-September-2020', 'apt', 'spv', 'Konfirmasi Keuangan', 'YES', '80000', 'Penjualan Obat Biogesic'),
(11, '02-September-2020', 'apt', 'spv', 'Konfirmasi Keuangan', 'YES', '75000', 'Penjualan Obat Betadine'),
(12, '02-September-2020', 'apt', 'spv', 'Konfirmasi Keuangan', 'NO', '15000', 'Penjualan Obat Vitamin A');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pesan1`
--

CREATE TABLE `tabel_pesan1` (
  `nomor` int(10) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `dari` varchar(50) NOT NULL,
  `kepada` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `sudahbaca` varchar(10) NOT NULL,
  `jumlah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pesan1`
--

INSERT INTO `tabel_pesan1` (`nomor`, `waktu`, `dari`, `kepada`, `pesan`, `sudahbaca`, `jumlah`) VALUES
(3, '16:09 19 Aug 2020', 'Henri', 'spv', 'Konfirmasi Keuangan', 'YES', '765000');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_trnobatpasien`
--

CREATE TABLE `tabel_trnobatpasien` (
  `id` int(11) NOT NULL,
  `no_rekamedis` varchar(20) NOT NULL,
  `id_registrasi` varchar(20) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `pembiayaan` varchar(50) NOT NULL,
  `id_obat` varchar(11) NOT NULL,
  `jumlah` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_trnobatpasien`
--

INSERT INTO `tabel_trnobatpasien` (`id`, `no_rekamedis`, `id_registrasi`, `nik`, `pembiayaan`, `id_obat`, `jumlah`) VALUES
(28, '00001', '1', '7171074101010002', 'Mandiri', '2', '3'),
(29, '00001', '1', '7171074101010002', 'Mandiri', '6', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_trnruangpasien`
--

CREATE TABLE `tabel_trnruangpasien` (
  `id` int(11) NOT NULL,
  `id_registrasi` varchar(20) NOT NULL,
  `no_rekamedis` varchar(20) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `pembiayaan` varchar(50) NOT NULL,
  `id_data` varchar(11) NOT NULL,
  `jumlah` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_trnruangpasien`
--

INSERT INTO `tabel_trnruangpasien` (`id`, `id_registrasi`, `no_rekamedis`, `nik`, `pembiayaan`, `id_data`, `jumlah`) VALUES
(23, '1', '00001', '7171074101010002', 'Mandiri', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id` int(11) NOT NULL,
  `id_registrasi` bigint(6) NOT NULL,
  `no_rekamedis` varchar(6) NOT NULL,
  `status_pasien` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `tanggal_masuk` varchar(8) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `golongan_darah` varchar(3) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(8) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `umur` int(6) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status_menikah` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `id_pekerjaan` varchar(100) NOT NULL,
  `dokter` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `pembiayaan` varchar(50) NOT NULL,
  `jaminan_pasien` varchar(20) NOT NULL,
  `suku` varchar(100) NOT NULL,
  `pendidikan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id`, `id_registrasi`, `no_rekamedis`, `status_pasien`, `nik`, `tanggal_masuk`, `nama_pasien`, `jenis_kelamin`, `golongan_darah`, `tempat_lahir`, `tanggal_lahir`, `nama_ibu`, `alamat`, `umur`, `agama`, `status_menikah`, `no_hp`, `id_pekerjaan`, `dokter`, `tujuan`, `pembiayaan`, `jaminan_pasien`, `suku`, `pendidikan`) VALUES
(1, 0, '0', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(366, 1, '00001', '', '7171074101010002', '', 'Henri', 'Laki-laki', 'O', 'Manado', '1988-06-', 'Agnes', 'Manibang', 0, 'Kristen Protestan', 'Belum Kawin', '085256898871', 'Swasta', 'Rio Syahputra :Dokter Gigi', 'Poliklinik Gigi Umum', 'Mandiri', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien1`
--

CREATE TABLE `tbl_pasien1` (
  `id_registrasi` varchar(20) NOT NULL,
  `no_rekamedis` varchar(6) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `golongan_darah` varchar(3) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status_menikah` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `id_pekerjaan` varchar(100) NOT NULL,
  `dokter` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `pembiayaan` varchar(50) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  `dokter_lain` varchar(50) NOT NULL,
  `triage` varchar(50) NOT NULL,
  `ruang_inap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasien1`
--

INSERT INTO `tbl_pasien1` (`id_registrasi`, `no_rekamedis`, `nik`, `nama_pasien`, `jenis_kelamin`, `golongan_darah`, `tempat_lahir`, `tanggal_lahir`, `nama_ibu`, `alamat`, `agama`, `status_menikah`, `no_hp`, `id_pekerjaan`, `dokter`, `tujuan`, `pembiayaan`, `ruangan`, `dokter_lain`, `triage`, `ruang_inap`) VALUES
('1', '00001', '7171074101010002', 'Henri', 'Laki-laki', 'O', 'Manado', '0000-00-00', 'Agnes', 'Manibang', 'Kristen Protestan', 'Belum Kawin', '085256898871', 'Swasta', 'Rio Syahputra :Dokter Gigi', 'Poliklinik Gigi Umum', 'Mandiri', 'Pasien Rawat Jalan', '-', 'Hijau', 'Ruang Rawat Jalan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasienrgd`
--

CREATE TABLE `tbl_pasienrgd` (
  `id_registrasi` varchar(20) NOT NULL,
  `no_rekamedis` varchar(12) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `golongan_darah` varchar(3) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status_menikah` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `id_pekerjaan` varchar(100) NOT NULL,
  `dokter` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `pembiayaan` varchar(50) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  `dokter_lain` varchar(50) NOT NULL,
  `triage` varchar(50) NOT NULL,
  `tglperiksa` varchar(20) NOT NULL,
  `keluhan` varchar(240) NOT NULL,
  `rpenyakit` varchar(100) NOT NULL,
  `hasilpempasien` varchar(100) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `pertindakan` varchar(100) NOT NULL,
  `pelain` varchar(100) NOT NULL,
  `konpasien` varchar(100) NOT NULL,
  `transpasien` varchar(50) NOT NULL,
  `namapengantar` varchar(50) NOT NULL,
  `hubdgnpasien` varchar(100) NOT NULL,
  `nohpengantar` varchar(25) NOT NULL,
  `kosong` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasienrinap`
--

CREATE TABLE `tbl_pasienrinap` (
  `id_registrasi` varchar(20) NOT NULL,
  `no_rekamedis` varchar(12) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `golongan_darah` varchar(3) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status_menikah` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `id_pekerjaan` varchar(100) NOT NULL,
  `dokter` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `pembiayaan` varchar(50) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  `dokter_lain` varchar(50) NOT NULL,
  `triage` varchar(50) NOT NULL,
  `tglperiksa` varchar(20) NOT NULL,
  `keluhan` varchar(240) NOT NULL,
  `rpenyakit` varchar(100) NOT NULL,
  `hasilpempasien` varchar(100) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `pertindakan` varchar(100) NOT NULL,
  `pelain` varchar(100) NOT NULL,
  `kosong` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasienrjalan`
--

CREATE TABLE `tbl_pasienrjalan` (
  `id_registrasi` varchar(20) NOT NULL,
  `no_rekamedis` varchar(12) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `golongan_darah` varchar(3) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status_menikah` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `id_pekerjaan` varchar(100) NOT NULL,
  `dokter` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `pembiayaan` varchar(50) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  `dokter_lain` varchar(50) NOT NULL,
  `triage` varchar(50) NOT NULL,
  `tglperiksa` varchar(20) NOT NULL,
  `keluhan` varchar(240) NOT NULL,
  `rpenyakit` varchar(100) NOT NULL,
  `hasilpempasien` varchar(100) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `pertindakan` varchar(100) NOT NULL,
  `pelain` varchar(100) NOT NULL,
  `kosong` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasienrjalan`
--

INSERT INTO `tbl_pasienrjalan` (`id_registrasi`, `no_rekamedis`, `nik`, `nama_pasien`, `jenis_kelamin`, `golongan_darah`, `tempat_lahir`, `tanggal_lahir`, `nama_ibu`, `alamat`, `agama`, `status_menikah`, `no_hp`, `id_pekerjaan`, `dokter`, `tujuan`, `pembiayaan`, `ruangan`, `dokter_lain`, `triage`, `tglperiksa`, `keluhan`, `rpenyakit`, `hasilpempasien`, `diagnosa`, `pertindakan`, `pelain`, `kosong`) VALUES
('1', '00001', '7171074101010002', 'Henri', 'Laki-laki', 'O', 'Manado', '0000-00-00', 'Agnes', 'Manibang', 'Kristen Protestan', 'Belum Kawin', '085256898871', 'Swasta', 'Rio Syahputra :Dokter Gigi', 'Poliklinik Gigi Umum', 'Mandiri', 'Pasien Rawat Jalan', '-', 'Hijau', '2020-09-03', 'Sakit Mata', 'H44.321', 'Baik', 'Mata Kurang Baik dalam Melihat', 'Tidak', '-', '');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan_pasien`
--

CREATE TABLE `tujuan_pasien` (
  `id` int(11) NOT NULL,
  `nama_tujuan` varchar(100) NOT NULL,
  `gedung` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tujuan_pasien`
--

INSERT INTO `tujuan_pasien` (`id`, `nama_tujuan`, `gedung`) VALUES
(1, 'Poliklinik Anak', ''),
(3, 'Poliklinik Penyakit Dalam', ''),
(4, 'Poliklinik Gigi Spesialis', ''),
(5, 'Poliklinik Kandungan dan Kebidanan (Obgyn)', ''),
(6, 'Poliklinik Telinga Hidung Tenggorokan', ''),
(7, 'Poliklinik Kedokteran Jiwa atau Psikiatri', ''),
(8, 'Poliklinik Mata', ''),
(9, 'Poliklinik Andrologi', ''),
(10, 'Poliklinik Saraf', ''),
(11, 'Poliklinik Jantung dan Pembuluh Darah', ''),
(12, 'Poliklinik Bedah', ''),
(13, 'Poliklinik Pulmonologi dan Kedokteran Respirasi (Paru)', ''),
(14, 'Poliklinik Kedokteran Fisik dan Rehabilitasi', ''),
(15, 'Poliklinik Patologi Anatomi', ''),
(16, 'Poliklinik Gizi', ''),
(17, 'Poliklinik Gigi Umum', ''),
(18, 'Poliklinik Anestesiologi dan Terapi Intensif', ''),
(19, 'Poliklinik Penyakit Kulit dan Kelamin', ''),
(20, 'Poliklinik Akupunktur', ''),
(21, 'Poliklinik Farmakologi', ''),
(22, 'Poliklinik Kedokteran Forensik', ''),
(23, 'Poliklinik Kedokteran Olahraga', ''),
(24, 'Poliklinik Mikrobiologi', ''),
(25, 'Poliklinik Patologi', '');

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useradmin`
--

INSERT INTO `useradmin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'henri', 'henri123', 'daniel pangemanan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataobat`
--
ALTER TABLE `dataobat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `dataobatpasien`
--
ALTER TABLE `dataobatpasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_file`
--
ALTER TABLE `data_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_icd`
--
ALTER TABLE `data_icd`
  ADD PRIMARY KEY (`id_icd`);

--
-- Indexes for table `data_ruangan`
--
ALTER TABLE `data_ruangan`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `jurnal_masuk`
--
ALTER TABLE `jurnal_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ket1`
--
ALTER TABLE `ket1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ket2`
--
ALTER TABLE `ket2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ket3`
--
ALTER TABLE `ket3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ket4`
--
ALTER TABLE `ket4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ket5`
--
ALTER TABLE `ket5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat_apotik`
--
ALTER TABLE `obat_apotik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat_apotik1`
--
ALTER TABLE `obat_apotik1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasi_ruangan`
--
ALTER TABLE `reservasi_ruangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `stafsdm`
--
ALTER TABLE `stafsdm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_pesan`
--
ALTER TABLE `tabel_pesan`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `tabel_pesan1`
--
ALTER TABLE `tabel_pesan1`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `tabel_trnobatpasien`
--
ALTER TABLE `tabel_trnobatpasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_trnruangpasien`
--
ALTER TABLE `tabel_trnruangpasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pasien1`
--
ALTER TABLE `tbl_pasien1`
  ADD PRIMARY KEY (`no_rekamedis`);

--
-- Indexes for table `tbl_pasienrgd`
--
ALTER TABLE `tbl_pasienrgd`
  ADD PRIMARY KEY (`no_rekamedis`);

--
-- Indexes for table `tbl_pasienrinap`
--
ALTER TABLE `tbl_pasienrinap`
  ADD PRIMARY KEY (`no_rekamedis`);

--
-- Indexes for table `tbl_pasienrjalan`
--
ALTER TABLE `tbl_pasienrjalan`
  ADD PRIMARY KEY (`no_rekamedis`);

--
-- Indexes for table `tujuan_pasien`
--
ALTER TABLE `tujuan_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `dataobat`
--
ALTER TABLE `dataobat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dataobatpasien`
--
ALTER TABLE `dataobatpasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `data_file`
--
ALTER TABLE `data_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `data_icd`
--
ALTER TABLE `data_icd`
  MODIFY `id_icd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_ruangan`
--
ALTER TABLE `data_ruangan`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jurnal_masuk`
--
ALTER TABLE `jurnal_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `ket1`
--
ALTER TABLE `ket1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ket2`
--
ALTER TABLE `ket2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ket3`
--
ALTER TABLE `ket3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ket4`
--
ALTER TABLE `ket4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ket5`
--
ALTER TABLE `ket5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `obat_apotik`
--
ALTER TABLE `obat_apotik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `obat_apotik1`
--
ALTER TABLE `obat_apotik1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `reservasi_ruangan`
--
ALTER TABLE `reservasi_ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stafsdm`
--
ALTER TABLE `stafsdm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tabel_pesan`
--
ALTER TABLE `tabel_pesan`
  MODIFY `nomor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tabel_pesan1`
--
ALTER TABLE `tabel_pesan1`
  MODIFY `nomor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_trnobatpasien`
--
ALTER TABLE `tabel_trnobatpasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tabel_trnruangpasien`
--
ALTER TABLE `tabel_trnruangpasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=367;

--
-- AUTO_INCREMENT for table `tujuan_pasien`
--
ALTER TABLE `tujuan_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
