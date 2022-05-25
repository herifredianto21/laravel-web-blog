-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2022 at 03:32 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmiartikel`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_artikel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hitung_tayang` int(11) NOT NULL,
  `status_publish` int(11) NOT NULL,
  `penulis_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_domain` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `kode_artikel`, `judul`, `gambar_artikel`, `isi_artikel`, `keyword`, `slug`, `tagar`, `hitung_tayang`, `status_publish`, `penulis_artikel`, `id_domain`, `created_at`, `updated_at`) VALUES
(1, 'GJL001', 'Ginjal, Si Kecil Organ Super yang paling berharga', '', 'Walaupun hanya berukuran kira-kira satu kepalan tangan ginjal merupakan bagian tubuh yang sangat penting dan wajib untuk kita jaga. Ginjal merupakan organ tubuh yang berbentuk seperti biji kacang merah, terletak dekat tulang belakang, berfungsi mengeluarkan atau memisahkan produk buangan metabolisme dari darah. Segala produk buangan tersebut kemudian dikeluarkan melalui urine. \n\nLalu, bagaimana jika ginjal rusak ? Apabila ginjal mengalami kerusakan, maka organ tubuh yang lain pun akan merasakan dampaknya. hal ini disebut gagal ginjal. anda tidak akan menemukan ganti ginjal yang rusak tersebut skarenatidak ada toko ginjal di dunia ini', 'ginjal si kecil organ super', '', '#ginjal', 18, 1, 'Heri Fredianto', 34, '2022-04-09 03:52:07', NULL),
(2, 'GJL002', 'Transplantasi dan Cuci Darah sebagai jalan Ninja penderita ginjal ?', '', 'ginjal yang telah rusak tidak bisa berfungsi lagi dengan baik. sehingga memerlukan solusi agar tubuh bisa tetap bekerja dengan baik. hingga akhirnya ditemukan ginjal buatan atau mesin cuci darah pada perang dunia II oleh seorang pria berkebangsaan Belanda, Willem Kolff yang di uji coba pertama kali pada tahun 1943. demi pengabdiannya untuk dunia medis, kolff tidak pernah mematenkan penemuannya ini. apalagi terpikir untuk mendirikan toko ginjal untukk transplantasi kala itu.\n\nSejak itu berbagai penelitian ilmiah dicoba untuk mencari solusi dari masalah gagal ginjal ini termasuk mencoba transplantasi ginjal.', 'transplantasi ginjal dan cuci darah', '', '#transplantasiginjal #cucidarah', 18, 1, 'Heri Fredianto', 34, '2022-04-09 04:18:55', NULL),
(3, 'GJL003', 'Jual ginjal yuk.. biar bisa beli Iphone', '', 'jual ginjal aja gih, bro biar bisa beli... terdengar sarkas memang, tapi pada kenyataannya banyak orang mengucapkan jokes ini untuk menggoda orang lain, yang di anggap kurang mampu secara finansial, untuk membeli barang yang diinginkan dengan cara mudah. Namun kadang jokes tidak hanya sekedar jokes. Nyatanya, banyak orang yang serius menganggapi jokes ini menjadi kenyataan loh. Orang yang melakukan transaksi jual beli ginjal layaknya transaksi di sebuah toko ginjal.\n\nSeperti seorang pria di china bahkan benar benar menjual salah satu ginjalnya, untuk membeli Iphone dia berhasil memiliki Iphone yang diinginkannya. Namun sayang kondisi pria tersebut menurun setelah 6 bulan dan ginjalnya yang tinggal satu dinyatakan tak berfungsi lagi. Kalau sudah begini siapa yang dirugikan ?', 'Jual ginjal biar bisa beli Iphone', '', '#jualginjal', 18, 1, 'Heri Fredianto', 34, '2022-04-09 04:24:51', NULL),
(4, 'GJL004', 'Nobel untuk transplantasi ginjal sukses pertama di dunia', '', 'sejarah panjang pengobatan gagal ginjal dimulai sejak sebelum PD I. Dimulai dari perancis pada tahun 1909 dengan mentransplantasikan ginjal hewan, dan ginjal orang mati kepada manusia. Dan ginjal bukannlah barang yang dijual di toko ginjal. Biasanya mereka mendapatkan dari jasad hewan yang telah mati maupun mayat manusia yang menginggal karena sakit, wabah, maupun perang. Tapi transplantasi pertana yang menggunakan ginjal manusia hidup untuk di donorkan terjadi di boston, masschusetts, Amerika Serikat oleh dr. Joseph Murray tahun 1954. Murray mengambil ginjal ronald harrick, dan menanamkan pada saudara kembar identiknya, richard. operasi ini berhasil dan membuat ricarhd mampu bertahan hidup selama 8 tahun. atas keberhasilannya murray memperoleh hadiah nobel di bidang fisiologi atau medis pada tahun 1990.', 'transplantasi ginjal sukses', '', '#transplantasiginjal', 18, 1, 'Heri Fredianto', 34, '2022-04-09 04:32:10', NULL),
(5, 'GJL005', 'Kontroversi Toko Ginjal Dari Sudut Pandang Agama', '', 'Bagaimanakah pandangan dari segi agama dalam hal transplantasi organ tubuh ?\nPada dasarnya ke lima agama yang ada di Indonesia tidak melarang adanya donasi organ tubuh jika tujuannya adalah untuk hal yang baik dan tidak merugikan. Tentu saja tanpa adanya kegiatan jual beli yang menyertainya layaknya sebuah toko', 'Kontroversi toko ginjal dari sudut pandang agama', '', '#kontroversitokoginjal', 18, 1, 'Heri Fredianto', 34, '2022-04-09 04:41:06', NULL),
(6, 'GJL006', 'Dimulai Era Jual Toko Ginjal', '', 'Semenjak transplantasi pertama ginjal sukses, maka orang mulai memandang bahwa transplantasi merupakan harapan baru untuk hidup dan memperpanjang usia mereka, yang mengalami kerusakan ginjal akut. Pada awalnya pendonor ginjal harus merupakan saudara kembar identik dari pasien yang membutuhkan transplantasi. Tetapi seiring dengan perkembangan zaman, donor ginjal bisa diberikan dari orang yang tidak memilih hubungan darah dan genetik dengan pasien. Asalkan donor ginjal yang diberikan bisa diterima oleh tubuh si pasien. Akan tetapi sulitnya donor untuk didapatkan serta biaya yang mahal menjadi kendala. Hal inilah yang kemudian dimanfaatkan oleh sebagian orang untuk meraup keuntungan dan donor mulai diperjual belikan secara ekonomi. Secara legal dan ilegal seolah olah sebuah toko ginjal itu eksis', 'Dimulainya Era Jual Beli Toko Ginjal', '', '#tokojualginjal', 18, 1, 'Heri Fredianto', 34, '2022-04-09 07:44:15', NULL),
(7, 'GJL007', 'Upaya Hukum untuk Menjerat Oknum Penjaja Toko Ginjal', '', 'Seiring  dengan makin maraknya sepak terjang ilegal para penjaja toko ginjal di Indonesia, negara Republik Indonesia telah mengelucurkan Undang-undang Republik Indonesia Nomor 36 Tahun 2009 tentang Kesehatan pada pasal 34 ayat (3) dan pasal 192, untuk membatasi ruang gerak dan sepak terjang mereka.\n\nAdapun isi dari pasal 34 ayat (3) berbunyi \"organ dan/atau jaringan tubuh dilarang diperjual belikan dengan dalih apapun\". Sedangkan pasal 192 berbunyi \"setiap orang dengan sengaja memperjual belikan organ atau jaringan tubuh dengan alih apapun seperti tercantum dalam pasal 34 ayat (3) dipidana dengan pidana penjara paling lama 10 tahun dan denda paling banyak Rp. 1.000.000.000 (1 Miliar)', 'upaya hukum untuk menjerat oknum penjaja toko ginjal', 'upaya-hukum-untuk-menjerat-oknum-penjaja-toko-ginjal', '#oknumjualginjal', 18, 1, 'Heri Fredianto', 34, '2022-04-12 00:55:59', NULL),
(8, 'GJL008', 'Transaksi Ilegal Toko Ginjal di Dunia', '', 'Uang dan uang, bagaimanapun menang menjadi tujuan utama orang bekerja. Bahkan berusaha mendapatkannya dengan cara apapun. Batas-batas antara haram dan halal, ilegal dab legal menjadi kabur. Dan tak bisa di cerna lagi dengan mudah. Begitupun dalam bsinis jual beli ginjal. Permintaan yang tinggi berbanding terbalik dengan sedikitnya donor yang di dapat. Bahkan para pasien harus menunggu dan mengisi daftar panjang antrian untuk mendapatkan donor ginjal dalam jangka waktu yang sangat sulit untuk di tentukan. Hal inilah yang membuka munculnya celah-celah bisnis menjanjikan bagi orang yang haus akan uang. dan timbal balik hubungan simbiosis mutualisme pun terjadi melibatkan banyak orang di seluruh dunia ', 'transaksi ilegal toko ginjal di dunia', 'transaksi-ilegal-toko-ginjal-di-dunia', '#TransaksiGinjalIlegal', 18, 1, 'Heri Fredianto', 34, '2022-04-12 02:11:02', NULL),
(9, 'GJL009', 'Cara Kerja Pengobatan Ginjal Ala Ibnu Sina', '', 'Pengobatan komplementer ala ibnu sina ini, mampu memperbaiki fungsi ginjal yang sudah menurun, dengan mencari tahu penyebabnya.Lalu dengan racikan campuran 65 herbal, 8 hewan, dan 4 mineral dibuatkan obat untuk memperbaiki sistem kimia dalam tubuh. Agar tubuh bisa bertahan dan berangsur sembuh dan akhirnya tidak ada lagi pasien yang bergantung pada donor darah.', 'cara kerja pengobatan ginjal ala ibnu sina', 'cara-kerja-pengobatan-ginjal-ala-ibnu-sina', '#PengobatanAlaIbnuSina', 18, 1, 'Heri Fredianto', 34, '2022-04-12 06:17:55', NULL),
(10, 'GJL010', 'Perkembangan Pengobatan Metode Komplementer', '', 'pasien yang sudah di vonis gagal ginjal tetap memiliki kemungkinan untuk sembuh tanpa mengandalkan donor ginjal. Hal ini dikarenakan perkembangan dunia kedokteran terus terjadi. Untuk mencari metode terbaik salah satunya adalah dengan menjalani pengobatan komplementer berintegrasi ala Ibnu Sina', 'perkembangan pengobatan metode komplementer#peng', '#pengobatanalaibnusina', '', 18, 1, 'Heri Fredianto', 34, '2022-04-12 06:23:24', NULL),
(11, 'GJL011', 'Dapatkah Pasien Ginjal Hidup tanpa Donor Ginjal ?', '', 'Saat ini muncul khawatiran dalam masyarakat, apakah seorang pasien gagal ginjal mampu hidup tanpa donor ginjal ? mengingat bahwa semakin sulitnya mendapatkan donor dari toko ginjal sekalipun. Dengan melihat pesatnya perkembangan ilmu kedokteran medis dan farmasi saat ini, bisa saja ada kemungkinan jika pasien gagal ginjal dapat memiliki harapan hidup lebih tinggi dibandingkan beberapa dekade yang lain', 'dapatkah pasien ginjal hidup tanpa donor ginjal ', '', '', 18, 1, 'Heri Fredianto', 34, '2022-04-12 06:27:00', NULL),
(13, 'GJL012', 'Metode Pengobatan Non-Medis Sebagai Alternatif', '', 'Jika kita ingin memperkecil kemungkinan untuk mencari donor di toko ginjal dan memperbesar harapan untuk sembuh  pada pasien, metode pengobatan alternatif juga sebaiknya mulai wajib kita coba dan  telaah manfaat dan efektifitasnya. Asalkan pengobatan tersebut tetap berdampingan dengan pengobatan dan konsultasi pihak medis.', 'metode pengobatan non-medis sebagai alternatif', 'metode-pengobatan-non-medis-sebagai-alternatif', '#metodepengobatanalternatif', 18, 1, 'Heri Fredianto', 34, '2022-04-19 01:48:47', NULL),
(14, 'GJL013', 'Metode Pengobatan Timur Ala Ibnu Sina', '', 'Ibnu Sina atau Avicenna, yang dikenal sebagai Bapak kedokteran modern, telah menggunakan 65 herbal, 8 hewan, dan 4 mineral dalam bukunya The Cannon of Medicine (1025), sebagai solusi alami pengobatan penyakit ginjal dan nyaman di tubuh. Yang menurut Ibnu Sina, prinsip penyakit berada pada keseimbangan zat kimia tubuh. Metode ini dipakai sebagai referensi, dan telah diharapkan akan mampu mematahkan kredibilitas yang mengaggap toko ginjal sebagai satu-satunya harapan bagi pasien', 'metode pengobatan timur ala ibnu sina', 'metode-pengobatan-timur-ala-ibnu-sina', '#MetodePengobatantimurAlaIbnuSina', 18, 1, 'Heri Fredianto', 34, '2022-04-19 01:53:55', NULL),
(15, 'GJL014', 'Apakah Sudah Ada Rumah Sakit Yang Menggunakan Metode Ibnu Sina ini di Indonesia ?', '', 'Ada, CMI Hospital, yang berada di Bandung ini, merupakan rumah sakit pertama yang memberikan pelayanan kesehatan, dengan menggabungkan ilmu kedokteran meodern dan ilmu kedokteran komplementer berdasarkan metode Ibnu Sina tersebut. Tingkat kesembuhan pasien di CMI mencapai 80%. Dan ternyata biaya pengobatan di rumah sakit yang berdiri sejak tahun 2008 ini juga jauh lebih terjangkau dibandingkan jika harus mertransaksi dengan toko ginjal', 'apakah sudah ada rumah sakit yang menggunakan metode ibnu sina ini di indonesia ?', 'apakah-sudah-ada-rumah-sakit-yang-menggunakan-metode-ibnu-sina-ini-di-indonesia-?', '#MetodeIbnuSinaDiIndonesia', 18, 1, 'Heri Fredianto', 34, '2022-04-19 02:02:08', NULL),
(16, 'GJL015', 'Apakah Transplantasi Ginjal Bertahan Lama', '', 'Transplantasi ginjal dapat memperpanjang hidup kita secara dinamis dan membantu kita hidup 20 tahun lagi. Tetapi kita juga tidak boleh melupakan komplikasi pasca operasi, termasuk infeksi. Sistem kekebalan bisa sangat retan, itulah sebabnya organ sering menolak benda yang di tranplantasikan.', 'apakah tranplantasi ginjal bertahan lama', 'apakah-tranplantasi-ginjal-bertahan-lama', '#TransplantasiGinjalBertahanLama', 18, 1, 'Heri Fredianto', 34, '2022-04-19 02:10:20', NULL),
(17, 'GJL016', 'Agar Terhindar Dari Donor Ginjal, Inilah Beberapa Asupan Yang Harus Dibatasi', '', 'Makanan yang harus dibatasi unutk mencegah gagal ginjal diantaranya makanan tinggi garam seperti makanan ringan, makanan tinggi gula seperti sereal sarapan, kue dan roti, permen, cokelat eskrim,  makanan & minuman kemasan dan minuman berakohol.', 'Agar Terhindar Dari Donor Ginjal, Inilah Beberapa Asupan Yang Harus Dibatasi', 'agar-terhindar-dari-donor-ginjal-inilah-beberapa-asupan-yang-harus-dibatasi', '#terhindardaridonorginjal', 18, 1, 'Heri Fredianto', 34, '2022-04-19 02:14:31', NULL),
(18, 'GJL017', 'Hindari Penyebab-Penyebab Gagal Ginjal Berikut Ini', '', 'Pada kenyataanya kasus, gagal ginjal disebabkan oleh masalah kesehatan lain yang telah menyebabkan kerusakan pada ginjal sedikit demi sedikit, dari waktu ke waktu. Beberapa kondidi yang bisa menjadi penyebab gagal ginjal yaitu lupus, sindrom nefrotik, serangan jantung,penggunaan obat-obatan terlarang dan penyalahgunaan narkoba, tidak cukup darah yang mengalir ke ginjal dan masalah saluran kemih', 'hindari penyebab-penyabab gagal ginjal berikut ini', 'hindari-penyebab-penyabab-gagal-ginjal-berikut-ini', '#hindarigagalginjal', 18, 1, 'Heri Fredianto', 34, '2022-04-19 02:19:43', NULL),
(19, 'GJL018', 'Timbulnya Penyakit Ginjal Akibat Kopi', '', 'Kopi saat ini sudah menjadi teman dekat, bukan saja untuk kalangan anak muda tapi hampir semua kalangan. Hal ini dapat dilihat tingkat pertumbuhan cafe yang sudah berkembang pesat. Selain itu kebiasaan di pagi hari dengan secangkir kopi sebelum beraktivitas. Mungkin saja dari dua hal tersebut merupakan perpaduan yang sempurna untuk menyambut pagi hari agar meninggalkan  semangat bekerja. Siapa mengira kebiasaan seperti ini berdampak buruk bagi kesehatan yaitu tentu menderita penyakit diabetes. Penyakit diabetes menjadi salah satu penyebab utama dari munculnya penyakit gagal ginjal. Penyakit ini sering menyangkut orang-orang yang memiliki perilaku atau kebiasaan hidup yang kurang sehat dan tidak memperhatikan pola sehat yang tepat untuk dirinya sendiri.', 'Timbulnya Penyakit Ginjal Akibat Kopi', 'timbulnya-penyakit-ginjal-akibat-kopi', '#timbulgagalginjalakibatkopi', 18, 1, 'Heri Fredianto', 34, '2022-04-19 06:52:31', NULL),
(20, 'GJL019', '\"Emosi, menjadi Pemicu Bibit Gagal Ginjal\"', '', 'Tekanan hidup dari masing-masing orang memang sangat berbeda porsi dan cara menyikapinya. Umumnya tekanan hidup inilah yang membuat seorang bekerja sangat keras untuk memenuhi kebutuhan hidupnya, sering kali ketika seorang sedang tertimpa suatu masalah, maka terbawa dan sering kali, melupakan emosinya tidak dia terkontrol. Tanpa disadari bahwa hal tersebut membawa petaka hidup tidak segera diubah. Seorang tersebut sangat rentan terkena penyakit hipertensi akut dan tekanan darah tinggi. Penyakit ini sangat berbahaya jika tidak segera ditangani karena menimbulkan  penyakit lainnya. Tidak lain penyakit gagal ginjal, karena salah satu penyebab utama gagal ginjal seperti hipertensi, lalu apakah benar kalau orang yang emosian menjadi penyebab terkena penyakit gagal ginjal ? Apakah jangan-jangan karena pikiran yang dipikul oleh seorang tersebut yang terlalu berlebihan ?', 'emosi, menjadi pemicu bibit gagal ginjal', 'emosi-menjadi-pemicu-bibit-gagal-ginjal', '#emosi #pemicubibitgagalginjal', 18, 1, 'Heri Fredianto', 34, '2022-04-19 07:02:54', NULL),
(21, 'GJL020', 'Sering Menahan Diri untuk Buang Air Kecil ? Hati-hati Ini Dapat Menyebabkan Gagal Ginjal', '', 'Ada orang bijak mengatakan bahwa \"mencegah lebih baik dari pada mengobati\", rasanya pepatah ini sudah dilupakan. Apalagi di zaman sekarang dengan tingkat persaingan yang ketat dan rasa penasaran manusia yang besar untuk mencapai tujuan yang diinginkan, menyebabkan manusia sering di kantor, mengejar deadline kerjaan dari kantor. Selain itu, karena sibuk dengan kerjaan banyak orang yang sampai lupa dan sering menahan diri untuk tidak buang air kecil langsung. Apalagi di saat-saat sedang sibuk dengan pekerjaan seperti meeting, menyebabkan dia sering mengabaikan hal-hal tersebut. Padahal ada bahaya penyakit yang mengintai jika perilaku seperti ini dibiarkan. Tak terkecuali untuk penyakit gagal ginjal. Penyakit ini dapat menyebabkan kehilangan dari fungsi ginjal.', 'sering menahan diri buar air kecil', 'sering-menahan-diri-buar-air-kecil', '#menahanbuangairkecil', 18, 1, 'Heri Fredianto', 34, '2022-04-19 07:18:03', NULL),
(22, 'GJL021', '\"Bahaya Merokok Yang Mengakibatkan Resiko Terkena Penyakit Gagal Ginjal\"', '', 'Kalian sering dengar atau baca kalimat ini bukan ? \"Meroko membunuhmu\" Selogan ini biasanya tercantum dikemasan roko yang terjual di pasaran. Roko sudah merajalera disemua kalangan usia di Indonesia. Dimana berdasarkan data BPS tahun 2021 tercatat bahwa persentase jumlah perokok usia 15 tahun keatas mencapai 28,96% dari total jumlah penduduk Indonesia. Tidak salah memang kalau roko menjadi salah satu sumber terbesar penghasil pajak di negara ini. Kalian tahu tidak kalau salah satu penyebab orang terkena gagal ginjal adalah memiliki kebiasaan merokok. Apalagi kalau penderita mengkonsumsi rokok dalam jumlah yang sangat banyak dalam satu waktu atau tidak terkontrol. Zat-zat itu membuat orang menjadi pecandu dan sangat sulit untuk lepas dari jeratnya, memang penyakit gagal ginjal ini tidak langsung keliatan, tapi ingatlah dalam-dalam tentang maksud dari selogan yang ada di kemasan rokok.', 'bahaya merokok yang mengakibatkan resiko terkena penyakit gagal ginjal', 'bahaya-merokok-yang-mengakibatkan-resiko-terkena-penyakit-gagal-ginjal', '#merokokpenyebabgagalginjal', 18, 1, 'Heri Fredianto', 34, '2022-04-19 07:30:28', NULL),
(23, 'GJL022', '\"Kenali Penyebab Awal Penyakit Gagal Ginjal\"', '', 'Secara umum pendertia penyakit gagal ginjal tidak terdeteksi atau tidak dirasakan secara langsung oleh penderita. Oleh karena itu, alangkah baiknya masyarakat secara rutin untuk mengontrol tingkat kadar gula, dan tekanan darah dalam tubuhnya. Dua faktor tersebut menjadi penyebab utama dari seorang yang terkena penyakit gagal ginjal. Walaupun masih ada faktor lain yang menjadi penyebab utama dari seorang terkena penyakit gagal ginjal. Seperti nafsu makan mulai menruun, obesitas, merokok, sesak nafas dan lain-lain. Buat penderita yang sering banget mengkonsumsi minum-minuman bersoda, yang kita kadar gulanya cukup tinggi. Hal ini menjadi pemicu meningkatnya kadar gula dalam tubuh. Penyakit gagal ginjal seperti yang kita ketahui, tidak terdeteksi secara langsung, memang membuat kita menjadi penyebab munculnya penyakit tersebut. Kita bisa menjadi lebih peduli lagi mengenai kesehatan badan kita untuk kesehatan dimasa yang akan datang', 'kenali penyebab awal penyakit gagal ginjal', 'kenali-penyebab-awal-penyakit-gagal-ginjal', '#kenalipenyebabgagalginjal', 18, 1, 'Heri Fredianto', 34, '2022-04-19 07:41:25', NULL),
(24, 'GJL023', 'Cara Cepat menanggapi penyakit gagal ginjal', '', 'Saat ini, kemajuan dunia membuat berbagai macam penyakit menjadi mudah untuk terdeteksi. Penyakit gagal ginjal yang telah menyerang siapa saja tidak pandang bulu. Terbukti berdasarkan data BPJS Kesehatan 2017 bahwa sekitar 59% penyakit gagal ginjal menyerang usia produktif. Lalu bagaimana langkah yang tepat untuk mengatasi penyakit gagal ginjal tersebut ? Tentu saja dengan memilih dokter yang memang ahli dalam bidang tersebut. Selain itu, lokasi maupun tempatnya sudah terbukti dan terpercaya, seperti di Klinik Utama CMI yang sudah memiliki rekam jejak mengatasi penyakit seperti kanker, jantung, ginjal dan diabetes. Adapun metode pengobatan yang digunakan penggabungan Medis Barat dan Medis Timur. Selain itu, Anda juga akan mendapatkan bimbingan dari para ahlinya yang memang sudah berkopenten dalam bidang tersebut.', 'cara cepat menanggapi penyakit gagal ginjal', 'cara-cepat-menanggapi-penyakit-gagal-ginjal', '#caracepat #menanggapigagalginjal', 18, 1, 'Heri Fredianto', 34, '2022-04-19 07:55:22', NULL),
(25, 'GJL024', 'Pentingnya Cuci Darah Bagi Penderita Gagal Ginjal', '', 'Tahukah anda bahwa penderita gagal ginjal harus melakukan pencucian darah. Hal ini dilakukan untuk menyaring racun dan zat sisa hasil metabolisme tubuh seperti kotoran dan cairan urine. Apasih pentingnya melakukan cuci darah. Apakah tidak berfungsi dengan mengkonsumsi obat-obatan saja ? Ada sudah kebayang jika tidak ginjal tidak berfungsi dengan baik ? Hal-hal seperti ini yang akan timbul jika fungsi ginjal tidak berjalan dengan baik. Akan terjadi penumpukan limbah kotoran dan jika dibiarkan akan menjadi racun bagi tubuh. Cuci darah diharuskan kepada penderita yang sudah kehilangan 85-95 persin dari fungsi ginjal. Tentunya sebelum pencucian darah dilakukan maka perlu pemeriksaan dari dokter terlebih dahulu, untuk mengecek kondisi dari pasien. Adapun yang menjadi tolak ukur pasien harus melakukan cuci darah antara lain, kecepatan ginjal dalam menyaring darah, cek jantung, pernapasan, saluran pencernaan, kadar ureum, kemampuan tubuh dalam mengatasi kelebihan air.', 'pentingnya cuci darah bagi penderita gagal ginjal', 'pentingnya-cuci-darah-bagi-penderita-gagal-ginjal', '#pentingnyacucidarah', 18, 1, 'Heri Fredianto', 34, '2022-04-19 08:07:18', NULL),
(26, 'GJL025', 'Cuci Darah Seumur Hidup ? Perlu ?', '', 'Cuci darah dilakukan pada penderita gagal ginjal, yang mana fungsi ginjalnya sudah tidak berfungsi sekitar 85% sampai 90% atau pasien yang sudah termasuk penderita gagal ginjal berat. Lalu apakah penderita tersebut harus melakukan cuci darah seumur hidupnya ? jadi secara umum cuci darah ini memang dilakukan secara terus menerus dengan pada waktu tertentu. Balik lagi fungsi ginjal sebagai bagian dari dalam tubuh yang memiliki fungsi untuk mengatur keseimbangan cairan dan menyaring zat-zat pada metabolisme. Bisa dibayangkan jika cuci darah tidak dilakukan bagi pasien dengan penderita gagal ginjal berat. Hal ini dapat menyebabkan komplikasi pada ginjal, seperti peningkatan kadar racun dalam tubuh, gangguan suplai tubuh, dan bisa menyebabkan sel organ tubuh yang lain rusak. proses cuci darah ini menggunakan alat khusus yang dinamakan dialyzer.', 'cuci darah seumur hidup ? perlu ?', 'cuci-darah-seumur-hidup-?-perlu-?', '#perlucucidarahseumurhidup?', 18, 1, 'Heri Fredianto', 34, '2022-04-19 08:21:15', NULL),
(27, 'GJL025', 'Tidak Melakukan Cuci Darah ? Akibatnya Apa ?', '', 'Zaman modern ini sudah semakin berlubang dengan pesat. Tidak terkecuali untuk bidang kedokteran. Hmapir berbagai penyakit saat ini sudah ditemukan obat dan alat untuk menyembuhkan penyakit tersebut. Seperti cuci darah yang menjadi solusi untuk merawat penderita gagal ginjal agar mendapatkan kehidupan yang lebih baik. Cuci darah ini sangat penting dilakukan bagi penderita gagal ginjal, lalu bagaimana jika cuci darah tidak dilakukan ? Hal-hal seperti ini sangat mungkin terjadI, seperti menurunnya fungsi ginjal dapat membuat fungsi ginjal menjadi tidak maksimal. Tetapi di klinik utama CMI pasien gagal ginjal bisa sembuh tanpa cuci darah. kok bisa!?', 'tidak melakukan cuci darah ? akibatnya apa ?', 'tidak-melakukan-cuci-darah-?-akibatnya-apa-?', '#tidakmelakukancucidarah', 18, 1, 'Heri Fredianto', 34, '2022-04-19 08:37:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2022_04_07_031657_create_artikel_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
