<!-- Mendefinisikan tipe beupa html -->
<html>
<head>
	<!-- Menambahkan judul pada tab browser -->
	<title>Formulir Pendaftaran Peserta Didik Baru</title>
<!-- Menghubungkan file dengan url -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- Menambahkan css -->
<style>
	.semua{
		margin-top: 3%;
		margin-left: 3%;
		margin-right: 3%;
	}
	.jenis{
		margin-left: 93%;
		padding-left: 20px;
		padding-right: 20px;
	}
	.title{
		background-color: black;
		margin-top: 1px;
		margin-bottom: 1px;
	}
	.hitam{
		color: white;
	}
	.bold{
		color: red;
	}
	.unduh{
		background-color: green;
	}
	.unduh1{
		background-color: red;
	}
	.a{
		color: white;
	}
</style>
</head>
<body>
<!-- Menambahkan skrip php -->
<?php
// Mendefinisikan fungsi dalam keadaan kosong
$tgl = "";
$jenis_pendaftaran = "";
$tgl_masuksekolah = "";
$nis = "";
$nomor_peserta = "";
$paud = "";
$tk = "";
$skhun = "";
$ijazah = "";
$hobi = "";
$cita = "";
$nama = "";
$jenis_kelamin = "";
$nisn = "";
$nik = "";
$tempat_lahir = "";
$tgl_lahir = "";
$agama = "";
$kebutuhan_khusus = "";
$alamat = "";
$rt = "";
$rw = "";
$dusun = "";
$desa = "";
$kecamatan = "";
$kode_pos = "";
$tempat_tinggal = "";
$transportasi = "";
$nomor_hp = "";
$nomor_telp = "";
$email = "";
$penerima_kps = "";
$nomor_kps = "";
$kewarganegaraan = "";
$nama_negara="";
?>
<!-- Mendefinisikan form -->
<form method="POST" action="proses.php">
	<!-- Mengelompokkan elemen -->
	<div class="semua">
		<!-- Membuat judul pada halaman web -->
		<h2 align="center"><b>FORMULIR PESERTA DIDIK</b></h2>
		<!-- Mendefinisikan tabel -->
		<table border="2" class="jenis">
			<th><b>F-PD</b></th>
		</table>
		<label for="tgl">Tanggal</label>
		<input type="text" name="tgl" id="tgl">
	 <div class="title">
	 	<label class="hitam">REGISTRASI PESERTA DIDIK</label>
	 </div>
	<!-- Mendefinisikan tabel -->
	 <table class="tabel" cellpadding="2" cellspacing="2">
	 	<!-- Mendefinisikan baris -->
	 	<tr>
	 		<!-- Mendefinisikan sel data -->
	 		<td><label>1</label></td><td><label for="jenis_pendaftaran">Jenis Pendaftaran</label></td><td><label>:</label></td><td>
	 			<!-- Menambahkan radio button -->
	 			<input type="radio" name="jenis_pendaftaran" id="baru" value="Siswa Baru">
	 			<label for="baru">01) Siswa Baru</label>
	 			<input type="radio" name="jenis_pendaftaran" id="pindah" value="Pindahan">
	 			<label for="pindah">02) Pindahan</label>
	 		</td>
	 	</tr>
	 	<tr>
	 		<td><label>2</label></td><td><label for="tgl_masuksekolah">Tanggal Masuk Sekolah</label></td><td><label>:</label></td><td><input type="text" name="tgl_masuksekolah" id="tgl_masuksekolah"></td>
	 	</tr>
	 	<tr>
	 		<td><label>3</label></td><td><label for="nis">NIS</label></td><td><label>:</label></td><td><input type="text" name="nis" id="nis"></td>
	 	</tr>
	 	<tr>
	 		<td><label>4</label></td><td><label for="nomor_peserta">Nomor Peserta Ujian</label></td><td><label>:</label></td><td><input type="text" name="nomor_peserta" id="nomor_peserta"></td>
	 	</tr>
	 	<tr>
	 		<td></td><td></td><td></td><td><i>*Nomor peserta Ujian adalah 20 Digit yang tertera dalam sertifikat <b class="bold">SKHUN SD</b>, diisi bagi peserta didik jenjang SMP</i></td>
	 	</tr>
	 	<tr>
	 		<td><label>5</label></td><td><label for="paud">Apakah pernah PAUD</label></td><td><label>:</label></td><td><input type="radio" name="paud" value="Pernah" id="paud"> Ya <input type="radio" name="paud" value="Tidak Pernah" id="paud"> Tidak</td>
	 	</tr>
	 	<tr>
	 		<td><label>6</label></td><td><label for="tk">Apakah pernah TK</label></td><td><label>:</label></td><td><input type="radio" name="tk" id="tk" value="Pernah"> Ya <input type="radio" name="tk" id="tk" value="Tidak Pernah"> Tidak</td>
	 	</tr>
	 	<tr>
	 		<td><label>7</label></td><td><label for="skhun">No. Seri SKHUN Sebelumnya</label></td><td><label>:</label></td><td><input type="text" name="skhun" id="skhun"><label><i>Diisi 16 Digit yang tertera di <b class="bold">SKHUN SD</b> -diisi bagi PD Jenjang SMP</i></label></td>
	 	</tr>
	 	<tr>
	 		<td><label>8</label></td><td><label for="ijazah">No. Seri Ijazah Sebelumnya</label></td><td><label>:</label></td><td><input type="text" name="ijazah" id="ijazah"><label><i>Diisi 16 Digit yang tertera di <b class="bold">Ijazah SD</b> -diisi bagi PD Jenjang SMP</i></label></td>
	 	</tr>
	 	<tr>
	 		<td><label>9</label></td><td><label for="hobi">Hobi</label></td><td><label>:</label></td><td>
	 			<input type="radio" name="hobi" id="olah raga" value="Olah Raga">
	 			<label for="olah raga">A) Olah Raga</label>
	 			<input type="radio" name="hobi" id="kesenian" value="Kesenian">
	 			<label for="kesenian">B) Kesenian</label>
	 			<input type="radio" name="hobi" id="membaca" value="Membaca">
	 			<label for="membaca">C) Membaca</label>
	 			<input type="radio" name="hobi" id="menulis" value="Menulis">
	 			<label for="menulis">D) Menulis</label>
	 			<input type="radio" name="hobi" id="travelin" value="Travelin">
	 			<label for="travelin">E) Travelin</label>
	 			<input type="radio" name="hobi" id="lain" value="Lainnya">
	 			<label for="lain">F) Lainnya</label>
	 		</td>
	 	</tr>
	 	<tr>
	 		<td><label>10</label></td><td><label for="cita">Cita-cita</label></td><td><label>:</label></td><td>
	 			<input type="radio" name="cita" id="pns" value="PNS">
	 			<label for="pns">A) PNS</label>
	 			<input type="radio" name="cita" id="tni" value="TNI/POLRI">
	 			<label for="tni">B) TNI/POLRI</label>
	 			<input type="radio" name="cita" id="guru" value="Guru/Dosen">
	 			<label for="guru">C) Guru/Dosen</label>
	 			<input type="radio" name="cita" id="dokter" value="Dokter">
	 			<label for="dokter">D) Dokter</label>
	 			<input type="radio" name="cita" id="politik" value="Politikus">
	 			<label for="politik">E) Politikus</label>
	 			<input type="radio" name="cita" id="wiraswasta" value="Wiraswasta">
	 			<label for="wiraswasta">F) Wiraswasta</label>
	 			<input type="radio" name="cita" id="seni" value="Seni/Lukis/Artis/Sejenis">
	 			<label for="seni">G) Seni/Lukis/Artis/Sejenis</label>
	 			<input type="radio" name="cita" id="lainn" value="Lainnya">
	 			<label for="lainn">H) Lainnya</label>
	 		</td>
	 	</tr>
	 	</table>
	 <div class="title">
	 	<label class="hitam">DATA PRIBADI</label>
	 </div>
	 <table class="tabel"cellpadding="2" cellspacing="2">
	  <tr>
	   <td><label>11</label></td><td><label for="nama">Nama Lengkap</label></td><td><label>:</label></td><td><label><input type="text" name="nama" id="nama"></label></td>
	  </tr>
	  <tr>
	  	<td><label>12</label></td><td><label for="jenis_kelamin">Jenis Kelamin</label></td><td><label>:</label></td><td>
	  		<input type="radio" name="jenis_kelamin" id="lk" value="Laki-laki">
	  		<label for="lk">Laki-laki</label>
	  		<input type="radio" name="jenis_kelamin" id="pr" value="Perempuan">
	  		<label for="pr">Perempuan</label>
	  	</td>
	  </tr>
	  <tr>
	  	<td><label>13</label></td><td><label for="nisn">NISN</label></td><td><label>:</label></td><td><input type="text" name="nisn" id="nisn"></td>
	  </tr>
	  <tr>
	  	<td><label>14</label></td><td><label for="nik">NIK</label></td><td><label>:</label></td><td><input type="text" name="nik" id="nik"></td>
	  </tr>
	  <tr>
	  	<td><label>15</label></td><td><label for="tempat">Tempat Lahir</label></td><td><label>:</label></td><td><input type="text" name="tempat_lahir" id="tempat"></td>
	  </tr>
	  <tr>
	  	<td><label>16</label></td><td><label for="tgl_lahir">Tanggal Lahir</label></td><td><label>:</label></td><td><input type="text" name="tgl_lahir" id="tgl_lahir"></td>
	  </tr>
	  <tr>
	  	<td><label>17</label></td><td><label for="agama">Agama</label></td><td><label>:</label></td><td>
	  		<input type="radio" name="agama" id="islam" value="Islam">
	  		<label for="islam"><i>01) Islam</i></label>
	  		<input type="radio" name="agama" id="kristen" value="Kristen/Protestan">
	  		<label for="kristen"><i>02) Kristen/Protestan</i></label>
	  		<input type="radio" name="agama" id="katholik" value="Katholik">
	  		<label for="katholik"><i>03) Katholik</i></label>
	  		<input type="radio" name="agama" id="hindu" value="Hindu">
	  		<label for="hindu"><i>04) Hindu</i></label>
	  		<input type="radio" name="agama" id="budha" value="Budha">
	  		<label for="budha"><i>05) Budha</i></label>
	  		<input type="radio" name="agama" id="konghucu" value="Kong Hu Chu">
	  		<label for="konghucu"><i>06) Kong Hu Chu</i></label>
	  		<input type="radio" name="agama" id="lainna" value="Lainnya">
	  		<label for="lainna"><i>99) Lainnya</i></label>
	  	</td>
	  </tr>
	  <tr>
	  	<td><label>18</label></td><td><label for="khusus">Berkebutuhan Khusus</label></td><td><label>:</label></td><td>
	  		<input type="radio" name="kebutuhan_khusus" id="tidak" value="Tidak">
	  		<label for="tidak">01 Tidak</label>
	  		<input type="radio" name="kebutuhan_khusus" id="netra" value="Netra (A)">
	  		<label for="netra">02 Netra (A)</label>
	  		<input type="radio" name="kebutuhan_khusus" id="rungu" value="Rungu (B)">
	  		<label for="rungu">03 Rungu (B)</label>
	  		<input type="radio" name="kebutuhan_khusus" id="grahita" value="Grahita Ringan (C)">
	  		<label for="grahita">04 Grahita Ringan (C)</label>
	  		<input type="radio" name="kebutuhan_khusus" id="grahi" value="Grahita Sedang (C1)">
	  		<label for="grahi">05 Grahita Sedang (C1)</label>
	  		<input type="radio" name="kebutuhan_khusus" id="daksa" value="Daksa Ringan (D)">
	  		<label for="daksa">06 Daksa Ringan (D)</label>
	  		<input type="radio" name="kebutuhan_khusus" id="daksas" value="Daksa Sedang (D1)">
	  		<label for="daksas">07 Daksa Sedang (D1)</label>
	  </tr>
	  <tr>
	  	<td></td><td></td><td></td><td><input type="radio" name="kebutuhan_khusus" id="laras" value="Laras (E)">
	  		<label for="laras">08 Laras (E)</label>
	  		<input type="radio" name="kebutuhan_khusus" id="wicara" value="Wicara (F)">
	  		<label for="wicara">09 Wicara (F)</label>
	  		<input type="radio" name="kebutuhan_khusus" id="tuna" value="Tuna ganda (G)">
	  		<label for="tuna">10 Tuna ganda (G)</label>
	  		<input type="radio" name="kebutuhan_khusus" id="hiper" value="Hiper aktif (H)">
	  		<label for="hiper">11 Hiper aktif (H)</label>
	  		<input type="radio" name="kebutuhan_khusus" id="cerdas" value="Cerdas Istimewa (i)">
	  		<label for="cerdas">12 Cerdas Istimewa (I)</label>
	  		<input type="radio" name="kebutuhan_khusus" id="bakat" value="Bakat Istimewa (J)">
	  		<label for="bakat">13 Bakat Istimewa (J)</label>
	  		<input type="radio" name="kebutuhan_khusus" id="sulit" value="Kesulitan Belajar (K)">
	  		<label for="sulit">14 Kesulitan Belajar (K)</label></td>
	  </tr>
	  <tr>
	  	<td></td><td></td><td></td><td><input type="radio" name="kebutuhan_khusus" id="narkoba" value="Narkoba (N)">
	  		<label for="narkoba">15 Narkoba (N)</label>
	  		<input type="radio" name="kebutuhan_khusus" id="indigo" value="Indigo (O)">
	  		<label for="indigo">16 Indigo (O)</label>
	  		<input type="radio" name="kebutuhan_khusus" id="down" value="Down Sindrome (P)">
	  		<label for="down">17 Down Sindrome (P)</label>
	  		<input type="radio" name="kebutuhan_khusus" id="autis" value="Autis (Q)">
	  		<label for="autis">18 Autis (Q)</label></td>
	  </tr>
	  <tr>
	  	<td><label>19</label></td><td><label for="alamat">Alamat Jalan</label></td><td><label>:</label></td><td><input type="text" name="alamat" id="alamat"></td>
	  </tr>
	  <tr>
	  	<td><label>20</label></td><td><label for="rt">RT</label></td><td><label>:</label></td><td><input type="text" name="rt" id="rt"></td>
	  </tr>
	  <tr>
	  	<td><label>21</label></td><td><label for="rw">RW</label></td><td><label>:</label></td><td><input type="text" name="rw" id="rw"></td>
	  </tr>
	  <tr>
	  	<td><label>22</label></td><td><label for="dusun">Nama Dusun</label></td><td><label>:</label></td><td><input type="text" name="dusun" id="dusun"></td>
	  </tr>
	  <tr>
	  	<td><label>23</label></td><td><label for="desa">Kelurahan/Desa</label></td><td><label>:</label></td><td><input type="text" name="desa" id="desa"></td>
	  </tr>
	  <tr>
	  	<td><label>24</label></td><td><label for="kec">Kecamatan</label></td><td><label>:</label></td><td><input type="text" name="kecamatan" id="kec"></td>
	  </tr>
	  <tr>
	  	<td><label>25</label></td><td><label for="pos">Kode Pos</label></td><td><label>:</label></td><td><input type="text" name="kode_pos" id="pos"></td>
	  </tr>
	  <tr>
	  	<td><label>26</label></td><td><label>Tempat Tinggal</label></td><td><label>:</label></td><td>
	  		<input type="radio" name="tempat_tinggal" id="ortu" value="Bersama orang tua">
	  		<label for="ortu">1 Bersama orang tua</label>
	  		<input type="radio" name="tempat_tinggal" id="wali" value="Wali">
	  		<label for="wali">2 Wali</label>
	  		<input type="radio" name="tempat_tinggal" id="kos" value="Kos">
	  		<label for="kos">3 Kos</label>
	  		<input type="radio" name="tempat_tinggal" id="asrama" value="Asrama">
	  		<label for="asrama">4 Asrama</label>
	  		<input type="radio" name="tempat_tinggal" id="panti" value="Panti Asuhan">
	  		<label for="panti">5 Panti Asuhan</label>
	  		<input type="radio" name="tempat_tinggal" id="lainya" value="Lainnya">
	  		<label for="lainya">9 Lainnya</label>
	  	</td>
	  </tr>
	  <tr>
	  	<td><label>27</label></td><td><label>Moda Transportasi</label></td><td><label>:</label></td><td>
	  		<input type="radio" name="transportasi" id="jalan" value="Jalan kaki">
	  		<label for="jalan">01) Jalan kaki</label>
	  		<input type="radio" name="transportasi" id="pribadi" value="Kendaraan pribadi">
	  		<label for="pribadi">02) Kendaraan pribadi</label>
	  		<input type="radio" name="transportasi" id="umum" value="Kendaraan Umum/angkot/Pete-pete">
	  		<label for="umum">03) Kendaraan Umum/angkot/Pete-pete</label>
	  		<input type="radio" name="transportasi" id="jemput" value="Jemputan Sekolah">
	  		<label for="jemput">04) Jemputan Sekolah</label>
	  		<input type="radio" name="transportasi" id="kereta" value="Kereta Api">
	  		<label for="kereta">05) Kereta Api</label>
	  		<input type="radio" name="transportasi" id="ojek" value="Ojek">
	  		<label for="ojek">06) Ojek</label>
	  	</td>
	  </tr>
	  <tr>
	  	<td></td><td></td><td></td><td><input type="radio" name="transportasi" id="andong" value="Andong/Bendi/Sado/Dokar/Delman/Becak">
	  		<label for="andong">07) Andong/Bendi/Sado/Dokar/Delman/Becak</label>
	  		<input type="radio" name="transportasi" id="perahu" value="Perahu penyebrangan/Rakit/Getek">
	  		<label for="perahu">08) Perahu penyebrangan/Rakit/Getek</label>
	  		<input type="radio" name="transportasi" id="lain27" value="Lainnya">
	  		<label for="lain27">99) Lainnya</label></td>
	  </tr>
	  <tr>
	  	<td><label>28</label></td><td><label for="nomor_hp">Nomor HP</label></td><td><label>:</label></td><td><input type="text" name="nomor_hp" id="nomor_hp"></td>
	  </tr>
	  <tr>
	  	<td><label>29</label></td><td><label for="nomor_telp">Nomor Telepon</label></td><td><label>:</label></td><td><input type="text" name="nomor_telp" id="nomor_telp"></td>
	  </tr>
	  <tr>
	  	<td><label>30</label></td><td><label for="email">E-mail Pribadi</label></td><td><label>:</label></td><td><input type="email" name="email" id="email"></td>
	  </tr>
	  <tr>
	  	<td><label>31</label></td><td><label>Penerima KPS/PKH/KIP</label></td><td><label>:</label></td><td>
	  		<input type="radio" name="penerima_kps" id="ya" value="Ya">
	  		<label for="ya">Ya</label>
	  		<input type="radio" name="penerima_kps" id="tidak" value="Tidak">
	  		<label for="tidak">Tidak</label></td>
	  </tr>
	  <tr>
	  	<td><label>32</label></td><td><label for="no_kps">No. KPS/KKS/PKH/KIP</label></td><td><label>:</label></td><td><input type="text" name="nomor_kps" id="no_kps"><label><i>*) Apabila Menerima</i></label></td>
	  </tr>
	  <tr>
	  	<td><label>33</label></td><td><label>Kewarganegaraan</label></td><td><label>:</label></td><td>
	  		<input type="radio" name="kewarganegaraan" id="indo" value="Indonesia (WNI)">
	  		<label for="indo">Indonesia (WNI)</label>
	  		<input type="radio" name="kewarganegaraan" id="asing" value="Asing (WNA)">
	  		<label for="asing">Asing (WNA):</label>
	  		<label for="nama_negara">Nama Negara</label>
	  		<input type="text" name="nama_negara" id="nama_negara">
	  	</td>
	  </tr>
	  <tr>
	  	<td></td><td></td><td></td><td><button type="submit" class="btn btn-primary">Daftar</button></td>
	  </tr>
	 </table>
	</div>
	</form>
	<form method="POST" action="reportformpendaftaran.php" class="semua">
		<div class="unduh">
			<label class="a">Rekapitulasi data dapat diunduh pada link berikut:</label>
			<button type="submit">Download Excel</button>
		</div>
	</form>
	<form method="POST" action="reportpendaftaranpdf.php" class="semua">
		<div class="unduh1">
			<label class="a">Rekapitulasi data dapat diunduh pada link berikut:</label>
			<button type="submit">Download PDF</button>
		</div>
	</form>
</body>
</html>