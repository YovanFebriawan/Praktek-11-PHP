<!-- Menambahkan skrip php -->
<?php
// Memasukkan file eksternal ke dalam php
include('koneksipendaftaran.php');
// Memasukkan plugin dompdf
require_once("dompdf/autoload.inc.php");
// Menggunakan namespace dompdf
use Dompdf\Dompdf;
// Membuat object
$dompdf = new Dompdf();
// Menyiman perintah/query ke dalam variabel
$query = mysqli_query($koneksi,"select * from pendaftaran");
// Membuat variabel uang berisi kode untuk dikonvert menjadi pdf
$html = '<center><h3>Laporan Form Pendaftaran</h3></center><br/><br/><br/>';
$html .= '<table border="1" width="50%">
 <tr>
 <th>No</th>
 <th>Tanggal Mengisi</th>
 <th>Jenis Pendaftaran</th>
 <th>Tanggal Masuk Sekolah</th>
 <th>NIS</th>
 <th>Nomor Peserta Ujian</th>
 <th>Apakah pernah PAUD</th>
 <th>Apakah pernah TK</th>
 <th>SKHUN</th>
 <th>Ijazah</th>
 <th>Hobi</th>
 <th>Cita-cita</th>
 <th>Nama Lengkap</th>
 <th>Jenis Kelamin</th>
 <th>NISN</th>
 <th>NIK</th>
 <th>Tempat Lahir</th>
 <th>Tanggal Lahir</th>
 <th>Agama</th>
 <th>Berkebutuhan Khusus</th>
 <th>Alamat Jalan</th>
 <th>RT</th>
 <th>RW</th>
 <th>Nama Dusun</th>
 <th>Nama Kelurahan/Desa</th>
 <th>Kecamatan</th>
 <th>Kode Pos</th>
 <th>Tempat Tinggal</th>
 <th>Moda Transportasi</th>
 <th>Nomor HP</th>
 <th>Nomor Telepon</th>
 <th>E-mail Pribadi</th>
 <th>Penerima KPS/PKH/KIP</th>
 <th>No. KPS/KKS/PKH/KIP</th>
 <th>Kewarganegaraan</th>
 <th>Nama Negara</th>
 </tr>';
 // Memberi nomor urut tiap data
$no = 1;
// Membaca tiap data dari database
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['tgl']."</td>
 <td>".$row['jenis_pendaftaran']."</td>
 <td>".$row['tgl_masuksekolah']."</td>
 <td>".$row['nis']."</td>
 <td>".$row['nomor_peserta']."</td>
 <td>".$row['paud']."</td>
 <td>".$row['tk']."</td>
 <td>".$row['skhun']."</td>
 <td>".$row['ijazah']."</td>
 <td>".$row['hobi']."</td>
 <td>".$row['cita']."</td>
 <td>".$row['nama']."</td>
 <td>".$row['jenis_kelamin']."</td>
 <td>".$row['nisn']."</td>
 <td>".$row['nik']."</td>
 <td>".$row['tempat_lahir']."</td>
 <td>".$row['tgl_lahir']."</td>
 <td>".$row['agama']."</td>
 <td>".$row['kebutuhan_khusus']."</td>
 <td>".$row['alamat']."</td>
 <td>".$row['rt']."</td>
 <td>".$row['rw']."</td>
 <td>".$row['dusun']."</td>
 <td>".$row['desa']."</td>
 <td>".$row['kecamatan']."</td>
 <td>".$row['kode_pos']."</td>
 <td>".$row['tempat_tinggal']."</td>
 <td>".$row['transportasi']."</td>
 <td>".$row['nomor_hp']."</td>
 <td>".$row['nomor_telp']."</td>
 <td>".$row['email']."</td>
 <td>".$row['penerima_kps']."</td>
 <td>".$row['nomor_kps']."</td>
 <td>".$row['kewarganegaraan']."</td>
 <td>".$row['nama_negara']."</td>
 </tr>";
 $no++;
}
// Memberi tutup tag html
$html .= "</html>";
// Memuat halaman html
$dompdf->loadHtml($html);
// Mengatur ukuran dan orientasi kertas
$dompdf->setPaper('A1', 'landscape');
// Render dari HTML ke PDF
$dompdf->render();
// Melakukan output file Pdf
ob_end_clean();
$dompdf->stream("laporan_form_pendaftaran.pdf");
?>