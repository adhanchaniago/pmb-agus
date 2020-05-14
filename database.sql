CREATE TABLE `nilai_raport` (
  `nilai_id` int(11) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `b_ind1` int(11) DEFAULT NULL,
  `b_ind2` int(11) DEFAULT NULL,
  `b_ind3` int(11) DEFAULT NULL,
  `b_ind4` int(11) DEFAULT NULL,
  `b_ind5` int(11) DEFAULT NULL,
  `mtk1` int(11) DEFAULT NULL,
  `mtk2` int(11) DEFAULT NULL,
  `mtk3` int(11) DEFAULT NULL,
  `mtk4` int(11) DEFAULT NULL,
  `mtk5` int(11) DEFAULT NULL,
  `ipa1` int(11) DEFAULT NULL,
  `ipa2` int(11) DEFAULT NULL,
  `ipa3` int(11) DEFAULT NULL,
  `ipa4` int(11) DEFAULT NULL,
  `ipa5` int(11) DEFAULT NULL,
  `ips1` int(11) DEFAULT NULL,
  `ips2` int(11) DEFAULT NULL,
  `ips3` int(11) DEFAULT NULL,
  `ips4` int(11) DEFAULT NULL,
  `ips5` int(11) DEFAULT NULL,
  `b_ing1` int(11) DEFAULT NULL,
  `b_ing2` int(11) DEFAULT NULL,
  `b_ing3` int(11) DEFAULT NULL,
  `b_ing4` int(11) DEFAULT NULL,
  `b_ing5` int(11) DEFAULT NULL,
  `b_ind_jml` int(11) DEFAULT NULL,
  `mtk_jml` int(11) DEFAULT NULL,
  `ipa_jml` int(11) DEFAULT NULL,
  `ips_jml` int(11) DEFAULT NULL,
  `b_ing_jml` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `nilai_raport` (`nilai_id`, `nisn`, `b_ind1`, `b_ind2`, `b_ind3`, `b_ind4`, `b_ind5`, `mtk1`, `mtk2`, `mtk3`, `mtk4`, `mtk5`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `b_ing1`, `b_ing2`, `b_ing3`, `b_ing4`, `b_ing5`, `b_ind_jml`, `mtk_jml`, `ipa_jml`, `ips_jml`, `b_ing_jml`, `total`, `keterangan`) VALUES
(1, '2020', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

CREATE TABLE `pesan_peserta` (
  `id_pesan` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

INSERT INTO `peserta_pendaftar` (`nisn`, `nama`, `tempat_lahir`, `tanggal_lahir`, `no_peserta`, `jarak_sekolah`, `jenis_kelamin`, `agama`, `alamat_siswa`, `kabupaten`, `kecamatan`, `asal_sekolah`, `jurusan`, `nama_ayah`, `nama_ibu`, `alamat_ortu`, `hp_ortu`, `kerja_ayah`, `kerja_ibu`, `penghasilan_ayah`, `penghasilan_ibu`, `ranking`, `jalur`) VALUES
('2020', 'Mustapa Ahmad Kamal', 'Amuntai', '2020-05-01', '0213832676', 10, 'Laki-Laki', 'Islam', 'ldskfkdlsfm', 'amuntai tengah', 'amuntai', 'Smk 1 amuntai', 'IPA', 'mursyidi', 'dahliana', 'sdfbnsjdfnksdfb', 847346334, 'pns', 'pns', 4500000, 4500000, 10, 'umum');

CREATE TABLE `user` (
  `adm_id` bigint(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`adm_id`, `username`, `password`, `type`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'admin'),
(140, '2020', '0192023a7bbd73250516f069df18b500', 'siswa');

ALTER TABLE `nilai_raport`
  ADD PRIMARY KEY (`nilai_id`);

ALTER TABLE `pesan_peserta`
  ADD PRIMARY KEY (`id_pesan`);

ALTER TABLE `peserta_pendaftar`
  ADD PRIMARY KEY (`nisn`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`adm_id`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD KEY `username` (`username`),
  ADD KEY `username_3` (`username`);

ALTER TABLE `nilai_raport`
  MODIFY `nilai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `pesan_peserta`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `user`
  MODIFY `adm_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
COMMIT;
