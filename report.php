<!-- Menambahkan skrip php -->
<?php
// Memasukkan file eksternal ke dalam php
include('koneksi.php');
// Memasukkan plugin dompdf
require_once("dompdf/autoload.inc.php");
// Mggunakan namespace dompdf
use Dompdf\Dompdf;
// Membuat object
$dompdf = new Dompdf();
// Menyiman perintah/query ke dalam variabel
$query = mysqli_query($koneksi,"select * from tb_siswa");
// Membuat variabel uang berisi kode untuk dikonvert menjadi pdf
$html = '<center><h3>Daftar Nama Siswa</h3></center><hr/><br/><br/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Kelas</th>
 <th>Alamat</th>
 </tr>';
 // Memberi nomor urut tiap data
$no = 1;
// Membaca tiap data dari database
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['nama']."</td>
 <td>".$row['kelas']."</td>
 <td>".$row['alamat']."</td>
 </tr>";
 $no++;
}
// Memberi tutup tag html
$html .= "</html>";
// Memuat halaman html
$dompdf->loadHtml($html);
// Mengatur ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Render dari HTML ke PDF
$dompdf->render();
// Melakukan output file Pdf
ob_end_clean();
$dompdf->stream("laporan_siswa.pdf");
?>