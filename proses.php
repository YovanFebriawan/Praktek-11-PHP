<!-- Menambahkan skrip php -->
<?php
// Menambahkan file koneksi.php
require 'koneksipendaftaran.php';
// Mengecek setiap kolom data
if (empty($_POST['tgl'])){
	// Mencetak teks
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['jenis_pendaftaran'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['tgl_masuksekolah'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['nis'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['nomor_peserta'])){		
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['paud'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['tk'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['skhun'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['ijazah'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['hobi'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['cita'])){		
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['nama'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['jenis_kelamin'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['nisn'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['nik'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['tempat_lahir'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['agama'])){		
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['kebutuhan_khusus'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['alamat'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['rt'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['rw'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['dusun'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['desa'])){		
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['kecamatan'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['kode_pos'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['tempat_tinggal'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['transportasi'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['nomor_hp'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['nomor_telp'])){		
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['email'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['penerima_kps'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['nomor_kps'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['kewarganegaraan'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} elseif (empty($_POST['nama_negara'])){
	echo "Kolom tidak boleh kosong, silahkan mengecek formulir pendaftaran kembali";
} else{
	// Mengambil nilai dan memasukkan ke dalam variabel
$tgl				= $_POST['tgl'];
$jenis_pendaftaran	= $_POST['jenis_pendaftaran'];
$tgl_masuksekolah	= $_POST['tgl_masuksekolah'];
$nis				= $_POST['nis'];
$nomor_peserta		= $_POST['nomor_peserta'];
$paud				= $_POST['paud'];
$tk					= $_POST['tk'];
$skhun				= $_POST['skhun'];
$ijazah				= $_POST['ijazah'];
$hobi				= $_POST['hobi'];
$cita				= $_POST['cita'];
$nama				= $_POST['nama'];
$jenis_kelamin		= $_POST['jenis_kelamin'];
$nisn				= $_POST['nisn'];
$nik				= $_POST['nik'];
$tempat_lahir		= $_POST['tempat_lahir'];
$tgl_lahir			= $_POST['tgl_lahir'];
$agama				= $_POST['agama'];
$kebutuhan_khusus	= $_POST['kebutuhan_khusus'];
$alamat				= $_POST['alamat'];
$rt					= $_POST['rt'];
$rw					= $_POST['rw'];
$dusun				= $_POST['dusun'];
$desa				= $_POST['desa'];
$kecamatan			= $_POST['kecamatan'];
$kode_pos			= $_POST['kode_pos'];
$tempat_tinggal		= $_POST['tempat_tinggal'];
$transportasi		= $_POST['transportasi'];
$nomor_hp			= $_POST['nomor_hp'];
$nomor_telp			= $_POST['nomor_telp'];
$email				= $_POST['email'];
$penerima_kps		= $_POST['penerima_kps'];
$nomor_kps			= $_POST['nomor_kps'];
$kewarganegaraan	= $_POST['kewarganegaraan'];
$nama_negara		= $_POST['nama_negara'];
// Perintah/query untuk memasukkan data
$query = "INSERT INTO pendaftaran SET tgl='$tgl', jenis_pendaftaran='$jenis_pendaftaran', tgl_masuksekolah='$tgl_masuksekolah', nis='$nis', nomor_peserta='$nomor_peserta', paud='$paud', tk='$tk', skhun='$skhun', ijazah='$ijazah', hobi='$hobi',cita='$cita', nama='$nama', jenis_kelamin='$jenis_kelamin', nisn='$nisn', nik='$nik', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', agama='$agama', kebutuhan_khusus='$kebutuhan_khusus', alamat='$alamat', rt='$rt', rw='$rw', dusun='$dusun', desa='$desa', kecamatan='$kecamatan', kode_pos='$kode_pos', tempat_tinggal='$tempat_tinggal', transportasi='$transportasi', nomor_hp='$nomor_hp', nomor_telp='$nomor_telp', email='$email', penerima_kps='$penerima_kps', nomor_kps='$nomor_kps', kewarganegaraan='$kewarganegaraan', nama_negara='$nama_negara'";
// Menjalankan fungsi query dengan menggunakan fungsi koneksi
$data = mysqli_query($koneksi, $query);
// Melakukan pengecekan pada fungsi data
if (!$data){
	// Mencetak teks dan kesalahan kode serta menutup koneksi
	die('Gagal: '.mysqli_error($koneksi));
// Dieksekusi ketika kondisi salah
} else{
	// Menampilkan teks
	echo "Pendaftaran Sukses";
}
}
?>