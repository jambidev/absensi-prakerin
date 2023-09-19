-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10 Sep 2018 pada 04.29
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakerin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_industri`
--

CREATE TABLE `tb_industri` (
  `id_user` varchar(255) NOT NULL,
  `nama_industri` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `alamat_industri` varchar(255) NOT NULL,
  `no_telp_industri` varchar(255) NOT NULL,
  `nama_guru_pembimbing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_industri`
--

INSERT INTO `tb_industri` (`id_user`, `nama_industri`, `kota`, `alamat_industri`, `no_telp_industri`, `nama_guru_pembimbing`) VALUES
('ID01', 'PT. Telkomsel Jakarta', 'Jakarta', 'Jl. KH Mas Mansyur Karet Tengsin Tanah Abang Jakarta Pusat DKI Jakarta, RT.9/RW.6, Karet Tengsin, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10250', '02153653811', 'Rahmad Dwi Jatmiko, S.Kom'),
('ID02', 'PT. Telkom Area Malang', 'Malang', 'Jl. Ahmad Yani No. 11, Blimbing, Malang', '0341499123', 'Dra. Peni Wardayani'),
('ID03', 'PT. Indosat Mega Media Jakarta', 'Jakarta', 'Jl. Kebagusan Raya No. 36, RT 1/RW 7, Ragunan, Ps. Minggu, Jakarta Selatan, DKI Jakarta', '02178546900', 'Rahmad Dwi Jatmiko, S.Kom'),
('ID04', 'PT. Telkom Akses Pasuruan', 'Pasuruan', 'Jl. Panglima Sudirman No .59, Purworejo, Kota Pasuruan, Jawa Timur 67116', '0343426003', 'Milutfiyana Devi, S. SE.'),
('ID05', 'Gama Techno Indonesia Jogjakarta', 'Yogyakarta', 'Jl. Cik Di Tiro No. 34, Terban, Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta', '0274566161', 'Drs. Bambang Siswantoro'),
('ID06', 'Utero Malang', 'Malang', 'GRAHA UTERO RUMAH Kreatif OXYZ, Jl. Bantaran 1 No.25, Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', '0341408408', 'Dra. Peni Wardayani'),
('ID08', 'PT. Telkom Akses Malang', 'Malang', 'Jl. A. Yani no. 11 Malang', '0341772811', 'Rendy L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id_user` varchar(255) NOT NULL,
  `id_level` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id_user`, `id_level`, `nama`, `username`, `password`) VALUES
('AD01', 1, 'Admin', 'admin', 'admin'),
('AD02', 1, 'Fariz M.', 'kolev', 'kolev'),
('AD03', 1, 'Hendra Wahyu', 'hendrawp', 'hendrawp'),
('GR02', 2, 'Rahmad Dwi Jatmiko, S.Kom', 'rahmaddwi', 'rahmaddwi'),
('GR03', 2, 'Hirga Ertama Putra, S. Kom', 'hirgaertama', 'hirgaertama'),
('GR04', 2, 'Aris Puji Santoso, S. Kom', 'arispuji', 'arispuji'),
('GR05', 2, 'Santy Fidrianna, S. E.', 'santyfidrianna', 'santyfidrianna'),
('GR06', 2, 'Drs. Bambang Siswantoro', 'bambangsiswantoro', 'bambangsiswantoro'),
('GR07', 2, 'Dra. Peni Wardayani', 'peniwardayani', 'peniwardayani'),
('GR08', 2, 'Milutfiyana Devi, S. SE.', 'milutfiyanadevi', 'milutfiyanadevi'),
('GR09', 2, 'Ekon Anjar P., S. Kom.', 'ekonanjar', 'ekonanjar'),
('GR10', 2, 'Rendy L', 'rendy', 'rendy'),
('ID01', 4, 'PT. Telkomsel Jakarta', 'telkomseljakarta', 'telkomseljakarta'),
('ID02', 4, 'PT. Telkom Area Malang', 'telkomareamalang', 'telkomareamalang'),
('ID03', 4, 'PT. Indosat Mega Media Jakarta', 'im2jakarta', 'im2jakarta'),
('ID04', 4, 'PT. Telkom Akses Pasuruan', 'telkomaksespasuruan', 'telkomaksespasuruan'),
('ID05', 4, 'Gama Techno Indonesia Jogjakarta', 'gamatechno', 'gamatechno'),
('ID06', 4, 'Utero Malang', 'utero', 'utero'),
('ID08', 4, 'PT. Telkom Akses Malang', 'telkomaksesmalang', 'telkomaksesmalang'),
('SW008', 3, 'Faiza Aulia Rahma Putra', 'faizaaulia', 'faizaaulia'),
('SW009', 3, 'Yusron Hanan Zain Vidi Imtinan', 'yusronhanan', 'yusronhanan'),
('SW010', 3, 'Fariz Muhammad Rizky', 'farizmuhammad', 'farizmuhammad'),
('SW012', 3, 'Moh. Wafiq Fanani', 'mohwafiq', 'mohwafiq'),
('SW013', 3, 'Syafri Imsak Chilmawan', 'syafriimsak', 'syafriimsak'),
('SW014', 3, 'Ananta Zulurtubi', 'anantazulqurtubi', 'anantazulqurtubi'),
('SW015', 3, 'Haris Fajar Nugroho', 'harisfajar', 'harisfajar'),
('SW017', 3, 'Hanif Izha Fardiansyah', 'hanifihza', 'hanifihza'),
('SW018', 3, 'Erika Prafita Rotinsulu', 'erikaprafitasari', 'erikaprafitasari'),
('SW019', 3, 'Leovano Adias Julian Triatama', 'leovanoadias', 'leovanoadias'),
('SW020', 3, 'Osa Khoiruzzad', 'osakhoiruzzad', 'osakhoiruzzad'),
('SW021', 3, 'Shafira Brigita', 'shafirabrigita', 'shafirabrigita'),
('SW022', 3, 'Dicky Hermawan', 'dickyhermawan', 'dickyhermawan'),
('SW023', 3, 'Rafidia Aqil Ramadhan', 'rafidiaaqil', 'rafidiaaqil'),
('SW024', 3, 'Pradigma Ayu Naratryka', 'pradigmaayu', 'pradigmaayu'),
('SW025', 3, 'Reza Adi Raharja', 'rezaadi', 'rezaadi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post`
--

CREATE TABLE `tb_post` (
  `id_post` varchar(255) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `ket_abs` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `industri` varchar(255) NOT NULL,
  `foto_kegiatan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_post`
--

INSERT INTO `tb_post` (`id_post`, `id_user`, `nama_siswa`, `ket_abs`, `isi`, `industri`, `foto_kegiatan`, `tanggal`, `status`) VALUES
('KET0001', 'SW008', 'Faiza Aulia Rahma Putra', 'Masuk', 'Melakukan instalasi di area Jl Kawi', 'PT. Telkom Area Malang', 'instalasi_jaringan1.jpg', '2018-01-10', 'Sudah dikonfirmasi'),
('KET0002', 'SW008', 'Faiza Aulia Rahma Putra', 'Izin', 'Membuat SIM', 'PT. Telkom Area Malang', 'buat-sim-malang.jpg', '2018-01-11', 'Sudah dikonfirmasi'),
('KET0003', 'SW008', 'Faiza Aulia Rahma Putra', 'Masuk', 'Mengerjakan tugas matematika', 'PT. Telkom Area Malang', 'tugasmat.JPG', '2018-01-12', 'Sudah dikonfirmasi'),
('KET0004', 'SW008', 'Faiza Aulia Rahma Putra', 'Masuk', 'Ditugaskan di bagian input data', 'PT. Telkom Area Malang', 'inputpetugas.JPG', '2018-01-15', 'Sudah dikonfirmasi'),
('KET0005', 'SW015', 'Haris Fajar Nugroho', 'Masuk', 'Melakukan instalasi jaringan di Jl Kawi', 'PT. Telkom Area Malang', 'instalasi_jaringan2.jpg', '2018-01-15', 'Sudah dikonfirmasi'),
('KET0006', 'SW015', 'Haris Fajar Nugroho', 'Sakit', 'Sakit demam', 'PT. Telkom Area Malang', 'suratsakit1.jpg', '2018-01-10', 'Sudah dikonfirmasi'),
('KET0007', 'SW015', 'Haris Fajar Nugroho', 'Masuk', 'Melakukan maintenance di rumah pelanggan', 'PT. Telkom Area Malang', 'rosetpasang.jpg', '2018-01-11', 'Sudah dikonfirmasi'),
('KET0008', 'SW017', 'Hanif Izha Fardiansyah', 'Masuk', 'Melakukan pembersihan perangkat kantor', 'PT. Telkom Area Malang', 'membersihkan_cpu.jpg', '2018-01-10', 'Sudah dikonfirmasi'),
('KET0009', 'SW017', 'Hanif Izha Fardiansyah', 'Masuk', 'Instalasi ODP di daerah arjosari', 'PT. Telkom Area Malang', 'odp.jpg', '2018-01-11', 'Sudah dikonfirmasi'),
('KET0010', 'SW017', 'Hanif Izha Fardiansyah', 'Masuk', 'Instalasi ODP di daerah Mergan', 'PT. Telkom Area Malang', 'instalasiodphari2.jpg', '2018-01-12', 'Sudah dikonfirmasi'),
('KET0011', 'SW017', 'Hanif Izha Fardiansyah', 'Masuk', 'Mengikuti pelatihan', 'PT. Telkom Area Malang', 'pelatihan1.jpg', '2018-01-15', 'Sudah dikonfirmasi'),
('KET0012', 'SW009', 'Yusron Hanan Zain Vidi Imtinan', 'Masuk', 'Mengerjakan projek yang diberikan kantor', 'PT. Telkomsel Jakarta', 'yusron.PNG', '2018-01-10', 'Sudah dikonfirmasi'),
('KET0013', 'SW009', 'Yusron Hanan Zain Vidi Imtinan', 'Masuk', 'Menyelesaikan tugas sejarah indonesia', 'PT. Telkomsel Jakarta', 'tugas_sejarah.jpg', '2018-01-11', 'Sudah dikonfirmasi'),
('KET0014', 'SW020', 'Osa Khoiruzzad', 'Masuk', 'Membuat front-end website', 'Gama Techno Indonesia Jogjakarta', 'Screenshot-2018-1-11_gtPerizinan.png', '2018-01-12', 'Sudah dikonfirmasi'),
('KET0015', 'SW020', 'Osa Khoiruzzad', 'Masuk', 'Membuat front-end website', 'Gama Techno Indonesia Jogjakarta', 'mines.PNG', '2018-01-15', 'Sudah dikonfirmasi'),
('KET0016', 'SW010', 'Fariz Muhammad Rizky', 'Masuk', 'Mengerjakan arahan pembimbing untuk web joomla', 'Gama Techno Indonesia Jogjakarta', 'Screenshot-2018-1-12_Joomla_Extensions_Directory.png', '2018-01-12', 'Sudah dikonfirmasi'),
('KET0017', 'SW010', 'Fariz Muhammad Rizky', 'Masuk', 'Membuat front-end', 'Gama Techno Indonesia Jogjakarta', 'Screenshot-2018-1-11_gtPerizinan1.png', '2018-01-15', 'Sudah dikonfirmasi'),
('KET0018', 'SW022', 'Dicky Hermawan', 'Masuk', 'Setting LAN', 'PT. Telkom Akses Malang', 'Setting_LAN1.jpg', '2018-01-16', 'Sudah dikonfirmasi'),
('KET0019', 'SW010', 'Fariz Muhammad Rizky', 'Sakit', 'sakit mumet', 'Gama Techno Indonesia Jogjakarta', 'Surat-Keterangan-Sehat1.jpg', '2018-01-16', 'Sudah dikonfirmasi'),
('KET0020', 'SW008', 'Faiza Aulia Rahma Putra', 'Masuk', 'revisi PW (edit jurnal) done', 'PT. Telkom Area Malang', 'Screenshot_(120)2.png', '2018-01-20', 'Sudah dikonfirmasi'),
('KET0021', 'SW008', 'Faiza Aulia Rahma Putra', 'Masuk', 'revisi update jurnal', 'PT. Telkom Area Malang', 'Screenshot_(121).png', '2018-01-21', 'Sudah dikonfirmasi'),
('KET0022', 'SW010', 'Fariz Muhammad Rizky', 'Masuk', 'add report pada user guru', 'Gama Techno Indonesia Jogjakarta', 'Screenshot_(122).png', '2018-01-21', 'Sudah dikonfirmasi'),
('KET0023', 'SW015', 'Haris Fajar Nugroho', 'Masuk', 'pelurusan data', 'PT. Telkom Area Malang', 'Screenshot_(106).png', '2018-01-21', 'Sudah dikonfirmasi'),
('KET0024', 'SW008', 'Faiza Aulia Rahma Putra', 'Masuk', 'membantu instal server', 'PT. Telkom Area Malang', 'Instalasi_Server.jpg', '2018-01-22', 'Sudah dikonfirmasi'),
('KET0025', 'SW009', 'Yusron Hanan Zain Vidi Imtinan', 'Masuk', 'tugas coding web', 'PT. Telkomsel Jakarta', 'Screenshot_(123).png', '2018-01-22', 'Sudah dikonfirmasi'),
('KET0026', 'SW010', 'Fariz Muhammad Rizky', 'Masuk', 'membuat web perizinan', 'Gama Techno Indonesia Jogjakarta', 'Screenshot_(124).png', '2018-01-22', 'Sudah dikonfirmasi'),
('KET0027', 'SW012', 'Moh. Wafiq Fanani', 'Masuk', 'pemasangan kabel FO', 'PT. Telkom Akses Pasuruan', 'instalasiodphari2.jpg', '2018-01-22', 'Sudah dikonfirmasi'),
('KET0028', 'SW013', 'Syafri Imsak Chilmawan', 'Masuk', 'pelurusan data', 'PT. Telkom Area Malang', 'Screenshot_(101).png', '2018-01-22', 'Sudah dikonfirmasi'),
('KET0029', 'SW014', 'Ananta Zulurtubi', 'Masuk', 'clone PC', 'PT. Telkom Area Malang', 'Clone_PC.jpg', '2018-01-22', 'Sudah dikonfirmasi'),
('KET0030', 'SW015', 'Haris Fajar Nugroho', 'Izin', 'membuat SIM', 'PT. Telkom Area Malang', 'buat-sim-malang1.jpg', '2018-01-22', 'Sudah dikonfirmasi'),
('KET0031', 'SW017', 'Hanif Izha Fardiansyah', 'Masuk', 'menelpon pelanggan', 'PT. Telkom Area Malang', 'IMG_20170720_133529.jpg', '2018-01-22', 'Sudah dikonfirmasi'),
('KET0032', 'SW018', 'Erika Prafita Rotinsulu', 'Masuk', 'design poster', 'Utero Malang', 'MOBA-CUP.jpg', '2018-01-22', 'Sudah dikonfirmasi'),
('KET0033', 'SW019', 'Leovano Adias Julian Triatama', 'Masuk', 'merapikan gudang', 'PT. Indosat Mega Media Jakarta', 'sewa-gudang-1200x565.jpg', '2018-01-22', 'Sudah dikonfirmasi'),
('KET0034', 'SW020', 'Osa Khoiruzzad', 'Masuk', 'membuat web perizinan', 'Gama Techno Indonesia Jogjakarta', 'Screenshot_(124)1.png', '2018-01-22', 'Sudah dikonfirmasi'),
('KET0035', 'SW008', 'Faiza Aulia Rahma Putra', 'Masuk', 'Cleaning PC', 'PT. Telkom Area Malang', 'Cleaning_PC.jpg', '2018-01-23', 'Menunggu konfirmasi'),
('KET0036', 'SW008', 'Faiza Aulia Rahma Putra', 'Masuk', 'Ghost/ Cloning PC', 'PT. Telkom Area Malang', 'Clone_PC1.jpg', '2018-01-31', 'Menunggu konfirmasi'),
('KET0037', 'SW017', 'Hanif Izha Fardiansyah', 'Masuk', 'Bekraf Developer Day - Surabaya', 'PT. Telkom Area Malang', 'IMG_1919.JPG', '2018-01-31', 'Menunggu konfirmasi'),
('KET0038', 'SW010', 'Fariz Muhammad Rizky', 'Masuk', 'tambah report guru', 'Gama Techno Indonesia Jogjakarta', 'Screenshot_(133).png', '2018-01-31', 'Menunggu konfirmasi'),
('KET0039', 'SW025', 'Reza Adi Raharja', 'Sakit', 'izin sakit', 'PT. Indosat Mega Media Jakarta', 'Contoh-surat-izin-sakit-sekolah.jpg', '2018-01-31', 'Menunggu konfirmasi'),
('KET0040', 'SW018', 'Erika Prafita Rotinsulu', 'Masuk', 'tambah report admin', 'Utero Malang', 'Screenshot_(134).png', '2018-01-31', 'Menunggu konfirmasi'),
('KET0041', 'SW008', 'Faiza Aulia Rahma Putra', 'Masuk', 'hapus alert, ganti dgn. jQuery', 'PT. Telkom Area Malang', 'Screenshot_(135).png', '2018-02-03', 'Menunggu konfirmasi'),
('KET0042', 'SW008', 'Faiza Aulia Rahma Putra', 'Masuk', 'Setting LAN', 'PT. Telkom Area Malang', 'Setting_LAN2.jpg', '2018-02-19', 'Menunggu konfirmasi'),
('KET0043', 'SW008', 'Faiza Aulia Rahma Putra', 'Masuk', 'Clone PC', 'PT. Telkom Area Malang', 'Clone_PC.jpg', '2018-02-18', 'Menunggu konfirmasi'),
('KET0044', 'SW008', 'Faiza Aulia Rahma Putra', 'Masuk', 'Monitoring', 'PT. Telkom Area Malang', 'IMG_20170720_1335291.jpg', '2018-02-17', 'Menunggu konfirmasi'),
('KET0045', 'SW008', 'Faiza Aulia Rahma Putra', 'Izin', 'membuat SIM', 'PT. Telkom Area Malang', 'buat-sim-malang1.jpg', '2018-02-16', 'Menunggu konfirmasi'),
('KET0046', 'SW008', 'Faiza Aulia Rahma Putra', 'Sakit', 'sakit', 'PT. Telkom Area Malang', 'suratsakit2.jpg', '2018-02-15', 'Menunggu konfirmasi'),
('KET0047', 'SW009', 'Yusron Hanan Zain Vidi Imtinan', 'Masuk', 'seminar', 'PT. Telkomsel Jakarta', 'pelatihan2.jpg', '2018-02-19', 'Menunggu konfirmasi'),
('KET0048', 'SW009', 'Yusron Hanan Zain Vidi Imtinan', 'Masuk', 'membuat web', 'PT. Telkomsel Jakarta', 'Screenshot-2018-1-11_gtPerizinan2.png', '2018-02-18', 'Menunggu konfirmasi'),
('KET0049', 'SW009', 'Yusron Hanan Zain Vidi Imtinan', 'Masuk', 'melanjutkan membuat web', 'PT. Telkomsel Jakarta', 'Screenshot-2018-1-12_Joomla_Extensions_Directory1.png', '2018-02-17', 'Menunggu konfirmasi'),
('KET0050', 'SW009', 'Yusron Hanan Zain Vidi Imtinan', 'Masuk', 'mengerjakan tugas matematika', 'PT. Telkomsel Jakarta', 'IMG_20170830_2208011.jpg', '2018-02-16', 'Menunggu konfirmasi'),
('KET0051', 'SW010', 'Fariz Muhammad Rizky', 'Masuk', 'mengerjakan PW', 'Gama Techno Indonesia Jogjakarta', 'Screenshot_(122)1.png', '2018-02-19', 'Menunggu konfirmasi'),
('KET0052', 'SW010', 'Fariz Muhammad Rizky', 'Masuk', 'mengerjakan tugas Sejarah Indonesia', 'Gama Techno Indonesia Jogjakarta', 'tugas_sejarah1.jpg', '2018-02-18', 'Menunggu konfirmasi'),
('KET0053', 'SW010', 'Fariz Muhammad Rizky', 'Sakit', 'sakit demam', 'Gama Techno Indonesia Jogjakarta', 'suratsakit3.jpg', '2018-02-17', 'Menunggu konfirmasi'),
('KET0054', 'SW012', 'Moh. Wafiq Fanani', 'Masuk', 'Mengerjakan PW', 'PT. Telkom Akses Pasuruan', 'projek1.PNG', '2018-02-10', 'Sudah dikonfirmasi'),
('KET0055', 'SW012', 'Moh. Wafiq Fanani', 'Masuk', 'maintenance', 'PT. Telkom Akses Pasuruan', 'instalasiodphari21.jpg', '2018-02-11', 'Sudah dikonfirmasi'),
('KET0056', 'SW012', 'Moh. Wafiq Fanani', 'Masuk', 'mengerjakan tugas matematika', 'PT. Telkom Akses Pasuruan', 'IMG_20170830_22080111.jpg', '2018-02-12', 'Sudah dikonfirmasi'),
('KET0057', 'SW012', 'Moh. Wafiq Fanani', 'Izin', 'membuat SIM', 'PT. Telkom Akses Pasuruan', 'buat-sim-malang2.jpg', '2018-02-13', 'Sudah dikonfirmasi'),
('KET0058', 'SW013', 'Syafri Imsak Chilmawan', 'Sakit', 'sakit', 'PT. Telkom Area Malang', 'suratsakit4.jpg', '2018-02-13', 'Menunggu konfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_admin`
--

CREATE TABLE `tb_user_admin` (
  `id_user` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto_admin` varchar(150) NOT NULL,
  `no_telp_admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user_admin`
--

INSERT INTO `tb_user_admin` (`id_user`, `nama`, `foto_admin`, `no_telp_admin`) VALUES
('AD01', 'Admin', '-', '081234567890'),
('AD02', 'Fariz M.', 'DSC_99812.jpg', '081234567890'),
('AD03', 'Hendra Wahyu', 'male-user-silhouette_318-35708.jpg', '081234567890');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_guru`
--

CREATE TABLE `tb_user_guru` (
  `id_user` varchar(255) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `foto_guru` varchar(255) NOT NULL,
  `no_telp_guru` varchar(20) NOT NULL,
  `kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user_guru`
--

INSERT INTO `tb_user_guru` (`id_user`, `nama_guru`, `jenis_kelamin`, `foto_guru`, `no_telp_guru`, `kota`) VALUES
('GR02', 'Rahmad Dwi Jatmiko, S.Kom', 'Laki-Laki', '-', '081234567890', 'Jakarta'),
('GR03', 'Hirga Ertama Putra, S. Kom', 'Laki-Laki', '-', '081234567890', 'Jakarta'),
('GR04', 'Aris Puji Santoso, S. Kom', 'Laki-Laki', '-', '081234567890', 'Bandung'),
('GR05', 'Santy Fidrianna, S. E.', 'Perempuan', '-', '081234567890', 'Semarang'),
('GR06', 'Drs. Bambang Siswantoro', 'Laki-Laki', '-', '081234567890', 'Yogyakarta'),
('GR07', 'Dra. Peni Wardayani', 'Perempuan', '-', '081234567890', 'Malang'),
('GR08', 'Milutfiyana Devi, S. SE.', 'Perempuan', '-', '081234567890', 'Pasuruan'),
('GR09', 'Ekon Anjar P., S. Kom.', 'Laki-Laki', '-', '081234567890', 'Solo & Madiun'),
('GR10', 'Rendy L', 'Laki-Laki', '-', '081234567890', 'Malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_siswa`
--

CREATE TABLE `tb_user_siswa` (
  `id_user` varchar(255) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `foto_siswa` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `industri` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `nama_guru_pembimbing` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `no_telp_siswa` varchar(20) NOT NULL,
  `alamat_prakerin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user_siswa`
--

INSERT INTO `tb_user_siswa` (`id_user`, `nama_siswa`, `foto_siswa`, `kelas`, `industri`, `kota`, `nama_guru_pembimbing`, `jenis_kelamin`, `no_telp_siswa`, `alamat_prakerin`) VALUES
('SW008', 'Faiza Aulia Rahma Putra', 'foto.jpg', 'XII RPL 6', 'PT. Telkom Area Malang', 'Malang', 'Dra. Peni Wardayani', 'Laki-Laki', '081234567890', 'Jl. Danau Kerinci V G6/D4, Sawojajar, Kedungkandang, Malang'),
('SW009', 'Yusron Hanan Zain Vidi Imtinan', 'foto.jpg', 'XII RPL 6', 'PT. Telkomsel Jakarta', 'Jakarta', 'Rahmad Dwi Jatmiko, S.Kom', 'Laki-Laki', '081234567890', 'Jl Widya Chandra III'),
('SW010', 'Fariz Muhammad Rizky', 'foto.jpg', 'XII RPL 6', 'Gama Techno Indonesia Jogjakarta', 'Yogyakarta', 'Drs. Bambang Siswantoro', 'Laki-Laki', '081234567890', 'Jl. Prof. Herman Yohanes'),
('SW012', 'Moh. Wafiq Fanani', 'foto.jpg', 'XII RPL 6', 'PT. Telkom Akses Pasuruan', 'Pasuruan', 'Milutfiyana Devi, S. SE.', 'Laki-Laki', '081234567890', 'Jl Gatot Subroto, Pasuruan'),
('SW013', 'Syafri Imsak Chilmawan', 'foto.jpg', 'XII RPL 6', 'PT. Telkom Area Malang', 'Malang', 'Dra. Peni Wardayani', 'Laki-Laki', '081234567890', 'Poncokusumo'),
('SW014', 'Ananta Zulurtubi', 'foto.jpg', 'XII RPL 5', 'PT. Telkom Area Malang', 'Malang', 'Dra. Peni Wardayani', 'Laki-Laki', '081234567890', 'Jl. Danau Semayang, Sawojajar'),
('SW015', 'Haris Fajar Nugroho', 'foto.jpg', 'XII TKJ 2', 'PT. Telkom Area Malang', 'Malang', 'Dra. Peni Wardayani', 'Laki-Laki', '081234567890', 'Jl. Sulfat Indah II'),
('SW017', 'Hanif Izha Fardiansyah', 'foto.jpg', 'XII TKJ 1', 'PT. Telkom Area Malang', 'Malang', 'Dra. Peni Wardayani', 'Laki-Laki', '081234567890', 'Jl Danau Kerinci V'),
('SW018', 'Erika Prafita Rotinsulu', 'foto.jpg', 'XII RPL 6', 'Utero Malang', 'Malang', 'Dra. Peni Wardayani', 'Perempuan', '081234567890', 'sawojajar'),
('SW019', 'Leovano Adias Julian Triatama', 'foto.jpg', 'XII RPL 1', 'PT. Indosat Mega Media Jakarta', 'Jakarta', 'Rahmad Dwi Jatmiko, S.Kom', 'Laki-Laki', '081234567890', 'Jl Sultan Hasanudin, Kebayoran Baru'),
('SW020', 'Osa Khoiruzzad', 'foto.jpg', 'XII RPL 4', 'Gama Techno Indonesia Jogjakarta', 'Yogyakarta', 'Drs. Bambang Siswantoro', 'Laki-Laki', '081234567890', 'Jl Prof Herman Yohanes'),
('SW021', 'Shafira Brigita', 'foto.jpg', 'XII RPL 6', 'Gama Techno Indonesia Jogjakarta', 'Yogyakarta', 'Drs. Bambang Siswantoro', 'Laki-Laki', '081234567890', 'Banguntapan, Yogyakarta'),
('SW022', 'Dicky Hermawan', 'foto.jpg', 'XII TKJ 1', 'PT. Telkom Akses Malang', 'Malang', 'Dra. Peni Wardayani', 'Laki-Laki', '081234567890', 'Sawojajar'),
('SW023', 'Rafidia Aqil Ramadhan', 'foto.jpg', 'XII RPL 2', 'PT. Telkomsel Jakarta', 'Jakarta', 'Rahmad Dwi Jatmiko, S.Kom', 'Laki-Laki', '081234567890', 'kos jakarta'),
('SW024', 'Pradigma Ayu Naratryka', 'foto.jpg', 'XII RPL 6', 'PT. Telkom Akses Pasuruan', 'Pasuruan', 'Milutfiyana Devi, S. SE.', 'Perempuan', '081234567890', 'kos pasuruan'),
('SW025', 'Reza Adi Raharja', 'foto.jpg', 'XII TKJ 5', 'PT. Indosat Mega Media Jakarta', 'Jakarta', 'Rahmad Dwi Jatmiko, S.Kom', 'Laki-Laki', '081234567890', 'kos jakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_industri`
--
ALTER TABLE `tb_industri`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user_industri` (`id_user`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `FK_USER_LEVEL` (`id_level`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `FK_POST_GET_ID` (`id_user`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`),
  ADD KEY `id_user_3` (`id_user`);

--
-- Indexes for table `tb_user_admin`
--
ALTER TABLE `tb_user_admin`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_user_guru`
--
ALTER TABLE `tb_user_guru`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user_guru` (`id_user`);

--
-- Indexes for table `tb_user_siswa`
--
ALTER TABLE `tb_user_siswa`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user_siswa` (`id_user`),
  ADD KEY `id_user_siswa_2` (`id_user`),
  ADD KEY `id_user_siswa_3` (`id_user`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_industri`
--
ALTER TABLE `tb_industri`
  ADD CONSTRAINT `tb_industri_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_login` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  ADD CONSTRAINT `tb_post_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user_siswa` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_user_admin`
--
ALTER TABLE `tb_user_admin`
  ADD CONSTRAINT `tb_user_admin_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_login` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_user_guru`
--
ALTER TABLE `tb_user_guru`
  ADD CONSTRAINT `tb_user_guru_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_login` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_user_siswa`
--
ALTER TABLE `tb_user_siswa`
  ADD CONSTRAINT `tb_user_siswa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_login` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
