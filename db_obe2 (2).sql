-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Agu 2022 pada 14.34
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_obe2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `gambar` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `no_telp`, `alamat`, `gambar`, `id_user`) VALUES
(2, 'Nur Syifaul Husna', '08818532807', 'Bojonegoro', 'WhatsApp_Image_2022-01-19_at_17_04_29_(2).jpeg', 59);

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspek`
--

CREATE TABLE `aspek` (
  `id_aspek` int(11) NOT NULL,
  `nama_aspek` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `aspek`
--

INSERT INTO `aspek` (`id_aspek`, `nama_aspek`) VALUES
(5, 'Aspek Sikap'),
(6, 'Aspek Pengetahuan'),
(7, 'Aspek Keterampilan Umum'),
(8, 'Aspek Keterampilan Khusus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_kajian`
--

CREATE TABLE `bahan_kajian` (
  `id_bahan` int(11) NOT NULL,
  `bahan_kajian` text NOT NULL,
  `id_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahan_kajian`
--

INSERT INTO `bahan_kajian` (`id_bahan`, `bahan_kajian`, `id_matkul`) VALUES
(9, 'Kontrak kuliah, Penjelasan umum TRK I , Pengantar Kinetika reaksi homogen, pengaruh konsentrasi pada kec. Reaksi.Prediksi kecepatan\r\nreaksi dari teori.', 54),
(10, ' Interprestasi data reaktor batch , reaktor batch volume konstan, volume berubah, temperatur dan kecepatan reaksi..', 54),
(11, 'Reaktor ideal untuk reaksi tunggal : pengenalan perancangan reaktor batch ideal.', 54),
(12, 'reaktor batch ideal untuk reaksi tunggal : reaktor mixed flow steady state dan reaktor mixed flow steady state.\r\n', 54),
(14, '1. Pendahuluan definisi bejana bertekanan\r\n2. Dimensi bejana bertekanan dalam dan tutup bejana bertekanan dalam\r\n3. Dimensi bejana bertekanan luar dan dimensi tutup bejana bertekanan luar\r\n4. Perancangan penyangga bejana pendek\r\n5. Safety hazard K3 bejana bertekanan\r\n6. Pendahuluan Bejana Tinggi untuk proses pemisahan\r\n7. Perancangan bejana tinggi bertekanan dalam\r\n8. Perancangan bejana tinggi bertekanan vakum\r\n9. Penyangga dan pondasi Bejana Tinggi\r\n10. Identifikasi, kontrol dan assesment suatu hazard pada bejana tinggi', 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cpl`
--

CREATE TABLE `cpl` (
  `id_cpl` int(11) NOT NULL,
  `id_aspek` int(11) NOT NULL,
  `cpl` text NOT NULL,
  `sumber` text NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kode_cpl` varchar(10) NOT NULL,
  `total_cpl` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cpl`
--

INSERT INTO `cpl` (`id_cpl`, `id_aspek`, `cpl`, `sumber`, `id_jurusan`, `id_user`, `kode_cpl`, `total_cpl`) VALUES
(20, 5, 'Mampu menerapkan sikap, perilaku, moral dan etika sebagai umat yang taat\r\nberagama dan menjunjung toleransi.', '', 16, 72, 'CPL A', 174),
(21, 7, 'Mampu berkomunikasi secara ilmiah terkait ide, permasalahan dan solusi\r\ndengan efektif melalui lisan dan tulisan pada komunitas terkait, di lingkup\r\nlokal, nasional, atau internasional.', '', 16, 72, 'CPL B', 0),
(22, 7, 'Mampu berpikir inovatif, kreatif dan kritis.', '', 16, 72, 'CPL C', 0),
(23, 7, 'Mampu menjalankan tugas secara efektif secara individu maupun kerjasama\r\ndalam kelompok multidisiplin.', '', 16, 72, 'CPL D', 0),
(24, 7, 'Mampu mengikuti perkembangan ilmu dan teknologi di bidang Teknik Kimia.', '', 16, 72, 'CPL E', 0),
(25, 6, 'Mampu mengenali kebutuhan dan mengamalkan pembelajaran secara\r\nindependen dan sepanjang hayat pada konteks perubahan teknologi dan\r\nsosial yang luas.', '', 16, 72, 'CPL F', 0),
(26, 8, 'Mampu menerapkan pengetahuan matematika dan pengetahuan dasar\r\ndalam bidang Teknik kimia dan memahami konteks ilmu pengetahuan dan\r\nrekayasa multidisiplin yang lebih luas.', '', 16, 72, 'CPL G', 85.5834),
(27, 8, 'Mampu mengidentifikasi, memformulasi, dan menyelesaikan masalah\r\nkerekayasaan di bidang Teknik Kimia dan memilih serta menerapkan\r\nmetode-metode relevan yang dibangun dari metode analitis, komputasi, dan\r\neksperimental yang telah diakui.', '', 16, 72, 'CPL H', 124.714),
(28, 5, 'njakhaldjasldhsadjsd', '', 17, 71, 'CPLIF001', 0),
(29, 6, 'mkla;sdasdsand kasdsd', '', 17, 71, 'CPLIF002', 0),
(30, 5, 'Mampu menjadi insan yang bertaqwa, mandiri, bertanggung jawab,  bekerjasama, menghargai keanekaragaman budaya dan memiliki wawasan kebangsaan dengan nilai-nilai bela negara ', 'Pustaka', 18, 80, 'A', 0),
(31, 6, 'Menguasai konsep pengetahuan mengenai transformasi data menjadi informasi, insight dan knowledge menggunakan metode statistik, aplikasi probabilitas, machine learning dan konsep teoritis bagian khusus dalam bidang pengetahuan tersebut secara mendalam, serta mampu memformulasikan penyelesaian masalah prosedural.', 'Pustaka', 18, 80, 'B', 0),
(32, 6, 'Mampu mengaplikasikan bidang keahliannya dan memanfaatkan ilmu pengetahuan, teknologi, dan/atau seni meliputi Matematika Sains Data, Algoritma dan Pemrograman, Statististik, Big data, elemen Kecerdasan Buatan, Perencanaan Proyek Sains Data dalam penyelesaian masalah serta mampu beradaptasi terhadap situasi yang dihadapi.', 'Pustaka', 18, 80, 'C', 0),
(33, 6, 'Mampu mengambil keputusan yang tepat berdasarkan data dan sistem cerdas, serta mampu memberikan petunjuk dalam memilih berbagai metode secara mandiri dan kelompok', 'Pustaka', 18, 80, 'D', 0),
(34, 7, 'Mampu mengimplementasikan, membandingkan dan mengintegrasikan keahlian, solusi dan gagasan dalam bentuk deskripsi saintifik', 'Pustaka', 18, 80, 'E', 0),
(35, 7, 'Mampu menganalisis,  mengintegrasi, dan mengevaluasi data, informasi, dan nilai-nilai bela negara secara kelembagaan', 'Pustaka', 18, 80, 'F', 0),
(36, 8, 'Mampu secara kreatif dan inovatif memformulasikan pemecahan masalah dengan memanfaatkan Big Data dan teknologi sistem cerdas berbasis konsep-konsep yang relevan dan dengan memanfaatkan alat-alat pemodelan tepat. ', 'Pustaka', 18, 80, 'G', 0),
(37, 8, 'Mampu membangun pemrograman data science untuk mendesain struktur data, melakukan pemodelan, menerapkan machine learning, dan memvisualisasikan hasilnya', 'Pustaka', 18, 80, 'H', 0),
(38, 8, 'Mampu bekerja sama dalam tim merancang, membangun dan menganalisa perangkat lunak atau sistem informasi berbais sistem cerdas skala menengah/besar dengan menerapkan/mengadopsi konsep Big Data atau Mechine Learning yang tepat/sesuai. ', 'Pustaka', 18, 80, 'I', 0),
(39, 8, 'Mampu merancang dan melaksanakan penelitian dengan metodologi yang benar\r\nserta menganalisis dan menginterpretasi data dengan tepat.', '', 16, 72, 'CPL I', 0),
(40, 8, 'Mampu memilih dan menggunakan sumber daya, pemilihan peralatan rekayasa dan\r\naplikasi perancangan modern yang sesuai, termasuk melakukan prediksi danpemodelan\r\nproblem rekayasa.', '', 16, 72, 'CPL J', 84.4583),
(41, 8, 'Mampu memahami dampak penyelesaian rekayasa bidang Teknik Kimia dalam\r\nkonteks kesehatan, keselamatan, lingkungan, sosial dan ekonomi.', '', 16, 72, 'CPL K', 77.6667),
(42, 8, 'Mampu merancang suatu sistem, komponen, atau proses sesuai dengan kebutuhan\r\ndalam batasan-batasan realistis termasuk aspek ekonomi, lingkungan, sosial, politik, etika,\r\nkesehatan dan keselamatan, kelayakan produksi dan keberlanjutan menggunakan\r\npertimbangan kemajuan pada bidang rekayasa Teknik Kimia.', '', 16, 72, 'CPL L', 86.1818);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cpl_mk`
--

CREATE TABLE `cpl_mk` (
  `id_cplmk` int(11) NOT NULL,
  `id_cpl` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `id_aspek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cpl_mk`
--

INSERT INTO `cpl_mk` (`id_cplmk`, `id_cpl`, `id_matkul`, `id_aspek`) VALUES
(21, 26, 54, 8),
(22, 27, 54, 8),
(23, 20, 58, 5),
(24, 27, 58, 8),
(27, 30, 59, 5),
(28, 40, 60, 8),
(29, 41, 60, 8),
(30, 42, 60, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cpmk`
--

CREATE TABLE `cpmk` (
  `id_cpmk` int(11) NOT NULL,
  `kode_cpmk` varchar(10) NOT NULL,
  `cpmk` text NOT NULL,
  `id_cpl` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cpmk`
--

INSERT INTO `cpmk` (`id_cpmk`, `kode_cpmk`, `cpmk`, `id_cpl`, `id_matkul`) VALUES
(21, 'CPMK', 'Pada akhir kuliah TRK I mahasiswa dapat memahami kinetika reaksi homogen, memiliki kemampuan untuk merancang,\r\nmenyusun, dan menentukan kondisi optimum reaktor (batch, mixed flow, plug flow, recycle reaktor) untuk proses reaksi homogen\r\nserta memilih jenis reactor yang baik.', 26, 54),
(22, 'CPMK1', 'Mampu menjelaskan dan memahami teori dasar kinetika reaksi homogen', 26, 54),
(23, 'CPMK2', 'Mampu untuk merancang reaktor batch, mixed flow, plug flow, recycle reactor untuk proses reaksi homogen . ', 27, 54),
(24, 'CPMK3', 'Mampu menentukan kondisi optimum reaktor.', 27, 54),
(25, 'CPMK4', 'Mampu untuk memilih jenis reaktor yang baik.', 27, 54),
(27, 'CPMK J', 'Mampu memilih dan menggunakan sumber daya, pemilihan peralatan rekayasa dan aplikasi perancangan modern\r\nyang sesuai.', 40, 60),
(28, 'CPMK K', 'Mampu memahami dampak penyelesaian rekayasa bidang Teknik Kimia dalam konteks kesehatan, keselamatan, dan lingkungan', 41, 60),
(29, 'CPMK L', 'Mampu merancang suatu bejana bertekanan sesuai dengan kebutuhan dalam batasan-batasan realistis termasuk\r\naspek ekonomi, lingkungan, kesehatan dan keselamatan, kelayakan produksi dan keberlanjutan menggunakan\r\npertimbangan kemajuan pada bidang rekayasa Teknik Kimia.', 42, 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `deskripsi_mk`
--

CREATE TABLE `deskripsi_mk` (
  `id_deskripsimk` int(11) NOT NULL,
  `rumpun_mk` varchar(150) NOT NULL,
  `deskripsi_mk` text NOT NULL,
  `id_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `deskripsi_mk`
--

INSERT INTO `deskripsi_mk` (`id_deskripsimk`, `rumpun_mk`, `deskripsi_mk`, `id_matkul`) VALUES
(15, '-', 'Mata kuliah Teknik Reaksi Kimia I (TRK I) membahas tentang teori dasar kinetika reaksi homogen, memperkenalkan jenis-jenis reaktor untuk\r\nproses reaksi homogen, perancangan penyusunan reaktor ganda dan recycle reaktor. Perumusan kinetika, multiple reaksi untuk sistim homogen,\r\nperencanaan reaktor dengan kondisi yang optimum pada reaksi tunggal dan ganda, perancangan reaktor dengan proses adiabatic..', 54),
(16, '-', 'aaa', 58),
(17, '-', 'Big Data adalah', 59),
(18, '-', 'Mata Kuliah ini membahas tentang: Konsep-konsep dasar perancangan bejana bertekanan meliputi bejana bertekanan dalam,\r\ndan bejana bertekanan luar. Perencanagan bejana untuk proses kimia dan bejana tinggi untuk proses pemisahan, dan\r\nKeselamatan dan Keamanan dalam perancanagn (K3).', 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_rps`
--

CREATE TABLE `detail_rps` (
  `id_detailrps` int(11) NOT NULL,
  `minggu` text NOT NULL,
  `id_subcpmk` int(11) DEFAULT NULL,
  `indikator` text NOT NULL,
  `kriteria` text NOT NULL,
  `luring` text NOT NULL,
  `daring` text NOT NULL,
  `materi` text NOT NULL,
  `bobot` varchar(10) NOT NULL,
  `id_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_rps`
--

INSERT INTO `detail_rps` (`id_detailrps`, `minggu`, `id_subcpmk`, `indikator`, `kriteria`, `luring`, `daring`, `materi`, `bobot`, `id_matkul`) VALUES
(14, '1', 30, 'Ketepatan\r\nmenjelaskan\r\nteori dasar\r\nkinetika reaksi\r\nhomogen\r\n', 'Non-test:\r\nMeringkas materi\r\nkuliah\r\nTugas I :\r\nmengerjakan tugas\r\nmandiri tentang\r\nkinetika reaksi\r\nhomogen\r\n', '-Kuliah\r\n-Diskusi kelompok\r\n-Kerja kelompok\r\nTM = 1 mg x 2 sks x 50’\r\nBT = 1 mg x 2 sks x 60’\r\nBM = 1 mg x 2 sks x 60', '-E-Learning dan diskusi\r\ndalam forum\r\n-Membaca teks dan ppt\r\nhttp://ilmu.upnjatim.ac.id', '-Pengertian Kinetika\r\nreaksi 7eactor7,\r\n-pengaruh konsentrasi\r\npada kec. Reaksi.\r\n-Prediksi kecepatan\r\nreaksi dari teori. ', '5', 54),
(15, '2,3', 31, 'Ketepatan\r\nmerumuskan\r\ndan\r\nmenentukan\r\nkecepatan\r\nreaksi pada\r\n7eactor batch\r\nvolume\r\nkonstan dan\r\nvolume\r\nberubah', 'Non-test:\r\nMeringkas materi\r\nkuliah\r\nTugas 2:\r\nmengerjakan tugas\r\nmandiri :\r\nMenentukan\r\nkecepatan reaksi\r\npada volume\r\nkonstan dan\r\nberubah', '-Kuliah\r\n-Diskusi kelompok\r\n-Kerja kelompok\r\nTM = 2 mg x 2 sks x 50’\r\nBT = 2 mg x 2 sks x 60’\r\nBM = 2 mg x 2 sks x\r\n60’\r\n', '-E-Learning dan diskusi\r\ndalam forum\r\n-Membaca teks dan\r\nppt\r\nhttp://ilmu.upnjatim.a\r\nc.id\r\n', '-Interprestasi data\r\nreaktor batch\r\ndengan volume\r\nkonstan,\r\n-Interprestasi data\r\nreaktor batch\r\ndengan volume\r\nberubah.', '10', 54),
(16, '4,5', 32, 'Ketepatan\r\nmerancang\r\n7 eactor ideal\r\n(batch, plug flow, mixed\r\nflow).', 'Non-test:\r\nMeringkas materi\r\nkuliah\r\nTugas 3:\r\nmengerjakan tugas\r\nmandiri :\r\nMerancang reactor\r\nideal.\r\n', '-Kuliah\r\n-Diskusi kelompok\r\n-Kerja kelompok\r\nTM = 2 mg x 2 sks x 50’\r\nBT = 2 mg x 2 sks x 60’\r\nBM = 2 mg x 2 sks x 60’\r\n', '-E-Learning dan diskusi\r\ndalam forum\r\n-Membaca teks dan\r\nppt\r\nhttp://ilmu.upnjatim.a\r\nc.id', 'Reaktor ideal untuk\r\nreaksi tunggal :\r\npengenalan\r\nperancangan reaktor\r\nbatch ideal, reaktor mixed flow steady\r\nstate dan reaktor\r\nmixed flow steady\r\nstate', '20', 54),
(17, '6,7', 33, 'Ketepatan\r\nmerancang\r\nreaktor yang\r\ndisusun ganda\r\ndan recycle\r\nreaktor untuk\r\nsystem reaksi\r\ntunggal.', 'Non-test:\r\nMeringkas materi\r\nkuliah\r\nTugas 4:\r\nmengerjakan tugas\r\nmandiri :\r\nMerancang\r\nreactor yang\r\ndisusun ganda', '-Kuliah\r\n-Diskusi kelompok\r\n-Kerja kelompok\r\nTM = 2 mg x 2 sks x 50’\r\nBT = 2 mg x 2 sks x 60’\r\nBM = 2 mg x 2 sks x 60', '-E-Learning dan diskusi\r\ndalam forum\r\n-Membaca teks dan\r\nppt\r\nhttp://ilmu.upnjatim.a\r\nc.id\r\n', '-Perancangan untuk\r\nreaksi-reaksi tunggal .\r\n-Perbandingan ukuran\r\nreaktor tunggal.\r\n-Perencanaan reaktor\r\ndisusun seri dan\r\nParallel serta recycle\r\nreaktor', '15', 54),
(18, '9,10', 34, 'Ketepatan\r\nmerumuskan\r\nkinetika reaksi\r\nparalel.', 'Non Test:\r\nmerumuskan\r\nkinetika reaksi\r\nparalel.\r\nTugas 5 :\r\nmengerjakan tugas\r\nmandiri:\r\nmerancang reactor\r\nganda , untuk\r\nsystem recycle dan kinetikaraksi\r\nparallel.', '-Kuliah\r\n-Diskusi kelompok\r\n-Kerja kelompok\r\nTM = 2 mg x 2 sks x 50’\r\nBT = 2 mg x 2 sks x 60’\r\nBM = 2 mg x 2 sks x 60’\r\n', '-E-Learning dan diskusi\r\ndalam forum\r\n-Mengamati ppt video\r\npresentasi screen\r\nrecording\r\nhttp://ilmu.upnjatim.a\r\nc.id\r\n', '-Perancangan reaktor\r\nganda dan kinetika\r\nreaksi paralel.\r\n-Perancangan reaktor\r\nuntuk system recycle\r\ndan kinetika reaksi\r\nparalel.', '10', 54),
(19, '11,12', 35, 'Ketepatan\r\nmerumuskan\r\npersamaan\r\nkecepatan\r\nreaksi\r\nhomogen jika\r\nuntuk reaksi\r\nberbentuk\r\nreaksi seriparalel\r\n(multiple).', 'Non-test:\r\nMeringkas materi\r\nkuliah\r\nTugas 6 :\r\nmengerjakan tugas\r\nmandiri :\r\nmerumuskan\r\npersamaan\r\nkecepatan reaksi\r\nhomogen jika\r\nuntuk reaksi\r\nberbentuk reaksi\r\nseri-paralel\r\n(multiple).\r\n', '-Kuliah\r\n-Diskusi kelompok\r\n-Kerja kelompok\r\nTM = 2 mg x 2 sks x 50’\r\nBT = 2 mg x 2 sks x 60’\r\nBM = 2 mg x 2 sks x 60', '-E-Learning dan diskusi\r\ndalam forum\r\n-Membaca teks dan\r\nppt\r\nhttp://ilmu.upnjatim.a\r\nc.id\r\n', '-Perancangan Multiple\r\nreaksi.\r\n-Persamaan\r\nkecepatan reaksi seri\r\ndan paralel untuk\r\nreaksi reversible dan\r\nirreversible.\r\n', '15', 54),
(20, '13,14', 36, '-Ketepatan\r\nmenentukan\r\nsuhu optimum\r\ndari reaktor,\r\nuntuk reaksi\r\ntunggal dan\r\nmultiple.', 'Non-test:\r\nMeringkas materi\r\nkuliah\r\nTugas 7:\r\nmengerjakan tugas\r\nmandiri\r\nmenentukan suhu\r\noptimum dari  reaktor, untuk reaksi\r\ntunggal dan multiple', '-Kuliah\r\n-Diskusi kelompok\r\n-Kerja kelompok\r\nTM = 2 mg x 2 sks x 50’\r\nBT = 2 mg x 2 sks x 60’\r\nBM = 2 mg x 2 sks x 60’\r\n', '-E-Learning dan diskusi\r\ndalam forum\r\n-Membaca teks dan\r\nppt\r\nhttp://ilmu.upnjatim.a\r\nc.id\r\n', '-Pengaruh suhu dan\r\ntekanan thd.\r\nperformance reaktor.\r\n-Reaksi-reaksi tunggal,\r\nreaksi-reaksi ganda', '10', 54),
(21, '15', 37, 'Ketepatan\r\nmemilih jenis\r\nreaktor yang\r\nefektif untuk\r\nreaksi yang\r\nhomogen', 'Non-test:\r\nMeringkas materi\r\nkuliah\r\n.Tugas 8 :\r\nmengerjakan tugas\r\nmandiri memilih\r\njenis reaktor yang\r\nefektif untuk reaksi\r\nyang homogen.', 'Kuliah\r\n-Diskusi kelompok\r\n-Kerja kelompok\r\nTM = 1 mg x 2 sks x 50’\r\nBT = 1 mg x 2 sks x 60’\r\nBM = 1 mg x 2 sks x 60', '-E-Learning dan diskusi\r\ndalam forum\r\n-Membaca teks dan\r\nppt\r\nhttp://ilmu.upnjatim.a\r\nc.id', 'Pemilihan Jenis\r\nreaktor yang baik.', '15', 54),
(28, '1', 38, '1', '1', '1', '1', '1', '2.5', 58),
(29, '2', 39, '2', '2', '2', '2', '2', '5', 58),
(30, '3', 40, '3', '3', '3', '3', '3', '10', 58),
(31, '1,2', 42, ' Ketepatan\r\ndalam\r\nmenjelaskan\r\npengertian,\r\nfungsi, kodekode,\r\nstandard\r\nperancangan\r\nbejana\r\nbertekanan\r\nsesuai\r\nstandard\r\n Ketepatan\r\nmeghitung\r\ndimensi\r\nbejana\r\npendek\r\ntekanan\r\ndalam (H, D,\r\ndan tebal\r\nshell), bejana\r\nbejana\r\nhorizontal,\r\ndan vertical\r\nsesuai\r\nstandard\r\ndengan benar', 'Kriteria:\r\nPedoman\r\npenskoran\r\nmarking scheme\r\nBentuk:\r\n- Non-Test:\r\nTugas 1 ', 'Minggu 1:\r\nKuliah\r\nDiskusi , tanya jawab\r\n[TM: 1x(3x50”)]\r\n2:\r\nKuliah\r\n[TM: 1x(3x50”)]\r\nTugas 1: menghitung\r\ndimensi bejana\r\npendek bertekanan\r\nPT+BM:(1+1)x(3x60”)', ' eLearning:\r\nhttp://ilmu.upnj\r\natim.ac.id\r\nMembaca text dan\r\nmedia\r\npembelajaran ppt,\r\nhttp://ilmu.upnjatim.\r\nac.id\r\n', 'Minggu 1:\r\n- Kontrak\r\nkuliah\r\n- Pendahuluan\r\ntentang\r\nbejana\r\nbertekanan\r\nMinggu 2:\r\n- Menghitung\r\ndimensi\r\nbejana\r\npendek\r\nbertekanan\r\ndalam (H, D,\r\ndan tebal\r\nshell)\r\n- Menghitung\r\ndimensi\r\nbejana\r\nhorizontal\r\n- Menghitung\r\ndimensi\r\nbejana\r\nvertical\r\nNo. 1: 262-265\r\nN0. 2: 33-36\r\nNo. 3: 3-13\r\n', '15', 60),
(32, '3', 43, 'Ketepatan dalam\r\nmenghitung tebal\r\nshell, diameter dan tinngi untuk\r\nbejana tekanan\r\nluar (vakum)\r\nsesuai standar\r\nserta analisis\r\nhasil perhitungan\r\ndengan lancar', 'Kriteria:\r\nPedoman\r\npenskoran marking scheme\r\n\r\nBentuk:\r\n- Non-Test:\r\nDiskusi\r\nKelompok\r\nTugas\r\nKelompok\r\n', 'Kuliah\r\nDiskusi\r\n[TM: 1x(3x50”)] \r\n\r\nTugas 2:\r\n- Menentukan bejana\r\ntekanan luar\r\n- Menghitung P desain\r\n- Menghitung dimensi\r\nbejana (H dan D)\r\n- Menghitung tebal\r\nshell bejana\r\n- Kesimpulan\r\n[PT+BM:(1+1)x(3x6\r\n0”)]\r\n', 'eLearning:\r\nhttp://ilmu.upnj\r\natim.ac.id\r\n', 'Dimensi bejana\r\nbertekanan luar\r\n(H, D, dan tebal\r\nshell)\r\nNo.1: 97-114\r\nNo. 2: 331- 344\r\nNo. 3: : 29-47\r\n', '10', 60),
(33, '4,5', 44, 'Ketepatan dalam\r\nmenghitung dan\r\nmenentukan\r\nbentuk dan\r\nukuran tutup\r\nbejana\r\nbertekanan\r\n(dalam dan luar)\r\nsesuai standar\r\nserta analisis\r\nhasil perhitungan\r\ndengan lancar', 'Kriteria:\r\nPedoman\r\npenskoran\r\nmarking scheme\r\nBentuk:\r\n- Non-Test:\r\nLatihan soal', 'Minggu 4:\r\nKuliah\r\nDiskusi Kelompok\r\n[TM: 1x(3x50”)]\r\nLatihan Soal\r\n[PT+BM:(1+1)x(3x60”\r\n)]\r\n\r\nMinggu 5:\r\nQuiz\r\n[TM: 1x(3x50”)]\r\nMerancang tutup\r\nbejana pendek\r\nbertekanan luar dan\r\ndalam sesuai standard\r\ndan menganalisis hasil\r\nperhitungan\r\n[PT+BM:(1+1)x(3x60”\r\n)]', ' eLearning:\r\nhttp://ilmu.upnj\r\natim.ac.id', 'Minggu 4:\r\n- Perancangan\r\ntutup bejana\r\npendek\r\ntekanan\r\ndalam\r\n- Pemilihan\r\njenis material\r\ntutup bejana\r\npendek\r\nbertekanan\r\ndalam\r\n- Pemilihan\r\njenis dan\r\ntutup yang\r\nsesuai\r\nstandard\r\n\r\nMinggu 5:\r\nPerancangan\r\ntutup bejana\r\npendek\r\ntekanan luar\r\n- Pemilihan\r\njenis material\r\ntutup bejana\r\npendek\r\nbertekanan\r\nluar\r\n- Pemilihan\r\njenis dan\r\ntutup yang\r\nsesuai\r\nstandard', '15', 60),
(34, '6', 45, 'Ketepatan dalam\r\nerancang dan\r\nmenentukan jenis\r\npenyangga\r\nbejana pendek\r\nsesuai standar\r\nserta analisis\r\nhasil perhitungan\r\ndengan benar.', 'Kriteria:\r\nPedoman\r\npenskoran\r\nmarking scheme\r\nBentuk:\r\n- Non-Test:\r\n- Diskusi\r\nKelompok\r\n- Tugas\r\nKelompok', 'Kuliah\r\nDiskusi\r\nTM: 1x(3x50”)]\r\nTugas 4:\r\nMerancang penyangga\r\nbejana pendek sesuai\r\ndengan standard dan\r\nmenentukan jenis\r\nserta bentuk\r\npenyangga yang\r\nsesuai.\r\n[PT+BM:(1+1)x(3x60”\r\n)]\r\n', 'eLearning:\r\nhttp://ilmu.upnj\r\natim.ac.id', 'Perancangan\r\npenyangga\r\nbejana\r\npendek\r\nsesuai\r\nstandard\r\n- Menghitung\r\nberat isi,\r\nberat bejana,\r\nberat tutup\r\natas dan\r\nbawah\r\nbejana, berat\r\naksesoris,\r\ndan tekanan\r\ntotal\r\n- Menentukan\r\njenis dan\r\nbentuk penyangga\r\nyang sesuai', '15', 60),
(35, '7', 46, 'Ketepatan dalam\r\nmenjelaskan\r\nsafety hazard\r\nterkait\r\nperancangan\r\nbejana\r\nbertekanan. ', 'Kriteria:\r\nRubrik deskriptif\r\nBentuk:\r\n- Nont-Test\r\n- Membuat\r\nmakalah dan\r\npower point\r\ntentang safety\r\nhazard terkait\r\nperancangan\r\nbejana\r\nbertekanan\r\n- Presentasi\r\nkelompok', 'Kuliah dan\r\nResponsi\r\nDiskusi Kelompok\r\nPresentasi\r\nKelompok\r\n[TM: 1x(3x50”)]\r\nTugas 5:\r\n- Membuat makalah\r\ndan power point\r\ntentang safety\r\nhazard terkait\r\nperancangan\r\nbejana bertekanan\r\n[PT+BM:(1+1)x(3x60”\r\n)]', ' forum\r\neLearning:\r\nhttp://ilmu.upnj\r\natim.ac.id', 'Safety hazard\r\nterkait\r\nperancangan\r\nbejana\r\nbertekanan', '5', 60),
(36, '9', 47, 'Ketepatan dalam\r\nmenjelaskan\r\nkonsep dan\r\npersyaratan\r\ndalam merancang\r\nbejana tinggi\r\nberdasar tekanan\r\ndalam dan\r\ntekanan luar\r\nsesuai standar\r\nserta analisis\r\nhasil perhitungan\r\ndengan benar.', 'Kriteria:\r\nPedoman\r\npenilaian\r\nObservasi\r\nBentuk:\r\n- Non-Test:\r\nDiskusi\r\nKelompok\r\n Tanya Jawab', 'Kuliah\r\nDiskusi\r\n[TM: 1x(3x50”)] ', 'eLearning:\r\nhttp://ilmu.upnj\r\natim.ac.id\r\n Chatting dan\r\ndiskusi pada\r\nWhatsApp', 'Pendahuluan\r\nBejana Tinggi\r\nuntuk proses\r\npemisahan\r\nNo.1: 97-114:\r\n- Konsep\r\nperhitungan\r\ntekanan\r\noperasi\r\n- Konsep\r\nperancangan\r\ntebal shell\r\nuntuk bejana\r\ntekanan dalam dan\r\nvakum', '5', 60),
(37, '10,11', 48, 'Ketepatan dalam\r\nstres karena\r\ntekanan operasi,\r\nstres karena berat\r\nbeban dan stress\r\nkarena\r\nangin/gempa', 'Kriteria:\r\nPedoman\r\npenskoran\r\nmarking scheme\r\nBentuk:\r\n- Non-Test:\r\nTugas Mandiri', 'Minggu 10:\r\nKuliah\r\nDiskusi\r\n[TM: 1x(3x50”)]\r\nLatihan :\r\nPerhitungan stress\r\noverall, stress\r\ntekanan, beban mati,\r\ndan strees angin\r\n[PT+BM:(1+1)x(3x60”\r\n)]\r\nMinggu 11:\r\nKuliah\r\nDiskusi\r\n[TM: 1x(3x50”)]\r\nTugas 6:\r\nMerancang tinggi\r\nbejana bertekanan\r\ndalam\r\n[PT+BM:(1+1)x(3x60”\r\n)]\r\n', 'eLearning:\r\nhttp://ilmu.upnj\r\natim.ac.id\r\n Membaca text\r\ndan media\r\npembelajaran\r\nppt,\r\nhttp://ilmu.upnj\r\natim.ac.id', 'Minggu 10:\r\nPerancangan\r\nbejana tinggi\r\nbertekanan dalam\r\n- Perhitungan\r\nstress overall\r\n- Stress\r\ntekanannopera\r\nsi, beban mati,\r\ndan stress\r\nangin\r\nMinggu 11:\r\nPerhitungan\r\nTinggi bejana,\r\nMenentukan\r\nnilai tinggi\r\nsejarak X dari\r\npuncak bejana', '10', 60),
(38, '12,13', 49, 'Ketepatan dalam\r\nmerancang\r\nbejana tinggi untuk proses\r\npemisahan,\r\nbejana tekanan\r\nvakum sesuai\r\nstandar serta\r\nanalisis hasil\r\nperhitungan\r\ndengan benar', 'Kriteria:\r\nPedoman\r\npenskoran marking scheme\r\nBentuk:\r\n- Non-Test:\r\nTugas Mandiri\r\nBentuk\r\nTest', 'Minggu 12:\r\nKuliah\r\nDiskusi [TM: 1x(3x50”)]\r\nTugas 7:\r\nMereview dari\r\nreferensi up to date/\r\njurnal terkait bejana\r\ntinggi\r\n[PT+BM:(1+1)x(3x60”\r\n)]\r\nMinggu 13:\r\nQuiz\r\n[TM: 1x(3x50”)]\r\nTugas 8: Quiz\r\nMerancang bejana\r\ntinggi bertekanan luar\r\n(perhitungan tebal,\r\ndiameter dan tinggi\r\nbejana)', 'eLearning:\r\nhttp://ilmu.upnj\r\natim.ac.id\r\nChatting dan\r\ndiskusi pada\r\nWhatsApp\r\n Membaca text\r\ndan media\r\npembelajaran\r\nppt,\r\nhttp://ilmu.upnj\r\natim.ac.id', 'Minggu 12:\r\n Perhitungan\r\nstress overall\r\nStress karena\r\ntekanan,\r\nbeban mati,\r\ndan stress\r\nkarena angin\r\n Menentukan\r\nketinggian X\r\n Menentukan\r\ntinggi total\r\nbejana\r\nMinggu 13:\r\n Penentuan\r\ntebal,\r\ndiameter dan\r\ntinggi bejana\r\n Perancangan\r\nbejana tinggi\r\nbertekanan\r\nvakum', '15', 60),
(39, '14', 50, 'Ketepatan dalam\r\nmerancang\r\npenyangga\r\nbejana tinggi dan\r\npondasi sesuai\r\nstandar serta\r\nanalisis hasil\r\nperhitungan\r\ndengan benar.', 'Kriteria:\r\nPedoman\r\npenskoran\r\nmarking scheme\r\nBentuk:\r\n- Non-Test:\r\n- Diskusi\r\nKelompok\r\n- Tugas\r\nKelompok\r\n', 'Kuliah\r\nDiskusi\r\n[TM: 1x(3x50”)]\r\nTugas 9:\r\nMerancang penyangga\r\nbejana tinggi sesuai\r\ndengan standard\r\n[PT+BM:(1+1)x(3x60”\r\n)]\r\n', ' Chatting dan\r\ndiskusi pada\r\nforum\r\neLearning:\r\nhttp://ilmu.upnj\r\natim.ac.id\r\n Chatting dan\r\ndiskusi pada\r\nWhatsApp\r\nMembaca text\r\ndan media\r\npembelajaran\r\nppt,\r\nhttp://ilmu.upnj\r\natim.ac.id', ' Perhitungan\r\nberat total\r\nbejana\r\n perancangan\r\npondasi\r\n', '5', 60),
(40, '15', 51, 'Ketepatan dalam\r\nmenjelaskan\r\nIdentifikasi,\r\nkontrol dan\r\nassesment suatu\r\nhazard.', 'Kriteria:\r\nRubrik deskriptif\r\nBentuk:\r\n- Nont-Test\r\nMembuat\r\nmakalah dan\r\npower point\r\ntentang\r\nidentifikasi,\r\nkontrol dan\r\nassesment suatu\r\nhazard\r\nPresentasi\r\nkelompok', 'Kuliah dan Responsi\r\nDiskusi Kelompok\r\nPresentasi Kelompok\r\n[TM: 1x(3x50”)]\r\nTugas 10:\r\nMembuat makalah dan\r\npower point tentang\r\nidentifikasi, kontrol dan\r\nassesment suatu\r\nhazard\r\n[PT+BM:(1+1)x(3x60”\r\n)]', 'eLearning:\r\nhttp://ilmu.upnj\r\natim.ac.id', 'Identifikasi,\r\nkontrol dan\r\nassesment\r\nsuatu hazard', '5', 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_sub`
--

CREATE TABLE `detail_sub` (
  `id_detailsub` int(11) NOT NULL,
  `id_subcpmk` int(11) NOT NULL,
  `kode_baru` varchar(20) NOT NULL,
  `id_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama_dosen` varchar(150) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `gambar` text NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nip`, `nama_dosen`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_telp`, `email`, `gambar`, `id_jurusan`, `id_user`) VALUES
(28, '112232323232', 'DR.Ir.Edi Mulyadi, SU', 'Surabaya', '2022-05-06', 'Surabaya', '082176212512', 'edimulyadi.tekkim@upnjatim.ac.id', 'amerika.png', 16, 60),
(29, '121212121212', 'Ir. Retno Dewati, MT', 'Jakarta', '2022-05-05', 'Surabaya', '08271261652', 'retno.tekkim@upnjatim.ac.id', 'australia.png', 16, 61),
(30, '', 'Dr. Ir. Sintha Soraya Santi, MT', '', '0000-00-00', '', '', 'sintha.tekkim@upnjatim.ac.id', 'gambar.png', 16, 62),
(31, '', 'Dr. I Gede Susrama Mas Diyasa, ST, MT.', '', '0000-00-00', '', '', 'igsusrama.if@upnjatim.ac.id', 'gambar.png', 18, 63),
(32, '', 'Budi Nugroho, S.Kom, M.Kom', '', '0000-00-00', '', '', 'budinugroho.if@upnjatim.ac.id', 'gambar.png', 17, 64),
(33, '', 'Tresna Maulana Fahrudin, S.ST, M.T', '', '0000-00-00', '', '', 'tresna.maulana.ds@upnjatim.ac.id', 'gambar.png', 18, 79),
(34, '', 'Dr. Ir. SRIE MULJANI, M.T.', '', '0000-00-00', '', '', 'sriemuljani.kimia@upnjatim.ac.id', 'gambar.png', 16, 81),
(35, '', 'NOVE KARTIKA ERLIYANTI, S.T., M.T', '', '0000-00-00', '', '', 'novekartika.kimia@upnjatim.ac.id', 'gambar.png', 16, 82);

-- --------------------------------------------------------

--
-- Struktur dari tabel `evaluasi`
--

CREATE TABLE `evaluasi` (
  `id_evaluasi` int(11) NOT NULL,
  `id_detailrps` int(11) NOT NULL,
  `asesmen` text NOT NULL,
  `detail_asesmen` text NOT NULL,
  `id_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `evaluasi`
--

INSERT INTO `evaluasi` (`id_evaluasi`, `id_detailrps`, `asesmen`, `detail_asesmen`, `id_matkul`) VALUES
(14, 14, 'Non – Tes :\r\nDiskusi Kelompok\r\nTepat waktu mengumpulkan tugas.\r\nTugas I : mengerjakan tugas mandiri tentang\r\nkinetika reaksi homogen', '', 54),
(15, 15, 'Non – Tes :\r\nDiskusi Kelompok\r\nTepat waktu mengumpulkan tugas.\r\nTugas 2: mengerjakan tugas mandiri :\r\nMenentukan kecepatan reaksi pada volume\r\nkonstan dan berubah\r\n', '', 54),
(16, 16, 'Non – Tes :\r\nDiskusi Kelompok\r\nTepat waktu mengumpulkan tugas.\r\nTugas 3: mengerjakan tugas mandiri :\r\nMerancang reactor ideal.\r\n', '', 54),
(17, 17, 'Non – Tes :\r\nDiskusi Kelompok\r\nTepat waktu mengumpulkan tugas.\r\nTugas 4: mengerjakan tugas mandiri :\r\nMerancang reactor yang disusun ganda', '', 54),
(18, 18, 'Non – Tes :\r\nDiskusi Kelompok\r\nTepat waktu mengumpulkan tugas.\r\nTugas 5 : mengerjakan tugas mandiri:\r\nmerancang reactor ganda , untuk system\r\nrecycle dan kinetikaraksi parallel.', '', 54),
(19, 19, 'Non – Tes :\r\nDiskusi Kelompok\r\nTepat waktu mengumpulkan tugas.\r\nTugas 6 : mengerjakan tugas mandiri :\r\nmerumuskan persamaan kecepatan reaksi\r\nhomogen jika untuk reaksi berbentuk reaksi\r\nseri-paralel (multiple).\r\n', '', 54),
(20, 20, 'Non – Tes :\r\nDiskusi Kelompok\r\nTepat waktu mengumpulkan tugas.\r\nTugas 7: mengerjakan tugas mandiri\r\nmenentukan suhu optimum dari reaktor, untuk\r\nreaksi tunggal dan multiple', '', 54),
(21, 21, 'Non Tes', 'Tugas Kelompok', 54),
(22, 28, '1', '', 58),
(23, 29, '2', '', 58),
(24, 30, '3', '', 58),
(27, 31, 'Non-Tes:\r\nDiskusi Kelompok\r\n Tepat waktu\r\nmengumpulkan tugas\r\n Topik sesuai tentang jenisjenis, dan fungsi bejana\r\nbertekanan, serta kodekode dan standar\r\nperancangan\r\n Mengerjakan tugas\r\nkelompok:\r\n- Menentukan bejana tekanan\r\ndalam/tekanan luar\r\n- Menghitung P desain\r\n- Menghitung dimensi bejana\r\n(H dan D)\r\n- Kesimpulan', '', 60),
(28, 32, 'Non-Test:\r\nMengerjakan Tugas\r\nKelompok\r\n Tepat waktu\r\nmengumpulkan tugas\r\n Mengerjakan tugas\r\nkelompok:\r\n- Menentukan bejana tekanan\r\ndalam/tekanan luar Menghitung P desain\r\n- Menghitung dimensi bejana\r\n(H dan D)\r\n- Kesimpulan', '', 60),
(29, 33, 'Test:\r\nQuiz\r\n Tepat waktu\r\nmengumpulkan tugas\r\n Mengerjakan tugas\r\nkelompok:\r\n- Menentukan bejana di desain\r\ntekanan dalam/luar\r\n- Menghitung P desain\r\n- Menghitung tebal shell\r\n- Menghitung tebal tutup atas\r\n- Menghitung tebal tutup bawah\r\n- Kesimpulan\r\n', '', 60),
(30, 34, ' Tepat waktu\r\nmengumpulkan tugas\r\n Mengerjakan tugas\r\nkelompok:\r\n- Menghitung berat isi\r\n- Menghitung berat bejana\r\n- Menghitung berat tutup atas\r\n- Menghitung berat tutup\r\nbawah\r\n- Menghitung berat aksesoris\r\n- Menghitung tekanan total\r\n- Kesimpulan ', '', 60),
(31, 35, 'Non-Test:\r\nMengerjakan Tugas\r\nKelompok\r\n Tepat waktu dalam\r\nmengumpulkan tugas\r\n Diskusi di kelas:\r\n- Dasar hukum K3 bejana\r\nbertekanan\r\n- Bahaya bejana bertekanan\r\n- Keaktifan dalam\r\nmemaparkan materi', '', 60),
(32, 36, 'Non-Test:\r\n Tepat waktu\r\nmengumpulkan tugas\r\nTopik sesuai tentang konsep\r\ndan persyaratan dalam\r\nmerancang bejana tinggi\r\nberdasar tekanan dalam dan\r\ntekanan luar sesuai standar \r\n', '', 60),
(33, 37, 'Non-Test:\r\nMengerjakan Tugas\r\nKelompok\r\n- Tepat waktu dalam mengumpulkan tugas\r\n- Mengerjakan tugas\r\nkelompok:\r\n- Menentukan desain bejana\r\ntinggi berdasarkan tekanan\r\ndalam\r\n- Menghitung dimensi bejana\r\ntinggi\r\n', '', 60),
(34, 38, 'Test:\r\nQuiz\r\n- Tepat waktu dalam\r\nmengumpulkan tugas\r\n- Mengerjakan tugas\r\nkelompok:\r\n- Menentukan desain bejana\r\ntinggi berdasarkan tekanan\r\nvakum\r\n- Menghitung dimensi bejana\r\ntinggi.', '', 60),
(35, 39, 'Non-Test: Mengerjakan\r\nTugas-Kelompok\r\n- Tepat waktu dalam\r\nmengumpulkan tugas\r\n- Mengerjakan tugas\r\nkelompok:\r\n- Menentukan jenis\r\npenyangga\r\n- Menghitung berat total\r\nbejana tinggi\r\n- Kesimpulan', '', 60),
(36, 40, 'Non-Test: Mencari materi di\r\ninternet tentang identifikasi,\r\nkontrol dan assesment suatu\r\nhazard', '', 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `evaluasi_mhs`
--

CREATE TABLE `evaluasi_mhs` (
  `id_evaluasimhs` int(11) NOT NULL,
  `id_evaluasi2` int(11) NOT NULL,
  `nilai_mhs` int(11) NOT NULL,
  `bobot_mhs` float NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `evaluasi_mhs`
--

INSERT INTO `evaluasi_mhs` (`id_evaluasimhs`, `id_evaluasi2`, `nilai_mhs`, `bobot_mhs`, `id_matkul`, `id_user`) VALUES
(45, 14, 80, 4, 54, 73),
(46, 15, 85, 8.5, 54, 73),
(47, 16, 80, 16, 54, 73),
(48, 17, 83, 12.45, 54, 73),
(49, 18, 80, 8, 54, 73),
(50, 19, 90, 13.5, 54, 73),
(51, 20, 85, 8.5, 54, 73),
(52, 21, 85, 12.75, 54, 73),
(53, 22, 80, 2, 58, 77),
(54, 23, 85, 4.25, 58, 77),
(55, 24, 82, 8.2, 58, 77),
(56, 14, 80, 4, 54, 77),
(57, 15, 86, 8.6, 54, 77),
(58, 16, 80, 16, 54, 77),
(59, 17, 90, 13.5, 54, 77),
(60, 18, 80, 8, 54, 77),
(61, 19, 85, 12.75, 54, 77),
(62, 20, 87, 8.7, 54, 77),
(63, 21, 86, 12.9, 54, 77),
(64, 22, 86, 2.15, 58, 73),
(65, 23, 92, 4.6, 58, 73),
(66, 24, 70, 7, 58, 73),
(67, 22, 86, 2.15, 58, 78),
(68, 23, 88, 4.4, 58, 78),
(76, 24, 90, 9, 58, 78),
(77, 27, 88, 13.2, 60, 83),
(78, 28, 90, 9, 60, 83),
(79, 29, 78, 11.7, 60, 83),
(80, 30, 85, 12.75, 60, 83),
(81, 31, 75, 3.75, 60, 83),
(82, 32, 80, 4, 60, 83),
(83, 33, 90, 9, 60, 83),
(84, 34, 92, 13.8, 60, 83),
(85, 35, 87, 4.35, 60, 83),
(87, 27, 90, 13.5, 60, 84),
(88, 28, 80, 8, 60, 84),
(89, 29, 92, 13.8, 60, 84),
(90, 30, 85, 12.75, 60, 84),
(91, 31, 78, 3.9, 60, 84),
(92, 32, 82, 4.1, 60, 84),
(93, 33, 80, 8, 60, 84),
(94, 34, 86, 12.9, 60, 84),
(95, 35, 85, 4.25, 60, 84),
(96, 36, 85, 4.25, 60, 84),
(97, 27, 80, 12, 60, 85),
(98, 28, 87, 8.7, 60, 85),
(99, 29, 90, 13.5, 60, 85),
(100, 30, 78, 11.7, 60, 85),
(101, 31, 80, 4, 60, 85),
(102, 32, 85, 4.25, 60, 85),
(103, 33, 82, 8.2, 60, 85),
(104, 34, 86, 12.9, 60, 85),
(105, 35, 90, 4.5, 60, 85),
(106, 36, 84, 4.2, 60, 85),
(107, 36, 80, 4, 60, 83);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `nama_fakultas` varchar(255) NOT NULL,
  `kode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`, `kode`) VALUES
(9, 'Ilmu Komputer', 'FIK'),
(10, 'Teknik', 'FT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kode_jurusan` varchar(15) NOT NULL,
  `koordinator_jurusan` varchar(150) NOT NULL,
  `id_fakultas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama`, `kode_jurusan`, `koordinator_jurusan`, `id_fakultas`) VALUES
(16, 'Teknik Kimia', 'Tekkim', 'Dr. Ir. Sintha Soraya Santi, MT', 10),
(17, 'Informatika', 'IF', 'Budi Nugroho, S.Kom, M.Kom', 9),
(18, 'Sains Data', 'DS', 'Dr. I Gede Susrama Mas Diyasa, ST, MT.', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kajian`
--

CREATE TABLE `kajian` (
  `id_kajian` int(11) NOT NULL,
  `nama_kajian` text NOT NULL,
  `deskripsi` text NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kajian`
--

INSERT INTO `kajian` (`id_kajian`, `nama_kajian`, `deskripsi`, `id_jurusan`, `id_user`) VALUES
(2, 'Kimia ', 'kimia adalah', 16, 72),
(3, 'Reaksi Kimia', 'reaksi kimia adalah', 16, 72);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kajian_cpl`
--

CREATE TABLE `kajian_cpl` (
  `id_kajiancpl` int(11) NOT NULL,
  `id_kajian` int(11) NOT NULL,
  `id_cpl` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kajian_cpl`
--

INSERT INTO `kajian_cpl` (`id_kajiancpl`, `id_kajian`, `id_cpl`, `id_user`, `id_jurusan`) VALUES
(27, 3, 20, 72, 16),
(28, 3, 21, 72, 16),
(29, 2, 20, 72, 16),
(30, 2, 21, 72, 16),
(31, 2, 23, 72, 16),
(32, 3, 23, 72, 16),
(33, 3, 24, 72, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kajian_matkul`
--

CREATE TABLE `kajian_matkul` (
  `id_kajianmk` int(11) NOT NULL,
  `id_kajian` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kajian_matkul`
--

INSERT INTO `kajian_matkul` (`id_kajianmk`, `id_kajian`, `id_matkul`, `id_user`, `id_jurusan`) VALUES
(7, 2, 54, 72, 16),
(8, 2, 58, 72, 16),
(9, 3, 54, 72, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `landasan`
--

CREATE TABLE `landasan` (
  `id_landasan` int(11) NOT NULL,
  `filosofis` text NOT NULL,
  `psikologis` text NOT NULL,
  `sosiologis` text NOT NULL,
  `iptek` text NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `landasan`
--

INSERT INTO `landasan` (`id_landasan`, `filosofis`, `psikologis`, `sosiologis`, `iptek`, `id_jurusan`, `id_user`) VALUES
(3, 'filosofis', 'prikologis', 'sosiologis', 'iptek', 16, 72);

-- --------------------------------------------------------

--
-- Struktur dari tabel `luar_cpl`
--

CREATE TABLE `luar_cpl` (
  `id_luar_cpl` int(11) NOT NULL,
  `id_mbkm` int(11) NOT NULL,
  `id_cpl` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `luar_cpl`
--

INSERT INTO `luar_cpl` (`id_luar_cpl`, `id_mbkm`, `id_cpl`, `id_user`, `id_jurusan`) VALUES
(4, 4, 20, 72, 16),
(5, 4, 21, 72, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nama_mhs` varchar(150) NOT NULL,
  `npm` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `gambar` text NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nama_mhs`, `npm`, `email`, `no_hp`, `gambar`, `id_jurusan`, `id_user`) VALUES
(8, 'Khafid Ubay Ilyas', '1631010133', '1631010133@student.upnjatim.ac.id', '087655324212', 'gambar.png', 16, 73),
(12, 'Nur Syifaul Husna', '18081010042', '18081010042@student.upnjatim.ac.id', '08818532807', 'gambar.png', 16, 77),
(13, 'Dewi Azizah', '18081010043', '18081010043@student.upnjatim.ac.id', '0886541545', 'gambar.png', 16, 78),
(14, 'Sylvanus Pridia Fransisco', '18031010011', '18031010011@student.upnjatim.ac.id', '086', 'gambar.png', 16, 83),
(15, 'UMMY HAFILDA', '18031010153', '18031010153@student.upnjatim.ac.id', '089', 'gambar.png', 16, 84),
(16, 'HANS BALAPRADHANA', '18031010116', '18031010116@student.upnjatim.ac.id', '098', 'gambar.png', 16, 85);

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` text NOT NULL,
  `kode_matkul` text NOT NULL,
  `sks_teori` int(11) NOT NULL,
  `sks_praktek` int(11) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `jenis_mk` varchar(10) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `nama_matkul`, `kode_matkul`, `sks_teori`, `sks_praktek`, `semester`, `jenis_mk`, `id_jurusan`, `id_tahun`) VALUES
(54, 'TEKNIK REAKSI KIMIA I', 'TK141111', 2, 0, 'IV', 'MK Prodi', 16, 12),
(55, 'Pemrograman Lanjut', 'Pemlan', 2, 1, 'II', '', 17, 12),
(56, 'Algoritma', 'Algo', 2, 1, 'I', '', 17, 10),
(57, 'Kimia', 'Kimia', 2, 1, 'I', '', 16, 10),
(58, 'ANALISIS KIMIA', 'TK0002', 2, 0, 'II', 'MK Prodi', 16, 12),
(59, 'Big data', 'DS211102', 2, 1, 'IV', '', 18, 12),
(60, 'PERANCANGAN ALAT INDUSTRI KIMIA', 'TK141127', 3, 0, 'VI', '', 16, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul_mhs`
--

CREATE TABLE `matkul_mhs` (
  `id_matkulmhs` int(11) NOT NULL,
  `id_pengampu` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matkul_mhs`
--

INSERT INTO `matkul_mhs` (`id_matkulmhs`, `id_pengampu`, `id_user`) VALUES
(7, 45, 73),
(8, 47, 73),
(10, 45, 77),
(11, 48, 77),
(12, 48, 73),
(13, 51, 78),
(14, 54, 83),
(15, 54, 84),
(16, 54, 85);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mbkm`
--

CREATE TABLE `mbkm` (
  `id_mbkm` int(11) NOT NULL,
  `kode_mbkm` varchar(10) NOT NULL,
  `nama_mbkm` text NOT NULL,
  `sks_mbkm` int(11) NOT NULL,
  `semester_mbkm` varchar(5) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `status_mbkm` varchar(10) NOT NULL,
  `jenis_mbkm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mbkm`
--

INSERT INTO `mbkm` (`id_mbkm`, `kode_mbkm`, `nama_mbkm`, `sks_mbkm`, `semester_mbkm`, `id_jurusan`, `status_mbkm`, `jenis_mbkm`) VALUES
(4, 'MBK002', 'Kimiaa', 3, 'IV', 16, '', 'Luar'),
(5, 'MBK003', 'Aaya', 3, 'III', 16, 'Tidak', 'Non'),
(6, 'MB004', 'Gaga', 3, 'II', 16, 'Tidak', 'Dalam'),
(7, 'MB0082', 'alksajs', 3, 'V', 16, '', 'Dalam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mbkm_cpl`
--

CREATE TABLE `mbkm_cpl` (
  `id_mbkm_cpl` int(11) NOT NULL,
  `id_mbkm` int(11) NOT NULL,
  `id_cpl` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mbkm_cpl`
--

INSERT INTO `mbkm_cpl` (`id_mbkm_cpl`, `id_mbkm`, `id_cpl`, `id_user`, `id_jurusan`) VALUES
(15, 6, 20, 72, 16),
(16, 6, 21, 72, 16),
(17, 6, 22, 72, 16),
(18, 7, 20, 72, 16),
(19, 7, 23, 72, 16),
(20, 7, 21, 72, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `media` varchar(200) NOT NULL,
  `jenis_media` varchar(20) NOT NULL,
  `id_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `media`
--

INSERT INTO `media` (`id_media`, `media`, `jenis_media`, `id_matkul`) VALUES
(7, 'Laptop', 'Perangkat Keras', 54),
(8, 'LCD dan Projector', 'Perangkat Keras', 54),
(9, 'E-learning', 'Perangkat Lunak', 54),
(10, 'WhatsApp', 'Perangkat Lunak', 54),
(11, 'OS; Windows dan Ms. Office', 'Perangkat Lunak', 54),
(12, 'Laptop', 'Perangkat Keras', 60),
(13, 'Papan Tulis', 'Perangkat Keras', 60),
(14, ' LCD dan Projector', 'Perangkat Keras', 60),
(15, 'E-learning', 'Perangkat Lunak', 60),
(16, 'WhatsApp', 'Perangkat Lunak', 60),
(17, 'OS; Windows dan Ms. Office', 'Perangkat Lunak', 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_cpl`
--

CREATE TABLE `nilai_cpl` (
  `id_nilaicpl` int(11) NOT NULL,
  `id_cplmk` int(11) NOT NULL,
  `nilai_cpl` float NOT NULL,
  `total_bobot` float NOT NULL,
  `hasil_cpl` float NOT NULL,
  `ket_cpl` varchar(20) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `id_pengampu` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai_cpl`
--

INSERT INTO `nilai_cpl` (`id_nilaicpl`, `id_cplmk`, `nilai_cpl`, `total_bobot`, `hasil_cpl`, `ket_cpl`, `id_matkul`, `id_pengampu`, `id_user`) VALUES
(22, 21, 26, 30, 86.6667, 'Lulus', 54, 45, 73),
(23, 22, 57.7, 70, 82.4286, 'Lulus', 54, 45, 73),
(24, 23, 6.25, 7.5, 83.3333, 'Lulus', 58, 48, 77),
(25, 24, 8.2, 10, 82, 'Lulus', 58, 48, 77),
(26, 21, 25.35, 30, 84.5, 'Lulus', 54, 45, 77),
(27, 22, 59.1, 70, 84.4286, 'Lulus', 54, 45, 77),
(28, 23, 6.75, 7.5, 90, 'Lulus', 58, 48, 73),
(29, 24, 7, 10, 70, 'Tidak Lulus', 58, 48, 73),
(34, 23, 6.55, 7.5, 87.3333, 'Lulus', 58, 51, 78),
(35, 24, 9, 10, 90, 'Lulus', 58, 51, 78),
(36, 28, 34.3, 40, 85.75, 'Lulus', 60, 54, 83),
(37, 29, 3.75, 5, 75, 'Lulus', 60, 54, 83),
(38, 30, 47.5, 55, 86.3636, 'Lulus', 60, 54, 83),
(39, 28, 34.6, 40, 86.5, 'Lulus', 60, 54, 84),
(40, 29, 3.9, 5, 78, 'Lulus', 60, 54, 84),
(41, 30, 46.95, 55, 85.3636, 'Lulus', 60, 54, 84),
(42, 28, 32.45, 40, 81.125, 'Lulus', 60, 54, 85),
(43, 29, 4, 5, 80, 'Lulus', 60, 54, 85),
(44, 30, 47.5, 55, 86.3636, 'Lulus', 60, 54, 85);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_matkul_cpl`
--

CREATE TABLE `nilai_matkul_cpl` (
  `id_nilai_matkul_cpl` int(11) NOT NULL,
  `id_cplmk` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `id_pengampu` int(11) NOT NULL,
  `nilai_matkul_cpl` float NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai_matkul_cpl`
--

INSERT INTO `nilai_matkul_cpl` (`id_nilai_matkul_cpl`, `id_cplmk`, `id_matkul`, `id_pengampu`, `nilai_matkul_cpl`, `id_jurusan`) VALUES
(1, 22, 54, 45, 83.4286, 16),
(2, 21, 54, 45, 85.5834, 16),
(3, 23, 58, 48, 86.6666, 16),
(4, 24, 58, 48, 76, 16),
(7, 23, 58, 51, 87.3333, 16),
(8, 24, 58, 51, 90, 16),
(9, 28, 60, 54, 84.4583, 16),
(10, 29, 60, 54, 77.6667, 16),
(11, 30, 60, 54, 86.1818, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `non_cpl`
--

CREATE TABLE `non_cpl` (
  `id_non_cpl` int(11) NOT NULL,
  `id_mbkm` int(11) NOT NULL,
  `id_cpl` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `non_cpl`
--

INSERT INTO `non_cpl` (`id_non_cpl`, `id_mbkm`, `id_cpl`, `id_user`, `id_jurusan`) VALUES
(1, 5, 24, 72, 16),
(2, 5, 25, 72, 16),
(3, 5, 26, 72, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengampu_mk`
--

CREATE TABLE `pengampu_mk` (
  `id_pengampu` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `nama_dosen2` varchar(150) NOT NULL,
  `nama_dosen3` varchar(150) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `koordinator` varchar(150) NOT NULL,
  `kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengampu_mk`
--

INSERT INTO `pengampu_mk` (`id_pengampu`, `id_dosen`, `nama_dosen2`, `nama_dosen3`, `id_matkul`, `koordinator`, `kelas`) VALUES
(45, 28, '', '', 54, 'DR.Ir.Edi Mulyadi, SU', 'A'),
(47, 28, '', '', 57, 'Ir. Retno Dewati, MT', 'B'),
(48, 30, '', 'DR.Ir.Edi Mulyadi, SU', 58, 'Dr. Ir. Sintha Soraya Santi, MT', 'A'),
(51, 28, '', '', 58, 'Ir. Retno Dewati, MT', 'B'),
(52, 30, '', '', 54, 'DR.Ir.Edi Mulyadi, SU', 'B'),
(53, 33, 'Dr. I Gede Susrama Mas Diyasa, ST, MT.', '', 59, 'Tresna Maulana Fahrudin, S.ST, M.T', 'A'),
(54, 34, 'NOVE KARTIKA ERLIYANTI, S.T., M.T', '', 60, 'Dr. Ir. SRIE MULJANI, M.T.', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `email`, `id_dosen`, `id_user`, `id_jurusan`) VALUES
(19, 'budinugroho.if@upnjatim.ac.id', 32, 71, 17),
(20, 'retno.tekkim@upnjatim.ac.id', 29, 72, 16),
(21, 'igsusrama.if@upnjatim.ac.id', 31, 80, 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_cpl`
--

CREATE TABLE `profil_cpl` (
  `id_profil_cpl` int(11) NOT NULL,
  `id_lulusan` int(11) NOT NULL,
  `id_cpl` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_cpl`
--

INSERT INTO `profil_cpl` (`id_profil_cpl`, `id_lulusan`, `id_cpl`, `id_user`, `id_jurusan`) VALUES
(138, 14, 20, 72, 16),
(139, 14, 21, 72, 16),
(140, 14, 22, 72, 16),
(141, 15, 21, 72, 16),
(142, 15, 23, 72, 16),
(143, 15, 24, 72, 16),
(144, 18, 28, 71, 17),
(145, 20, 28, 71, 17),
(146, 20, 29, 71, 17),
(147, 16, 39, 72, 16),
(148, 16, 40, 72, 16),
(149, 16, 41, 72, 16),
(150, 17, 22, 72, 16),
(151, 17, 23, 72, 16),
(152, 17, 24, 72, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_lulusan`
--

CREATE TABLE `profil_lulusan` (
  `id_lulusan` int(11) NOT NULL,
  `kode_lulusan` varchar(10) NOT NULL,
  `profil` text NOT NULL,
  `deskripsi` text NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_lulusan`
--

INSERT INTO `profil_lulusan` (`id_lulusan`, `kode_lulusan`, `profil`, `deskripsi`, `id_jurusan`, `id_user`) VALUES
(14, 'PL01', 'Analisis Data', 'aalisis data yang ...', 16, 72),
(15, 'PL02', 'Analisis Kimia', 'blablabla', 16, 72),
(16, 'PL03', 'Asisten Lab', 'blablabla', 16, 72),
(17, 'PL04', 'Reaksi Kimia', 'blablablabla', 16, 72),
(18, 'PIF001', 'Programer', 'bkasjbaksagjsaks\r\n', 17, 71),
(20, 'PIF002', 'Data Analyst', 'data anlusasjaiksajns', 17, 71);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pustaka_pendukung`
--

CREATE TABLE `pustaka_pendukung` (
  `id_pendukung` int(11) NOT NULL,
  `pustaka_pendukung` text NOT NULL,
  `id_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pustaka_pendukung`
--

INSERT INTO `pustaka_pendukung` (`id_pendukung`, `pustaka_pendukung`, `id_matkul`) VALUES
(8, 'Forment, G.F., and Bischoff, K.B.,1979, Chemical Reactor Analysis and Design, 2\r\nnd\r\n edition., John Wiely & Sons, New York', 54),
(9, 'Smith, J.M.,1981, Chemical Engineering Kinetics, McGraw-Hill International Book Company, Toky', 54),
(10, 'Laider, K.J., 1965, Chemical Kinetics, 3\r\nnd edition, McGraw-Hill Book Company, New York ', 54),
(11, 'Ludwiq, 1979,”Applied Process Design For Chemical and Petrochemical Plants”, Vol III, New York', 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pustaka_utama`
--

CREATE TABLE `pustaka_utama` (
  `id_utama` int(11) NOT NULL,
  `pustaka_utama` text NOT NULL,
  `id_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pustaka_utama`
--

INSERT INTO `pustaka_utama` (`id_utama`, `pustaka_utama`, `id_matkul`) VALUES
(5, 'Levenspiel, O., 1999, Chemical Reaction Engineering, 3th edition, John Willey & Sons, New York.', 54),
(6, 'Brownell & E. H Young, Process Equipment Design, Vessel Design', 60),
(7, 'Hess and Rusthon, 1971,”Process Equipment design”, Princeton, New Jersey\r\n', 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id_setting`, `id_jurusan`) VALUES
(23, 16),
(24, 17),
(25, 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting_dosen`
--

CREATE TABLE `setting_dosen` (
  `id_setting2` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subcpmk`
--

CREATE TABLE `subcpmk` (
  `id_subcpmk` int(11) NOT NULL,
  `kode_subcpmk` varchar(11) NOT NULL,
  `subcpmk` text NOT NULL,
  `kode_baru` varchar(50) NOT NULL,
  `id_cplmk` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `subcpmk`
--

INSERT INTO `subcpmk` (`id_subcpmk`, `kode_subcpmk`, `subcpmk`, `kode_baru`, `id_cplmk`, `id_matkul`) VALUES
(30, 'Sub-CPMK1', 'Mahasiswa mampu menjelaskan dan memahami teori dasar kinetika reaksi homogen.', 'CPMK1', 21, 54),
(31, 'Sub-CPMK2', 'Mahasiswa mampu merumuskan dan menentukan kecepatan reaksi pada reaktor batch volume konstan dan volume berubah.', 'CPMK2', 21, 54),
(32, 'Sub-CPMK3', 'Mahasiswa mampu merancang reaktor ideal (batch, plug flow, mixed flow).\r\n', 'CPMK2', 22, 54),
(33, 'Sub-CPMK4', 'Mahasiswa mampu merancang reaktor yang disusun ganda dan recycle reaktor untuk system reaksi tunggal.', 'CPMK2', 22, 54),
(34, 'Sub-CPMK5', 'Mahasiswa mampu merumuskan kinetika reaksi paralel.', 'CPMK2', 22, 54),
(35, 'Sub-CPMK6', 'Mahasiswa dapat merumuskan persamaan kecepatan reaksi homogen jika untuk reaksi berbentuk reaksi seri-paralel (multiple).', 'CPMK', 21, 54),
(36, 'Sub-CPMK7', 'Mahasiswa dapat menentukan suhu optimum dari reaktor, untuk reaksi tunggal dan multiple\r\n', 'CPMK3', 22, 54),
(37, 'Sub-CPMK8', 'Mahasiswa mampu memilih jenis reaktor yang efektif untuk reaksi yang homogen.', 'CPMK4', 22, 54),
(38, 'SubCPMK1', 'assasasasasa', 'CPMK1', 23, 58),
(39, 'SubCPMK2', 'ewqeweassa', 'CPMK2', 23, 58),
(40, 'SubCPMK3', 'wawawawawa', 'CPMK1', 24, 58),
(42, 'Sub-CPMK1', 'Mampu menjelaskan pengertian, fungsi, kode-kode, standard perancangan bejana bertekanan (tekanan vakum dan\r\ntekanan dalam) dan meghitung dimensi bejana pendek tekanan dalam, bejana horizontal, dan vertical sesuai\r\nstandard dengan benar', 'CPMK J', 28, 60),
(43, 'Sub-CPMK2', 'Mampu menghitung dimensi bejana pendek tekanan dalam, bejana horizontal dan vertical sesuai standar dengan\r\nbenar', 'CPMK J', 30, 60),
(44, 'Sub-CPMK3', 'Mampu menjelaskan jenis dan bentuk tutup serta merancang tutup bejana bertekanan dalam dan luar sesuai\r\nstandard', 'CPMK L', 30, 60),
(45, 'Sub-CPMK4', 'Mampu memilihi dan menjelaskan jenis dan bentuk penyangga serta merancang penyangga bejana pendek sesuai\r\nstandar dengan benar', 'CPMK J', 28, 60),
(46, 'Sub-CPMK5', 'Mampu menjelaskan safety hazard terkait perancangan bejana bertekanan\r\n', 'CPMK K', 29, 60),
(47, 'Sub-CPMK6', 'Mampu menjelaskan konsep dan persyaratan dalam merancang bejana tinggi berdasar tekanan dalam dan tekanan\r\nluar sesuai standar dengan benar', 'CPMK J', 28, 60),
(48, 'Sub-CPMK7', 'Mampu merancang bejana tinggi untuk proses pemisahan, bejana tekanan dalam sesuai standar dengan benar', 'CPMK L', 30, 60),
(49, 'Sub-CPMK8', 'Mampu merancang bejana tinggi untuk proses pemisahan, bejana tekanan vakum sesuai standar dengan benar', 'CPMK L', 30, 60),
(50, 'Sub-CPMK9', 'Mampu merancang penyangga bejana tinggi dan pondasi sesuai standar dengan benar', 'CPMK J', 28, 60),
(51, 'Sub-CPMK10', 'Mampu\r\nmenjelaskan\r\nidentifikasi,\r\nkontrol dan\r\nassesment\r\nsuatu hazard', 'CPMK L', 30, 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `syarat`
--

CREATE TABLE `syarat` (
  `id_syarat` int(11) NOT NULL,
  `syarat` text NOT NULL,
  `id_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `syarat`
--

INSERT INTO `syarat` (`id_syarat`, `syarat`, `id_matkul`) VALUES
(6, 'Tidak ada syarat', 54),
(7, 'Azaz Teknik Kimia', 60),
(8, 'Bahan Konstruksi Kimia', 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun` int(11) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `semester_ajaran` varchar(20) NOT NULL,
  `status_ajaran` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun`, `tahun_ajaran`, `semester_ajaran`, `status_ajaran`) VALUES
(10, '2021/2022', 'Ganjil', 'Tidak Aktif'),
(12, '2021/2022', 'Genap', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `total`
--

CREATE TABLE `total` (
  `id_total` int(11) NOT NULL,
  `id_cpl` int(11) NOT NULL,
  `total_cpl` float NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `total`
--

INSERT INTO `total` (`id_total`, `id_cpl`, `total_cpl`, `id_jurusan`) VALUES
(1, 27, 79.7143, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `level` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `status`, `level`, `date_created`) VALUES
(59, 'nursiva3112@gmail.com', 'fac6dcc99d753552059000479582260a', 'Aktif', 1, 1645627792),
(60, 'edimulyadi.tekkim@upnjatim.ac.id', '5c913be9b7d3732443786aeebbad0818', 'Aktif', 3, 1650983551),
(61, 'retno.tekkim@upnjatim.ac.id', '5c913be9b7d3732443786aeebbad0818', 'Aktif', 3, 1650983585),
(62, 'sintha.tekkim@upnjatim.ac.id', '5c913be9b7d3732443786aeebbad0818', 'Aktif', 3, 1650983607),
(63, 'igsusrama.if@upnjatim.ac.id', 'd39ee8ba9be3fdea9671084e3017b8e7', 'Aktif', 3, 1650984184),
(64, 'budinugroho.if@upnjatim.ac.id', '270007185d0f4b290ded51f9345a7f29', 'Aktif', 3, 1650984732),
(71, 'budinugroho.if@upnjatim.ac.id', '4e7f2477836fa0c289105740fee0ebb1', 'Aktif', 2, 1651005695),
(72, 'retno.tekkim@upnjatim.ac.id', '248e6e545ad791936c77a244bd8c000b', 'Aktif', 2, 1651005719),
(73, '1631010133@student.upnjatim.ac.id', 'd55cb833d472fbd0f9703e6cb0970335', 'Aktif', 4, 1651067876),
(77, '18081010042@student.upnjatim.ac.id', '05d251ea28c5be9426611a121db0c92a', 'Aktif', 4, 1653635384),
(78, '18081010043@student.upnjatim.ac.id', 'c83127aaa949deeb6169d36f7c6a1cee', 'Aktif', 4, 1655127031),
(79, 'tresna.maulana.ds@upnjatim.ac.id', 'e79c7323f62151abde47e29987b38859', 'Aktif', 3, 1658216826),
(80, 'igsusrama.if@upnjatim.ac.id', '4e7f2477836fa0c289105740fee0ebb1', 'Aktif', 2, 1658216870),
(81, 'sriemuljani.kimia@upnjatim.ac.id', '5c913be9b7d3732443786aeebbad0818', 'Aktif', 3, 1658927763),
(82, 'novekartika.kimia@upnjatim.ac.id', '5c913be9b7d3732443786aeebbad0818', 'Aktif', 3, 1658927786),
(83, '18031010011@student.upnjatim.ac.id', '513a53ba9a91969e1afac8ae0fea7a90', 'Aktif', 4, 1658931039),
(84, '18031010153@student.upnjatim.ac.id', '25a44d3ebd615addf82e2a0a4f45bc55', 'Aktif', 4, 1658931117),
(85, '18031010116@student.upnjatim.ac.id', 'c2362a199a712f16cf255bfeb0115469', 'Aktif', 4, 1658931186),
(86, '0', '4e7f2477836fa0c289105740fee0ebb1', 'Aktif', 2, 1658970806),
(87, 'novekartika.kimia@upnjatim.ac.id', '827ccb0eea8a706c4c34a16891f84e7b', 'Aktif', 2, 1661081294),
(88, 'novekartika.kimia@upnjatim.ac.id', '827ccb0eea8a706c4c34a16891f84e7b', 'Aktif', 2, 1661081344),
(89, 'sriemuljani.kimia@upnjatim.ac.id', '827ccb0eea8a706c4c34a16891f84e7b', 'Aktif', 2, 1661081397),
(90, 'novekartika.kimia@upnjatim.ac.id', '827ccb0eea8a706c4c34a16891f84e7b', 'Aktif', 2, 1661081444);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(19, '1631010133@student.upnjatim.ac.id', 'hg65gza/8702/QE/p/z7VWLEZ0+Hd2rvNPknpERgGDA=', 1651067876),
(20, '18081010042@student.upnjatim.ac.id', 'f/1ndzrlBGZPHPCPqRKe4e9L1HbywbCSTQU+CUU7ga4=', 1651114632),
(21, '18081010042@student.upnjatim.ac.id', 'cY8RBYXL6hQ2h+TBTc0LIDfekvs8tuc9I53Jg7bk8Hc=', 1653635111),
(22, '18081010042@student.upnjatim.ac.id', '8c4dSvLurOFjcQRyNWbvXxKdSpT1iuq/c4rOEpFPkWA=', 1653635223),
(23, '18081010042@student.upnjatim.ac.id', '8kPFopnAsiNTGnuOtr2RYFfB7EUFWlGLaQ5HlM/u3Og=', 1653635384),
(24, '18081010043@student.upnjatim.ac.id', '/wP+fVh/fVVjpnNGZt/WF7ZGLZb6E0YjENhit9Mjoiw=', 1655127031),
(25, 'nursiva3112@gmail.com', 'izM3pKBeNTMcTarOoYe9Lv0ih977bbIO44YhOyIDZTM=', 1658648407),
(26, '18031010011@student.upnjatim.ac.id', 'xhO6hOyqp6t27yEX0CK2cbtflAPgJNz0RnYkAEeRH3c=', 1658931039),
(27, '18031010153@student.upnjatim.ac.id', 'nSqCnEhSr4jV+NCN7nzfkrYv+3R0eaxb40RGi58zlHU=', 1658931117),
(28, '18031010116@student.upnjatim.ac.id', 'D889j1fI/jP78+TynxgfOUbaxWfRiPTGi7FWaclAYb4=', 1658931186);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `fk_admin_user` (`id_user`);

--
-- Indeks untuk tabel `aspek`
--
ALTER TABLE `aspek`
  ADD PRIMARY KEY (`id_aspek`);

--
-- Indeks untuk tabel `bahan_kajian`
--
ALTER TABLE `bahan_kajian`
  ADD PRIMARY KEY (`id_bahan`),
  ADD KEY `fk_matkul_bahan` (`id_matkul`);

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cpl`
--
ALTER TABLE `cpl`
  ADD PRIMARY KEY (`id_cpl`),
  ADD KEY `fk_cpl_aspek` (`id_aspek`),
  ADD KEY `fk_cpl_user` (`id_user`),
  ADD KEY `fk_cpl_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `cpl_mk`
--
ALTER TABLE `cpl_mk`
  ADD PRIMARY KEY (`id_cplmk`),
  ADD KEY `fk_cpl_cplmk` (`id_cpl`),
  ADD KEY `fk_cplmk_matkul` (`id_matkul`),
  ADD KEY `fk_cplmk_aspek` (`id_aspek`);

--
-- Indeks untuk tabel `cpmk`
--
ALTER TABLE `cpmk`
  ADD PRIMARY KEY (`id_cpmk`),
  ADD KEY `fk_cpmk_cpl` (`id_cpl`),
  ADD KEY `fk_cpmk_matkul` (`id_matkul`);

--
-- Indeks untuk tabel `deskripsi_mk`
--
ALTER TABLE `deskripsi_mk`
  ADD PRIMARY KEY (`id_deskripsimk`),
  ADD KEY `fk_matkul_deskripsi_mk` (`id_matkul`);

--
-- Indeks untuk tabel `detail_rps`
--
ALTER TABLE `detail_rps`
  ADD PRIMARY KEY (`id_detailrps`),
  ADD KEY `fk_detailrps_matkul` (`id_matkul`),
  ADD KEY `fk_detailrps_subcpmk` (`id_subcpmk`);

--
-- Indeks untuk tabel `detail_sub`
--
ALTER TABLE `detail_sub`
  ADD PRIMARY KEY (`id_detailsub`),
  ADD KEY `fk_detail_subcpmk` (`id_subcpmk`),
  ADD KEY `fk_detail_matkul` (`id_matkul`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `fk_dosen_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `evaluasi`
--
ALTER TABLE `evaluasi`
  ADD PRIMARY KEY (`id_evaluasi`),
  ADD KEY `fk_evaluasi_detailrps` (`id_detailrps`),
  ADD KEY `fk_evaluasi_matkul` (`id_matkul`);

--
-- Indeks untuk tabel `evaluasi_mhs`
--
ALTER TABLE `evaluasi_mhs`
  ADD PRIMARY KEY (`id_evaluasimhs`),
  ADD KEY `fk_evaluasimhs_evaluasi` (`id_evaluasi2`),
  ADD KEY `fk_evaluasi_user` (`id_user`),
  ADD KEY `fk_evaluasimhs_matkul` (`id_matkul`);

--
-- Indeks untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`),
  ADD KEY `fk_jurusan_fakultas` (`id_fakultas`);

--
-- Indeks untuk tabel `kajian`
--
ALTER TABLE `kajian`
  ADD PRIMARY KEY (`id_kajian`),
  ADD KEY `fk_kajian_jurusan` (`id_jurusan`),
  ADD KEY `fk_kajian_user` (`id_user`);

--
-- Indeks untuk tabel `kajian_cpl`
--
ALTER TABLE `kajian_cpl`
  ADD PRIMARY KEY (`id_kajiancpl`),
  ADD KEY `fk_cpl_kajian` (`id_kajian`),
  ADD KEY `fk_kajian_cpl` (`id_cpl`),
  ADD KEY `fk_jurusan_kajiann` (`id_jurusan`),
  ADD KEY `fk_kajian_userr` (`id_user`);

--
-- Indeks untuk tabel `kajian_matkul`
--
ALTER TABLE `kajian_matkul`
  ADD PRIMARY KEY (`id_kajianmk`),
  ADD KEY `fk_bahanmk_kajian` (`id_kajian`),
  ADD KEY `fk_bahanmk_matkul` (`id_matkul`),
  ADD KEY `fk_bahanmk_user` (`id_user`),
  ADD KEY `fk_bahanmk_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `landasan`
--
ALTER TABLE `landasan`
  ADD PRIMARY KEY (`id_landasan`),
  ADD KEY `fk_landasan_user` (`id_user`),
  ADD KEY `fk_landasan_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `luar_cpl`
--
ALTER TABLE `luar_cpl`
  ADD PRIMARY KEY (`id_luar_cpl`),
  ADD KEY `fk_luar_mbkm` (`id_mbkm`),
  ADD KEY `fk_luar_cpl` (`id_cpl`),
  ADD KEY `fk_user_luar` (`id_user`),
  ADD KEY `fk_luar_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`),
  ADD KEY `fk_mhs_jurusan` (`id_jurusan`),
  ADD KEY `fk_mhs_user` (`id_user`);

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`),
  ADD KEY `fk_matkul_tahun` (`id_tahun`),
  ADD KEY `fk_matkul_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `matkul_mhs`
--
ALTER TABLE `matkul_mhs`
  ADD PRIMARY KEY (`id_matkulmhs`),
  ADD KEY `fk_matkulmhs_pengampu` (`id_pengampu`),
  ADD KEY `fk_matkulmhs_user` (`id_user`);

--
-- Indeks untuk tabel `mbkm`
--
ALTER TABLE `mbkm`
  ADD PRIMARY KEY (`id_mbkm`),
  ADD KEY `fk_mbkm_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `mbkm_cpl`
--
ALTER TABLE `mbkm_cpl`
  ADD PRIMARY KEY (`id_mbkm_cpl`),
  ADD KEY `fk_mbkm_cpl` (`id_cpl`),
  ADD KEY `fk_mbkm_mbkm` (`id_mbkm`),
  ADD KEY `fk_jurusan_mbkm` (`id_jurusan`),
  ADD KEY `fk_mbkm_user` (`id_user`);

--
-- Indeks untuk tabel `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`);

--
-- Indeks untuk tabel `nilai_cpl`
--
ALTER TABLE `nilai_cpl`
  ADD PRIMARY KEY (`id_nilaicpl`),
  ADD KEY `fk_nilai_matkul` (`id_matkul`),
  ADD KEY `fk_nilai_user` (`id_user`),
  ADD KEY `fk_nilai_cplmk` (`id_cplmk`);

--
-- Indeks untuk tabel `nilai_matkul_cpl`
--
ALTER TABLE `nilai_matkul_cpl`
  ADD PRIMARY KEY (`id_nilai_matkul_cpl`),
  ADD KEY `fk_nilai_cpl_matkul_cplmk` (`id_cplmk`),
  ADD KEY `fk_makul_nilai_cpl` (`id_matkul`),
  ADD KEY `fk_niali_matkul_cpl_jurusan` (`id_jurusan`),
  ADD KEY `fk_nilai_cpl_matkul_pengampu` (`id_pengampu`);

--
-- Indeks untuk tabel `non_cpl`
--
ALTER TABLE `non_cpl`
  ADD PRIMARY KEY (`id_non_cpl`),
  ADD KEY `fk_non_mbkm` (`id_mbkm`),
  ADD KEY `fk_non_cpl` (`id_cpl`),
  ADD KEY `fk_non_jurusan` (`id_jurusan`),
  ADD KEY `fk_user_non` (`id_user`);

--
-- Indeks untuk tabel `pengampu_mk`
--
ALTER TABLE `pengampu_mk`
  ADD PRIMARY KEY (`id_pengampu`),
  ADD KEY `fk_pengampu_matkul` (`id_matkul`),
  ADD KEY `fk_pengampu_dosen` (`id_dosen`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`),
  ADD KEY `fk_profil_user` (`id_user`),
  ADD KEY `fk_profil_dosen` (`id_dosen`),
  ADD KEY `fk_profil_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `profil_cpl`
--
ALTER TABLE `profil_cpl`
  ADD PRIMARY KEY (`id_profil_cpl`),
  ADD KEY `fk_profil_lulusan` (`id_lulusan`),
  ADD KEY `fk_cpl_profil` (`id_cpl`),
  ADD KEY `fk_jurusan_profil` (`id_jurusan`),
  ADD KEY `fk_user_profillulusan` (`id_user`);

--
-- Indeks untuk tabel `profil_lulusan`
--
ALTER TABLE `profil_lulusan`
  ADD PRIMARY KEY (`id_lulusan`),
  ADD KEY `fk_lulusan_user` (`id_user`),
  ADD KEY `fk_lulusan_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `pustaka_pendukung`
--
ALTER TABLE `pustaka_pendukung`
  ADD PRIMARY KEY (`id_pendukung`),
  ADD KEY `fk_pendukung_matkul` (`id_matkul`);

--
-- Indeks untuk tabel `pustaka_utama`
--
ALTER TABLE `pustaka_utama`
  ADD PRIMARY KEY (`id_utama`),
  ADD KEY `fk_utama_matkul` (`id_matkul`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`),
  ADD KEY `fk_setting_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `setting_dosen`
--
ALTER TABLE `setting_dosen`
  ADD PRIMARY KEY (`id_setting2`),
  ADD KEY `fk_setting_matkul` (`id_matkul`),
  ADD KEY `fk_jurusan_setting` (`id_jurusan`);

--
-- Indeks untuk tabel `subcpmk`
--
ALTER TABLE `subcpmk`
  ADD PRIMARY KEY (`id_subcpmk`),
  ADD KEY `fk_subcpmk_matkul` (`id_matkul`),
  ADD KEY `fk_subcpmk_cpl_mk` (`id_cplmk`);

--
-- Indeks untuk tabel `syarat`
--
ALTER TABLE `syarat`
  ADD PRIMARY KEY (`id_syarat`),
  ADD KEY `fk_syarat_matkul` (`id_matkul`);

--
-- Indeks untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indeks untuk tabel `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id_total`),
  ADD KEY `fk_total_cpl` (`id_cpl`),
  ADD KEY `fk_total_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `aspek`
--
ALTER TABLE `aspek`
  MODIFY `id_aspek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `bahan_kajian`
--
ALTER TABLE `bahan_kajian`
  MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cpl`
--
ALTER TABLE `cpl`
  MODIFY `id_cpl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `cpl_mk`
--
ALTER TABLE `cpl_mk`
  MODIFY `id_cplmk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `cpmk`
--
ALTER TABLE `cpmk`
  MODIFY `id_cpmk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `deskripsi_mk`
--
ALTER TABLE `deskripsi_mk`
  MODIFY `id_deskripsimk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `detail_rps`
--
ALTER TABLE `detail_rps`
  MODIFY `id_detailrps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `detail_sub`
--
ALTER TABLE `detail_sub`
  MODIFY `id_detailsub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `evaluasi`
--
ALTER TABLE `evaluasi`
  MODIFY `id_evaluasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `evaluasi_mhs`
--
ALTER TABLE `evaluasi_mhs`
  MODIFY `id_evaluasimhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `kajian`
--
ALTER TABLE `kajian`
  MODIFY `id_kajian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kajian_cpl`
--
ALTER TABLE `kajian_cpl`
  MODIFY `id_kajiancpl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `kajian_matkul`
--
ALTER TABLE `kajian_matkul`
  MODIFY `id_kajianmk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `landasan`
--
ALTER TABLE `landasan`
  MODIFY `id_landasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `luar_cpl`
--
ALTER TABLE `luar_cpl`
  MODIFY `id_luar_cpl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `matkul_mhs`
--
ALTER TABLE `matkul_mhs`
  MODIFY `id_matkulmhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `mbkm`
--
ALTER TABLE `mbkm`
  MODIFY `id_mbkm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `mbkm_cpl`
--
ALTER TABLE `mbkm_cpl`
  MODIFY `id_mbkm_cpl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `nilai_cpl`
--
ALTER TABLE `nilai_cpl`
  MODIFY `id_nilaicpl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `nilai_matkul_cpl`
--
ALTER TABLE `nilai_matkul_cpl`
  MODIFY `id_nilai_matkul_cpl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `non_cpl`
--
ALTER TABLE `non_cpl`
  MODIFY `id_non_cpl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengampu_mk`
--
ALTER TABLE `pengampu_mk`
  MODIFY `id_pengampu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `profil_cpl`
--
ALTER TABLE `profil_cpl`
  MODIFY `id_profil_cpl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT untuk tabel `profil_lulusan`
--
ALTER TABLE `profil_lulusan`
  MODIFY `id_lulusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pustaka_pendukung`
--
ALTER TABLE `pustaka_pendukung`
  MODIFY `id_pendukung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pustaka_utama`
--
ALTER TABLE `pustaka_utama`
  MODIFY `id_utama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `setting_dosen`
--
ALTER TABLE `setting_dosen`
  MODIFY `id_setting2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `subcpmk`
--
ALTER TABLE `subcpmk`
  MODIFY `id_subcpmk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `syarat`
--
ALTER TABLE `syarat`
  MODIFY `id_syarat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `total`
--
ALTER TABLE `total`
  MODIFY `id_total` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `bahan_kajian`
--
ALTER TABLE `bahan_kajian`
  ADD CONSTRAINT `fk_matkul_bahan` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`);

--
-- Ketidakleluasaan untuk tabel `cpl`
--
ALTER TABLE `cpl`
  ADD CONSTRAINT `fk_cpl_aspek` FOREIGN KEY (`id_aspek`) REFERENCES `aspek` (`id_aspek`),
  ADD CONSTRAINT `fk_cpl_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `fk_cpl_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `cpl_mk`
--
ALTER TABLE `cpl_mk`
  ADD CONSTRAINT `fk_cpl_cplmk` FOREIGN KEY (`id_cpl`) REFERENCES `cpl` (`id_cpl`),
  ADD CONSTRAINT `fk_cplmk_aspek` FOREIGN KEY (`id_aspek`) REFERENCES `aspek` (`id_aspek`),
  ADD CONSTRAINT `fk_cplmk_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`);

--
-- Ketidakleluasaan untuk tabel `cpmk`
--
ALTER TABLE `cpmk`
  ADD CONSTRAINT `fk_cpmk_cpl` FOREIGN KEY (`id_cpl`) REFERENCES `cpl` (`id_cpl`),
  ADD CONSTRAINT `fk_cpmk_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`);

--
-- Ketidakleluasaan untuk tabel `deskripsi_mk`
--
ALTER TABLE `deskripsi_mk`
  ADD CONSTRAINT `fk_matkul_deskripsi_mk` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`);

--
-- Ketidakleluasaan untuk tabel `detail_rps`
--
ALTER TABLE `detail_rps`
  ADD CONSTRAINT `fk_detailrps_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`),
  ADD CONSTRAINT `fk_detailrps_subcpmk` FOREIGN KEY (`id_subcpmk`) REFERENCES `subcpmk` (`id_subcpmk`);

--
-- Ketidakleluasaan untuk tabel `detail_sub`
--
ALTER TABLE `detail_sub`
  ADD CONSTRAINT `fk_detail_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`),
  ADD CONSTRAINT `fk_detail_subcpmk` FOREIGN KEY (`id_subcpmk`) REFERENCES `subcpmk` (`id_subcpmk`);

--
-- Ketidakleluasaan untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `fk_dosen_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);

--
-- Ketidakleluasaan untuk tabel `evaluasi`
--
ALTER TABLE `evaluasi`
  ADD CONSTRAINT `fk_evaluasi_detailrps` FOREIGN KEY (`id_detailrps`) REFERENCES `detail_rps` (`id_detailrps`),
  ADD CONSTRAINT `fk_evaluasi_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`);

--
-- Ketidakleluasaan untuk tabel `evaluasi_mhs`
--
ALTER TABLE `evaluasi_mhs`
  ADD CONSTRAINT `fk_evaluasi_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `fk_evaluasimhs_evaluasi` FOREIGN KEY (`id_evaluasi2`) REFERENCES `evaluasi` (`id_evaluasi`),
  ADD CONSTRAINT `fk_evaluasimhs_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`);

--
-- Ketidakleluasaan untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `fk_jurusan_fakultas` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`);

--
-- Ketidakleluasaan untuk tabel `kajian`
--
ALTER TABLE `kajian`
  ADD CONSTRAINT `fk_kajian_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `fk_kajian_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `kajian_cpl`
--
ALTER TABLE `kajian_cpl`
  ADD CONSTRAINT `fk_cpl_kajian` FOREIGN KEY (`id_kajian`) REFERENCES `kajian` (`id_kajian`),
  ADD CONSTRAINT `fk_jurusan_kajiann` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `fk_kajian_cpl` FOREIGN KEY (`id_cpl`) REFERENCES `cpl` (`id_cpl`),
  ADD CONSTRAINT `fk_kajian_userr` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `kajian_matkul`
--
ALTER TABLE `kajian_matkul`
  ADD CONSTRAINT `fk_bahanmk_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `fk_bahanmk_kajian` FOREIGN KEY (`id_kajian`) REFERENCES `kajian` (`id_kajian`),
  ADD CONSTRAINT `fk_bahanmk_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`),
  ADD CONSTRAINT `fk_bahanmk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `landasan`
--
ALTER TABLE `landasan`
  ADD CONSTRAINT `fk_landasan_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `fk_landasan_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `luar_cpl`
--
ALTER TABLE `luar_cpl`
  ADD CONSTRAINT `fk_luar_cpl` FOREIGN KEY (`id_cpl`) REFERENCES `cpl` (`id_cpl`),
  ADD CONSTRAINT `fk_luar_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `fk_luar_mbkm` FOREIGN KEY (`id_mbkm`) REFERENCES `mbkm` (`id_mbkm`),
  ADD CONSTRAINT `fk_user_luar` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `fk_mhs_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `fk_mhs_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD CONSTRAINT `fk_matkul_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `fk_matkul_tahun` FOREIGN KEY (`id_tahun`) REFERENCES `tahun_ajaran` (`id_tahun`);

--
-- Ketidakleluasaan untuk tabel `matkul_mhs`
--
ALTER TABLE `matkul_mhs`
  ADD CONSTRAINT `fk_matkulmhs_pengampu` FOREIGN KEY (`id_pengampu`) REFERENCES `pengampu_mk` (`id_pengampu`),
  ADD CONSTRAINT `fk_matkulmhs_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `mbkm`
--
ALTER TABLE `mbkm`
  ADD CONSTRAINT `fk_mbkm_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);

--
-- Ketidakleluasaan untuk tabel `mbkm_cpl`
--
ALTER TABLE `mbkm_cpl`
  ADD CONSTRAINT `fk_jurusan_mbkm` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `fk_mbkm_cpl` FOREIGN KEY (`id_cpl`) REFERENCES `cpl` (`id_cpl`),
  ADD CONSTRAINT `fk_mbkm_mbkm` FOREIGN KEY (`id_mbkm`) REFERENCES `mbkm` (`id_mbkm`),
  ADD CONSTRAINT `fk_mbkm_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `nilai_cpl`
--
ALTER TABLE `nilai_cpl`
  ADD CONSTRAINT `fk_nilai_cplmk` FOREIGN KEY (`id_cplmk`) REFERENCES `cpl_mk` (`id_cplmk`),
  ADD CONSTRAINT `fk_nilai_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`),
  ADD CONSTRAINT `fk_nilai_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `nilai_matkul_cpl`
--
ALTER TABLE `nilai_matkul_cpl`
  ADD CONSTRAINT `fk_makul_nilai_cpl` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`),
  ADD CONSTRAINT `fk_niali_matkul_cpl_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `fk_nilai_cpl_matkul_cplmk` FOREIGN KEY (`id_cplmk`) REFERENCES `cpl_mk` (`id_cplmk`),
  ADD CONSTRAINT `fk_nilai_cpl_matkul_pengampu` FOREIGN KEY (`id_pengampu`) REFERENCES `pengampu_mk` (`id_pengampu`);

--
-- Ketidakleluasaan untuk tabel `non_cpl`
--
ALTER TABLE `non_cpl`
  ADD CONSTRAINT `fk_non_cpl` FOREIGN KEY (`id_cpl`) REFERENCES `cpl` (`id_cpl`),
  ADD CONSTRAINT `fk_non_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `fk_non_mbkm` FOREIGN KEY (`id_mbkm`) REFERENCES `mbkm` (`id_mbkm`),
  ADD CONSTRAINT `fk_user_non` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `pengampu_mk`
--
ALTER TABLE `pengampu_mk`
  ADD CONSTRAINT `fk_pengampu_dosen` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`),
  ADD CONSTRAINT `fk_pengampu_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`);

--
-- Ketidakleluasaan untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `fk_profil_dosen` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`),
  ADD CONSTRAINT `fk_profil_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `fk_profil_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `profil_cpl`
--
ALTER TABLE `profil_cpl`
  ADD CONSTRAINT `fk_cpl_profil` FOREIGN KEY (`id_cpl`) REFERENCES `cpl` (`id_cpl`),
  ADD CONSTRAINT `fk_jurusan_profil` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `fk_profil_lulusan` FOREIGN KEY (`id_lulusan`) REFERENCES `profil_lulusan` (`id_lulusan`),
  ADD CONSTRAINT `fk_user_profillulusan` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `profil_lulusan`
--
ALTER TABLE `profil_lulusan`
  ADD CONSTRAINT `fk_lulusan_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `fk_lulusan_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `pustaka_pendukung`
--
ALTER TABLE `pustaka_pendukung`
  ADD CONSTRAINT `fk_pendukung_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`);

--
-- Ketidakleluasaan untuk tabel `pustaka_utama`
--
ALTER TABLE `pustaka_utama`
  ADD CONSTRAINT `fk_utama_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`);

--
-- Ketidakleluasaan untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD CONSTRAINT `fk_setting_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);

--
-- Ketidakleluasaan untuk tabel `setting_dosen`
--
ALTER TABLE `setting_dosen`
  ADD CONSTRAINT `fk_jurusan_setting` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `fk_setting_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`);

--
-- Ketidakleluasaan untuk tabel `subcpmk`
--
ALTER TABLE `subcpmk`
  ADD CONSTRAINT `fk_subcpmk_cpl_mk` FOREIGN KEY (`id_cplmk`) REFERENCES `cpl_mk` (`id_cplmk`),
  ADD CONSTRAINT `fk_subcpmk_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`);

--
-- Ketidakleluasaan untuk tabel `syarat`
--
ALTER TABLE `syarat`
  ADD CONSTRAINT `fk_syarat_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`);

--
-- Ketidakleluasaan untuk tabel `total`
--
ALTER TABLE `total`
  ADD CONSTRAINT `fk_total_cpl` FOREIGN KEY (`id_cpl`) REFERENCES `cpl` (`id_cpl`),
  ADD CONSTRAINT `fk_total_jurusan` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
