
CREATE TABLE `analisa_kriteria` (
  `kriteria_pertama` varchar(2) NOT NULL,
  `nilai_analisa_kriteria` double NOT NULL,
  `hasil_analisa_kriteria` double NOT NULL,
  `kriteria_kedua` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `analisa_kriteria` (`kriteria_pertama`, `nilai_analisa_kriteria`, `hasil_analisa_kriteria`, `kriteria_kedua`) VALUES
('C1', 1, 0.65217391304348, 'C1'),
('C1', 3, 0.69230769230769, 'C2'),
('C1', 5, 0.55555555555556, 'C3'),
('C2', 0.33333333333333, 0.21739130434782, 'C1'),
('C2', 1, 0.23076923076923, 'C2'),
('C2', 3, 0.33333333333333, 'C3'),
('C3', 0.2, 0.1304347826087, 'C1'),
('C3', 0.33333333333333, 0.076923076923076, 'C2'),
('C3', 1, 0.11111111111111, 'C3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_alternatif`
--

CREATE TABLE `data_alternatif` (
  `id_alternatif` varchar(4) NOT NULL,
  `nik` char(18) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelamin` enum('pria','wanita') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `hasil_akhir` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_alternatif`
--

INSERT INTO `data_alternatif` (`id_alternatif`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `kelamin`, `alamat`, `jabatan`, `tanggal_masuk`, `pendidikan`, `hasil_akhir`) VALUES
('A001', '130000000005610101', 'Imam', 'Jepara', '2017-08-13', 'pria', 'Jeparaaaaa', 'satpam', '2017-08-13', 'S1', 0.261244832305573),
('A002', '130000000005610102', 'Syarif', 'Sumatera Barat', '2017-08-06', 'pria', 'Sumatera Barat', 'satpam', '2017-08-13', 'S1', 0.24834621016581),
('A003', '130000000005610103', 'Said', 'Sumatera Barat', '2017-08-13', 'pria', 'Sumatera Barat', 'satpam', '2017-08-13', 'S1', 0.36039179144442),
('A004', '130000000005610104', 'Yusuf Adi', 'Kalimantan Barat', '2017-08-23', 'pria', 'Sumatera Barat', 'satpam', '2017-08-13', 'S1', 0.147254794309832),
('A005', '130000000005610105', 'Rizky', 'Indramayu', '2017-08-14', 'pria', 'Indramayuu', 'satpam', '2017-08-13', 'S1', 0.36039179144442),
('A006', '130000000005610106', 'Reza', 'Kalimantan Barat', '2017-08-14', 'pria', 'Kalimantan Barat', 'satpam', '2017-08-13', 'S1', 0.36039179144442),
('A007', '130000000005610107', 'Adi Catur', 'Kalimantan Barat', '2017-08-14', 'pria', 'Kalimantan Barat', 'satpam', '2017-08-13', 'S1', 0.10621689993532901),
('A008', '130000000005610108', 'Alan wahsahlan', 'Kalimantan Barat', '2017-08-14', 'pria', 'Kalimantan Barat', 'satpam', '2017-08-13', 'S1', 0.36039179144442),
('A009', '130000000005610109', 'Guntur', 'Kalimantan Barat', '2017-08-21', 'pria', 'Kalimantan Barat', 'satpam', '2017-08-13', 'S1', 0.1020753290249626),
('A010', '130000000005610110', 'Santo', 'Kalimantan Barat', '2017-08-14', 'pria', 'Kalimantan Barat', 'satpam', '2017-08-13', 'S1', 0.36039179144442),
('A011', '130000000005610111', 'Kalimata', 'Kalimantan Barat', '2018-08-14', 'pria', 'Kalimantan Barat', 'satpam', '2017-08-13', 'S1', 0.0796589763000298),
('A012', '130000000005610112', 'Virgo', 'Kalimantan Barat', '2017-08-14', 'pria', 'Kalimantan Barat', 'satpam', '2017-08-13', 'S1', 0.055202957958472104),
('A013', '130000000005610113', 'Rizu', 'Kalimantan Barat', '2017-08-01', 'pria', 'Kalimantan Barat', 'staf', '2017-08-15', 'S1', NULL),
('A014', '130000000005610114', 'Ramita', 'Indramayu', '2017-09-01', 'pria', 'Indrmaayu', 'Pergudangan', '2017-08-18', 'S1', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kriteria`
--

CREATE TABLE `data_kriteria` (
  `id_kriteria` varchar(2) NOT NULL,
  `nama_kriteria` varchar(45) NOT NULL,
  `jumlah_kriteria` double NOT NULL,
  `bobot_kriteria` double NOT NULL,
  `atribut_kriteria` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kriteria`
--

INSERT INTO `data_kriteria` (`id_kriteria`, `nama_kriteria`, `jumlah_kriteria`, `bobot_kriteria`, `atribut_kriteria`) VALUES
('C1', 'Lokasi', 1.5333333333333299, 0.6333457203022433, 'cost'),
('C2', 'Nilai', 4.33333333333333, 0.26049795615012666, 'benefit'),
('C3', 'Prestasi', 9, 0.10615632354762866, 'benefit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_detail`
--

CREATE TABLE `kriteria_detail` (
  `id_detail` int(11) NOT NULL,
  `id_kriteria` varchar(2) DEFAULT NULL,
  `nama_detail` varchar(100) DEFAULT NULL,
  `nilai` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria_detail`
--

INSERT INTO `kriteria_detail` (`id_detail`, `id_kriteria`, `nama_detail`, `nilai`) VALUES
(2, 'C1', '< 500 m (Sangat Baik)', 1),
(3, 'C1', '500 - 1000 m (Baik)', 0.75),
(4, 'C1', '1500 - 2500 m (Cukup)', 0.5),
(5, 'C1', '> 2500 m (Kurang)', 0.25),
(6, 'C2', '> 2000 (Sangat Baik)', 1),
(7, 'C2', '1800 - 1900 (Baik)', 0.75),
(8, 'C2', '1600 - 1700 (Cukup)', 0.5),
(9, 'C2', '< 1500 (Kurang)', 0.25),
(10, 'C3', 'Ranking 1 - 5 (Sangat Baik)', 1),
(11, 'C3', 'Ranking 6 - 10 (Baik)', 0.75),
(12, 'C3', 'Ranking 11 - 15 (Cukup)', 0.5),
(13, 'C3', 'Ranking 16 - 20 (Cukup)', 0.25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `jum_nilai` double NOT NULL,
  `ket_nilai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `jum_nilai`, `ket_nilai`) VALUES
(2, 9, 'Mutlak sangat penting dari'),
(3, 8, 'Mendekati mutlak dari'),
(8, 7, 'Sangat penting dari'),
(9, 6, 'Mendekati sangat penting dari'),
(10, 5, 'Lebih penting dari'),
(11, 4, 'Mendekati lebih penting dari'),
(12, 3, 'Sedikit lebih penting dari'),
(13, 2, 'Mendekati sedikit lebih penting dari'),
(14, 1, 'Sama penting dengan'),
(15, 0.5, '1 bagi mendekati sedikit lebih penting dari'),
(16, 0.333, '1 bagi sedikit lebih penting dari'),
(17, 0.25, '1 bagi mendekati lebih penting dari'),
(18, 0.2, '1 bagi lebih penting dari'),
(19, 0.167, '1 bagi mendekati sangat penting dari'),
(20, 0.143, '1 bagi sangat penting dari'),
(21, 0.125, '1 bagi mendekati mutlak dari'),
(22, 0.1, '1 bagi mutlak sangat penting dari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_awal`
--

CREATE TABLE `nilai_awal` (
  `id_nilai_awal` int(11) NOT NULL,
  `id_alternatif` varchar(4) NOT NULL,
  `nilai` varchar(5) NOT NULL,
  `keterangan` enum('B','C','K') NOT NULL,
  `periode` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_raport`
--

CREATE TABLE `nilai_raport` (
  `nilai_id` int(11) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `sem1` int(11) DEFAULT NULL,
  `sem2` int(11) DEFAULT NULL,
  `sem3` int(11) DEFAULT NULL,
  `sem4` int(11) DEFAULT NULL,
  `sem5` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_peserta`
--

CREATE TABLE `pesan_peserta` (
  `id_pesan` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_pendaftar`
--

CREATE TABLE `peserta_pendaftar` (
  `nisn` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_peserta` varchar(20) DEFAULT NULL,
  `jarak_sekolah` int(3) DEFAULT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `kabupaten` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `jurusan` varchar(5) DEFAULT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `alamat_ortu` text,
  `hp_ortu` int(11) DEFAULT NULL,
  `kerja_ayah` varchar(100) DEFAULT NULL,
  `kerja_ibu` varchar(100) DEFAULT NULL,
  `penghasilan_ayah` int(12) DEFAULT NULL,
  `penghasilan_ibu` int(12) DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL,
  `jalur` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `adm_id` bigint(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`adm_id`, `username`, `password`, `type`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'admin'),
(142, 'panitia', '0192023a7bbd73250516f069df18b500', 'panitia'),
(143, 'admin1', '0192023a7bbd73250516f069df18b500', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `analisa_kriteria`
--
ALTER TABLE `analisa_kriteria`
  ADD PRIMARY KEY (`kriteria_pertama`,`kriteria_kedua`),
  ADD KEY `kriteria_kedua` (`kriteria_kedua`);

--
-- Indeks untuk tabel `data_alternatif`
--
ALTER TABLE `data_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `data_kriteria`
--
ALTER TABLE `data_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `kriteria_detail`
--
ALTER TABLE `kriteria_detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `nilai_awal`
--
ALTER TABLE `nilai_awal`
  ADD PRIMARY KEY (`id_nilai_awal`,`id_alternatif`),
  ADD KEY `alternatif` (`id_alternatif`);

--
-- Indeks untuk tabel `nilai_raport`
--
ALTER TABLE `nilai_raport`
  ADD PRIMARY KEY (`nilai_id`);

--
-- Indeks untuk tabel `pesan_peserta`
--
ALTER TABLE `pesan_peserta`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `peserta_pendaftar`
--
ALTER TABLE `peserta_pendaftar`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`adm_id`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD KEY `username` (`username`),
  ADD KEY `username_3` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kriteria_detail`
--
ALTER TABLE `kriteria_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `nilai_awal`
--
ALTER TABLE `nilai_awal`
  MODIFY `id_nilai_awal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `nilai_raport`
--
ALTER TABLE `nilai_raport`
  MODIFY `nilai_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan_peserta`
--
ALTER TABLE `pesan_peserta`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `adm_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `analisa_kriteria`
--
ALTER TABLE `analisa_kriteria`
  ADD CONSTRAINT `analisa_kriteria_ibfk_1` FOREIGN KEY (`kriteria_pertama`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `analisa_kriteria_ibfk_2` FOREIGN KEY (`kriteria_kedua`) REFERENCES `data_kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai_awal`
--
ALTER TABLE `nilai_awal`
  ADD CONSTRAINT `nilai_awal_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `data_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
